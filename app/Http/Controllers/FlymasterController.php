<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class FlymasterController extends Controller
{
    public function getFlymaster()
    {
        $groupId = "6253";  // 2024 J1 日本選手権
        // 大会ごとに2個所修正
        // TODO DBに大会名とIDを登録する

        $url = env('FLYMASTER_URL');
        $user = env('FLYMASTER_USER');
        $pwd = md5(env('FLYMASTER_PWD'));
        $json = 1;

        $curPlayers = Player::getPlayers();
        $flymasterData = Http::get($url . '?user=' . $user . '&pwd=' . $pwd . '&grpid=' . $groupId . '&json=' . $json)
            ->json($key = null);

        // $today = Carbon::today('Asia/Tokyo');

        foreach($curPlayers as $player){
            if($player->map){
                continue;
            }
            foreach($flymasterData as $flymaster){
                if( $flymaster['COMPE_id'] != $player->comp_id ||
                    // $flymaster['lastseen'] < $today ||
                    $flymaster['lastseen'] <= ($player->updated_at)->format('Y-m-d H:i:s') ||
                    $flymaster['report_back'] <= 3 ||
                    $flymaster['report_back'] >= 7
                ){
                    continue;
                }
                Player::putPlayerFromFlymaster($flymaster);
            }
        }

        $updatedPlayers = Player::getPlayers();
        return $updatedPlayers;
    }

    public function getCurMap(Request $request)
    {
        $groupId = "6253";  // 2024 J1 日本選手権
        // 大会ごとに2個所修正
        // TODO DBに大会名とIDを登録する

        $url = env('FLYMASTER_URL');
        $user = env('FLYMASTER_USER');
        $pwd = md5(env('FLYMASTER_PWD'));
        $json = 1;
        $rb = 0;

        $flymasterData = Http::get($url . '?user=' . $user . '&pwd=' . $pwd . '&grpid=' . $groupId . '&json=' . $json . '&rb=' . $rb)
            ->json($key = null);

        foreach($flymasterData as $flymaster){
            if( $flymaster['COMPE_id'] == $request->compId){
                $curMapUrl = 'https://maps.google.com/maps?q=' . $flymaster['latitude'] . ',' . $flymaster['longitude'];
                break;
            }
        }

        return $curMapUrl;
    }
}
