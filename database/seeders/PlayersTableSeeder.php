<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Player;
use Carbon\Carbon;

class PlayersTableSeeder extends Seeder
{
    public function run()
    {
        $params = [
            ['no' => 1, 'name' => '多賀 純一'],
            ['no' => 2, 'name' => '上山 太郎'],
            ['no' => 3, 'name' => '成山 基義'],
            ['no' => 4, 'name' => '岩﨑 拓夫'],
            ['no' => 5, 'name' => '阿知波 広和'],
            ['no' => 6, 'name' => '平木 啓子'],
            ['no' => 7, 'name' => '荒井 大悟'],
            ['no' => 8, 'name' => '文字 英彰'],
            ['no' => 9, 'name' => '山下 敦子'],
            ['no' => 10, 'name' => '星田 真一'],
            ['no' => 11, 'name' => '小梶 渓太'],
            ['no' => 12, 'name' => '中目 みどり'],
            ['no' => 13, 'name' => '成山 奈緒'],
            ['no' => 14, 'name' => '青木 和広'],
            ['no' => 15, 'name' => '和田 浩二'],
            ['no' => 16, 'name' => '小幡 洋三'],
            ['no' => 17, 'name' => '橋本 耕一'],
            ['no' => 18, 'name' => '中村 浩希'],
            ['no' => 19, 'name' => '川地 正孝'],
            ['no' => 20, 'name' => '花田 瞬'],
            ['no' => 21, 'name' => '稲見 祐二'],
            ['no' => 23, 'name' => '廣川 靖晃'],
            ['no' => 26, 'name' => '小林 大晃'],
            ['no' => 28, 'name' => '長島 信一'],
            ['no' => 30, 'name' => '杉下 拓也'],
            ['no' => 31, 'name' => '若山 朋晴'],
            ['no' => 32, 'name' => '四方 純'],
            ['no' => 35, 'name' => '吉原 紀子'],
            ['no' => 36, 'name' => '森田 賢'],
            ['no' => 37, 'name' => '北村 和之'],
            ['no' => 38, 'name' => '中川 喜昭'],
            ['no' => 39, 'name' => '村田 好彦'],
            ['no' => 41, 'name' => '田村 昌久'],
            ['no' => 42, 'name' => '早坂 真有美'],
            ['no' => 43, 'name' => '辻本 恵一'],
            ['no' => 45, 'name' => '吉川 朋子'],
            ['no' => 46, 'name' => '佐藤 研斗'],
            ['no' => 48, 'name' => '木村 亜希子'],
            ['no' => 50, 'name' => '石井 旭'],
            ['no' => 51, 'name' => '平井 直行'],
            ['no' => 52, 'name' => '北嶋 康嗣'],
            ['no' => 55, 'name' => '氏田 敏彦'],
            ['no' => 59, 'name' => '杉山 卓也'],
            ['no' => 61, 'name' => '石川 滋一'],
            ['no' => 62, 'name' => '濱田 革'],
            ['no' => 66, 'name' => '金本 知子'],
            ['no' => 68, 'name' => '山田 裕一'],
            ['no' => 69, 'name' => '大田 豊承'],
            ['no' => 75, 'name' => '田村 康子'],
            ['no' => 77, 'name' => '中里 勝'],
            ['no' => 79, 'name' => '花村 泰明'],
            ['no' => 84, 'name' => '奥山 俊'],
            ['no' => 85, 'name' => '中村 哲也'],
            ['no' => 91, 'name' => '岩谷 勝弘'],
            ['no' => 98, 'name' => '清水 淳'],
            ['no' => 102, 'name' => '前川 克哉'],
            ['no' => 103, 'name' => '大渕 勲'],
            ['no' => 122, 'name' => '田邊 万作'],
            ['no' => 123, 'name' => 'Seals Jeff'],
            ['no' => 124, 'name' => '梅岡 翔吾'],
        ];

        $now = Carbon::now();
        foreach ($params as $param) {
            $param['glider_type'] = 'パラ';
            $param['state'] = '---';
            $param['map'] = '';
            $param['driver'] = '---';
            // $param['order'] = NULL;
            
            // $param['latitude'] = NULL;
            // $param['longitude'] = NULL;
            // $param['distance'] = NULL;
            // $param['direction'] = NULL;

            $param['created_at'] = $now;
            $param['updated_at'] = $now;

            Player::insert($param);
        }
    }
}
