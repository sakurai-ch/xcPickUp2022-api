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
            ['no' =>  1, 'comp_id' => 1, 'name' => '橋本 耕一', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  2, 'comp_id' => 2, 'name' => '岩﨑 拓夫', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  3, 'comp_id' => 3, 'name' => '小林 大晃', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  4, 'comp_id' => 4, 'name' => '山下 敦子', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  5, 'comp_id' => 5, 'name' => '稲見 祐二', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  6, 'comp_id' => 6, 'name' => '和田 浩二', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  7, 'comp_id' => 7, 'name' => '中村 浩希', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  8, 'comp_id' => 8, 'name' => '多賀 純一', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  9, 'comp_id' => 9, 'name' => '入山 朋一', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  10, 'comp_id' => 10, 'name' => '隅 秀敏', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  12, 'comp_id' => 12, 'name' => '平木 啓子', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  13, 'comp_id' => 13, 'name' => '杉山 卓也', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  14, 'comp_id' => 14, 'name' => '谷口 正和', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  15, 'comp_id' => 15, 'name' => '竹尾 雅行', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  16, 'comp_id' => 16, 'name' => '杉下 拓也', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  17, 'comp_id' => 17, 'name' => '宮田 清和', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  18, 'comp_id' => 18, 'name' => '青木 和広', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  19, 'comp_id' => 19, 'name' => '若山 朋晴', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  20, 'comp_id' => 20, 'name' => '長島 信一', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  21, 'comp_id' => 21, 'name' => '中川 喜昭', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  22, 'comp_id' => 22, 'name' => '中目 みどり', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  23, 'comp_id' => 23, 'name' => '早坂 真有美', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  25, 'comp_id' => 25, 'name' => '荒井 大悟', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  26, 'comp_id' => 26, 'name' => '岩本 晃治', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  27, 'comp_id' => 27, 'name' => '氏田 敏彦', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  28, 'comp_id' => 28, 'name' => '岩谷 勝弘', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  30, 'comp_id' => 30, 'name' => '梅迫 賢一', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  31, 'comp_id' => 31, 'name' => '石井 亜希子', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  32, 'comp_id' => 32, 'name' => '福丸 貴大', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  35, 'comp_id' => 35, 'name' => '福井 雅春', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  39, 'comp_id' => 39, 'name' => '平井 直行', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  40, 'comp_id' => 40, 'name' => '中村 哲也', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  43, 'comp_id' => 43, 'name' => '花田 瞬', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  44, 'comp_id' => 44, 'name' => '小林 敦之', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  46, 'comp_id' => 46, 'name' => '濱田 革', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  47, 'comp_id' => 47, 'name' => '金本 知子', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  48, 'comp_id' => 48, 'name' => '川地 正孝', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  51, 'comp_id' => 51, 'name' => '東 智子', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  52, 'comp_id' => 52, 'name' => '坂口 実', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  56, 'comp_id' => 56, 'name' => '大橋 直史', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  60, 'comp_id' => 60, 'name' => '高橋 さゆり', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  62, 'comp_id' => 62, 'name' => '吉川 朋子', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  67, 'comp_id' => 67, 'name' => '内藤 丈', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  69, 'comp_id' => 69, 'name' => '武貞 伸明', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  71, 'comp_id' => 71, 'name' => '渡邊 正剛', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  73, 'comp_id' => 73, 'name' => '北嶋 康嗣', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  78, 'comp_id' => 78, 'name' => '関根 久男', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  82, 'comp_id' => 82, 'name' => '梅岡 翔吾', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  85, 'comp_id' => 85, 'name' => '奥山 俊', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  87, 'comp_id' => 87, 'name' => '藤木 芳猛', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  90, 'comp_id' => 90, 'name' => '山田 裕一', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  91, 'comp_id' => 91, 'name' => '疋田 祥丈', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  95, 'comp_id' => 95, 'name' => '櫻井 俊秀', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  101, 'comp_id' => 101, 'name' => '大田 豊承', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  102, 'comp_id' => 102, 'name' => '小野 三千博', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  115, 'comp_id' => 115, 'name' => '関根 靖明', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  116, 'comp_id' => 116, 'name' => '瀧鼻 秀明', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  123, 'comp_id' => 123, 'name' => '笹栗 暁', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  125, 'comp_id' => 125, 'name' => 'Huschle Ren', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  126, 'comp_id' => 126, 'name' => 'Monaghan Marcel', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  128, 'comp_id' => 128, 'name' => '籾山 孝一', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  131, 'comp_id' => 131, 'name' => '佐藤 研斗', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  132, 'comp_id' => 132, 'name' => '川波 義宜', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  134, 'comp_id' => 134, 'name' => '里見 憲一', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  138, 'comp_id' => 138, 'name' => '田幡 祐基', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  140, 'comp_id' => 140, 'name' => 'Dutertre Yannick', 'glider_type' => 'Ⅳ', 'state' => '---'],         
        ];

        $now = Carbon::now();
        foreach ($params as $param) {
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
