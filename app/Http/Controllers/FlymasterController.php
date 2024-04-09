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
        $groupId = "5763";  // 2024 どじからす

        $curPlayers = Player::getPlayers();
        $flymasterData = Http::get('https://wlb.flymaster.net/get_trackers_pos.php?grpid=' . $groupId . '&json=1')
            ->json($key = null);

        // TODO DBに大会名とIDを登録する
        // TODO パラメータを追加して取得時に絞る
        // TODO ドライバー画面から現在値を見られるようにする

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
}
