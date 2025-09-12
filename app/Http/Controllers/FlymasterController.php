<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Competition;
use App\Models\ReferencePoint;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class FlymasterController extends Controller
{
    public function getFlymaster()
    {
        $url = env('FLYMASTER_URL');
        $json = 1;

        $competition = Competition::getLastCompetition();
        $token = $competition -> token;
        $groupId = $competition -> group_id;

        $referencePoint = ReferencePoint::getReferencePoint($competition->reference_point_id);
        $curPlayers = Player::getPlayers();
        $flymasterData = Http::get($url . '?token=' . $token . '&grpid=' . $groupId . '&json=' . $json)
            ->json($key = null);

        // $today = Carbon::today('Asia/Tokyo');

        foreach($curPlayers as $player){
            if($player->map){
                continue;
            }
            foreach($flymasterData as $flymaster){
                if( $flymaster['COMPE_id'] != $player->comp_id ||
                    // $flymaster['lastseen'] < $today ||
                    $flymaster['lastseen'] <= ($player->updated_at)->format('Y-m-d H:i:s') ||  // 動作確認時はコメントアウト
                    $flymaster['report_back'] <= 3 ||
                    $flymaster['report_back'] >= 7
                ){
                    continue;
                }
                Player::putPlayerFromFlymaster($flymaster, $referencePoint);
            }
        }

        $updatedPlayers = Player::getPlayers();
        return $updatedPlayers;
    }

    public function getCurMap(Request $request)
    {
        // 大会ごとに.envのTOKEN、GROUPIDを設定
        $url = env('FLYMASTER_URL');
        $json = 1;
        $rb = 0;

        $competition = Competition::getLastCompetition();
        $token = $competition -> token;
        $groupId = $competition -> group_id;

        $flymasterData = Http::get($url . '?token=' . $token . '&grpid=' . $groupId . '&json=' . $json . '&rb=' . $rb)
            ->json($key = null);

        $curMapUrl = '';
        foreach($flymasterData as $flymaster){
            if( $flymaster['COMPE_id'] == $request->compId){
                $curMapUrl = 'https://maps.google.com/maps?q=' . $flymaster['latitude'] . ',' . $flymaster['longitude'];
                break;
            }
        }

        return $curMapUrl;
    }
}
