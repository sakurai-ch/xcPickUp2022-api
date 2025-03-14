<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Exception;

class Player extends Model
{
    public static function getPlayers() {
        // updatePlayers();
        $players = Player::orderBy('no', 'asc')->get();
        return $players;
    }

    public static function getSortedPlayers() {
        $sortedPlayers = Player::orderBy('order', 'asc')->get();
        return $sortedPlayers;
    }

    public static function createPlayers($players) {
        Player::truncate();

        $now = Carbon::now();
        foreach ($players as $player) {
            $player['state'] = '---';
            $player['map'] = '';
            $player['driver'] = '---';
            $player['created_at'] = $now;
            $player['updated_at'] = $now;

            Player::insert($player);
        }

        $createdPlayer = Player::orderBy('no', 'asc')->get();
        return $createdPlayer;
    }

    public static function putPlayer(Request $request) {
        $TOLat = 36.276836;
        $TOLng = 140.145818;
        
        $params = [];
        $dist_array = [];

        $currPlayer = NULL;
        if($request->id){
            $currPlayer = Player::where('id', $request->id)->first();
        }else if($request->comp_id){
            $currPlayer = Player::where('comp_id', $request->comp_id)->first();
        }
        if(!$currPlayer){
            return Null;
        }

        if($request->state != NULL && $request->state != $currPlayer->state) {
            $params['state'] = $request->state;
        }

        if($request->driver != NULL && $request->driver != $currPlayer->driver) {
            $params['driver'] = $request->driver;
        }
        
        if($request->order == "") {
            $params['order'] = NULL;
        }elseif($request->order != NULL && $request->order != $currPlayer->order) {
            $params['order'] = $request->order;
        }

        if($request->map != $currPlayer->map) {
            $params['map'] = $request->map;

            $position = Player::post_marker($request);
            if($position!=NULL){
                $lat = (float)$position["lat"];
                $lng = (float)$position["lng"];
                $dist_array = Player::measure_distance($TOLat, $TOLng, $lat, $lng);

                $params['latitude'] = $lat;
                $params['longitude'] = $lng;
                $params['distance'] = round($dist_array['dist']);
                $params['direction'] = $dist_array['dir'];
            } else {
                $params['latitude'] = null;
                $params['longitude'] = null;
                $params['distance'] = null;
                $params['direction'] = null;
            }
        }

        if($params!=[]){
            $params['updated_at'] = Carbon::now();

            if($request->id){
                Player::where('id', $request->id)
                    ->update($params);
            }else if($request->comp_id){
                Player::where('comp_id', $request->comp_id)
                    ->update($params);
            }
        }

        $updatedPlayer = NULL;
        if($request->id){
            $updatedPlayer = Player::where('id', $request->id)->first();
        }else if($request->comp_id){
            $updatedPlayer = Player::where('comp_id', $request->comp_id)->first();
        }
        return $updatedPlayer;
    }

    public static function putPlayerFromFlymaster($flymaster)
    {
        if( !$flymaster['COMPE_id'] || !$flymaster['latitude'] || !$flymaster['longitude'] ){
            return Null;
        }

        $TOLat = 36.276836;
        $TOLng = 140.145818;
        $params = [];
        $dist_array = [];

        $lat = (float)($flymaster['latitude']);
        $lng = (float)($flymaster['longitude']);
        $dist_array = Player::measure_distance($TOLat, $TOLng, $lat, $lng);
        $mapUrl = "https://maps.google.com/?q=" . $lat . "," . $lng;
        
        $params['latitude'] = $lat;
        $params['longitude'] = $lng;
        $params['distance'] = round($dist_array['dist']);
        $params['direction'] = $dist_array['dir'];
        $params['map'] = $mapUrl;
        $params['state'] = '未';
        $params['updated_at'] = Carbon::now();

        $result = Player::where('comp_id', $flymaster['COMPE_id'])
            ->update($params);
        return $result;
    }

    public static function post_marker($request)
    {
        $text = $request->map;
        $position = Player::preg_match_position_data($text);

        if ($position == null) {
            $url_text = Player::search_url($text);
            if ($url_text != null) {
                $position = Player::preg_match_position_data($url_text);
            }
        }
        return $position;
    }

    public static function preg_match_position_data($text)
    {
        $north_latitude = null;
        $east_longitude = null;
        // if (preg_match('/[3][5-9]\.[0-9]{2,}/', $text, $matches)) {
        if (preg_match('/[34][0-9]\.[0-9]{2,}/', $text, $matches)) {
            $north_latitude = $matches[0];
        }
        if (preg_match('/[1][34][01289]\.[0-9]{2,}/', $text, $matches)) {
            $east_longitude = $matches[0];
        }

        if ($north_latitude != null && $east_longitude != null) {
            $position = array("lat" => $north_latitude, "lng" => $east_longitude);
            return $position;
        } else {
            return null;
        }
    }

    public static function search_url($text)
    {
        $url_text = null;
        if (preg_match('(https?://[-_.!~*\'()a-zA-Z0-9;/?:@&=+$,%#]+)', $text, $matches)) {
            try {
                $url = $matches[0];
                $headers = get_headers($url, 1);
                if (isset($headers['Location'])) {
                    if (is_array($headers['Location'])) {
                        $url_text = array_pop($headers['Location']);
                    } else {
                        $url_text = $headers['Location'];
                    }
                }
            } catch (Exception $e) {
                $url_text = $e->getMessage();
            }
        }
        return $url_text;
    }

    public static function measure_distance($lat0, $lng0, $lat1, $lng1)
    {
        $r = 6378.137;
        $dist_NS = 2*pi()*$r * ($lat1-$lat0)/360;
        $dist_EW = 2*pi()*$r * cos(deg2rad(($lat1+$lat0)/2))*($lng1-$lng0)/360;
        $dist = sqrt($dist_NS**2 + $dist_EW**2);

        $asin_dir = asin($dist_NS/$dist);
        $acos_dir = acos($dist_EW/$dist);
        $dir = "";
            if( $asin_dir>= 3/8*pi()                         ) { $dir = "N" ;} 
        elseif( $asin_dir>  1/8*pi() && $acos_dir<  3/8*pi() ) { $dir = "NE";} 
        elseif(                         $acos_dir<= 1/8*pi() ) { $dir = "E" ;} 
        elseif( $asin_dir< -1/8*pi() && $acos_dir<  3/8*pi() ) { $dir = "SE";} 
        elseif( $asin_dir<=-3/8*pi()                         ) { $dir = "S" ;} 
        elseif( $asin_dir< -1/8*pi() && $acos_dir>  5/8*pi() ) { $dir = "SW";} 
        elseif(                         $acos_dir>= 7/8*pi() ) { $dir = "W" ;} 
        elseif( $asin_dir>  1/8*pi() && $acos_dir>  5/8*pi() ) { $dir = "NW";} 
        else                                                   { $dir = ""  ;}

        return [ 'dist' => $dist, 'dir' => $dir ];
    }

    public static function resetPlayersPositon() {
        $now = Carbon::now();

        $params['state'] = '---';
        $params['map'] = '';
        $params['driver'] = '---';
        $params['order'] = null;
        $params['latitude'] = null;
        $params['longitude'] = null;
        $params['distance'] = null;
        $params['direction'] = null;
        $params['updated_at'] = Carbon::now();
        Player::query()->update($params);

        $resetPlayers = Player::orderBy('no', 'asc')->get();
        return $resetPlayers;
    }

    protected $fillable = [
        'state',
        'map',
        'driver',
        'latitude',
        'longitude',
        'distance',
        'direction',
    ];

    // use HasFactory;
}
