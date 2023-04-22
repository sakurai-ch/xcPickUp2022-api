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
            ['no' =>  1, 'comp_id' => 1, 'name' => '秋吉 壮志', 'glider_type' => 'Ⅰ', 'state' => '---'],
            ['no' =>  2, 'comp_id' => 2, 'name' => '荒井大悟', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  3, 'comp_id' => 3, 'name' => '飯田美咲', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  4, 'comp_id' => 4, 'name' => '石川大志', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  5, 'comp_id' => 5, 'name' => '石坂繁人', 'glider_type' => 'Ⅰ', 'state' => '---'],
            ['no' =>  6, 'comp_id' => 6, 'name' => '石部　孝宏', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  7, 'comp_id' => 7, 'name' => '伊藤　勝啓', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  8, 'comp_id' => 8, 'name' => '伊藤 龍那', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  9, 'comp_id' => 9, 'name' => '岩崎 正芳', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  10, 'comp_id' => 10, 'name' => '右近隆則', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  11, 'comp_id' => 11, 'name' => '内田　秀子', 'glider_type' => 'Ⅰ', 'state' => '---'],
            ['no' =>  12, 'comp_id' => 12, 'name' => '大石 夏子', 'glider_type' => 'Ⅰ', 'state' => '---'],
            ['no' =>  13, 'comp_id' => 13, 'name' => '岡田伸弘', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  14, 'comp_id' => 14, 'name' => '柿原　総', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  15, 'comp_id' => 15, 'name' => '嘉山 留美', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  16, 'comp_id' => 16, 'name' => '川名　啓', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  17, 'comp_id' => 17, 'name' => '川名　美江', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  18, 'comp_id' => 18, 'name' => '木村豪一', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  19, 'comp_id' => 19, 'name' => '久保田治人', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  20, 'comp_id' => 20, 'name' => '熊谷 勝秀', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  21, 'comp_id' => 21, 'name' => '五位渕孝幸', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  22, 'comp_id' => 22, 'name' => '古坂 学俊', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  23, 'comp_id' => 23, 'name' => '小高史郎', 'glider_type' => 'Ⅰ', 'state' => '---'],
            ['no' =>  24, 'comp_id' => 24, 'name' => '児玉智雅', 'glider_type' => 'Ⅰ', 'state' => '---'],
            ['no' =>  25, 'comp_id' => 25, 'name' => '櫻井さやか', 'glider_type' => 'Ⅰ', 'state' => '---'],
            ['no' =>  26, 'comp_id' => 26, 'name' => '櫻井 大朗', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  27, 'comp_id' => 27, 'name' => '佐々木則生', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  28, 'comp_id' => 28, 'name' => '塩野正光', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  29, 'comp_id' => 29, 'name' => '宍戸　俊之', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  30, 'comp_id' => 30, 'name' => '清水　高志', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  31, 'comp_id' => 31, 'name' => '杉下拓也', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  32, 'comp_id' => 32, 'name' => '須田健二', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  33, 'comp_id' => 33, 'name' => '砂間隆司', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  34, 'comp_id' => 34, 'name' => '住友　弘', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  36, 'comp_id' => 36, 'name' => '諏訪世俊', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  37, 'comp_id' => 37, 'name' => '関口　典彦', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  38, 'comp_id' => 38, 'name' => '大陽智仁', 'glider_type' => 'Ⅰ', 'state' => '---'],
            ['no' =>  39, 'comp_id' => 39, 'name' => '多賀 純一', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  40, 'comp_id' => 40, 'name' => '高瀬恵三郎', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  41, 'comp_id' => 41, 'name' => '鳥羽 岳太', 'glider_type' => 'Ⅰ', 'state' => '---'],
            ['no' =>  42, 'comp_id' => 42, 'name' => '冨原 淳', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  43, 'comp_id' => 43, 'name' => '豊田良平', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  44, 'comp_id' => 44, 'name' => '内藤邦裕', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  45, 'comp_id' => 45, 'name' => '中川喜昭', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  46, 'comp_id' => 46, 'name' => '中野信行', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  47, 'comp_id' => 47, 'name' => '中目みどり', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  48, 'comp_id' => 48, 'name' => '野尻　知里', 'glider_type' => 'Ⅰ', 'state' => '---'],
            ['no' =>  49, 'comp_id' => 49, 'name' => '野呂　秀樹', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  50, 'comp_id' => 50, 'name' => '橋本　耕一', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  51, 'comp_id' => 51, 'name' => '橋本雅男', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  52, 'comp_id' => 52, 'name' => '馬場峻司', 'glider_type' => 'Ⅰ', 'state' => '---'],
            ['no' =>  54, 'comp_id' => 54, 'name' => '早坂真有美', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  55, 'comp_id' => 55, 'name' => '星合 智子', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  56, 'comp_id' => 56, 'name' => '前川 仁', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  57, 'comp_id' => 57, 'name' => '松田 隆至', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  58, 'comp_id' => 58, 'name' => '松田 隆行', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  59, 'comp_id' => 59, 'name' => '三竹　涼', 'glider_type' => 'Ⅰ', 'state' => '---'],
            ['no' =>  60, 'comp_id' => 60, 'name' => '峰岸　正弘', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  61, 'comp_id' => 61, 'name' => '村田清美', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  62, 'comp_id' => 62, 'name' => '矢崎 淳子', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  63, 'comp_id' => 63, 'name' => '山口裕之', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  64, 'comp_id' => 64, 'name' => '山田　裕一', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  65, 'comp_id' => 65, 'name' => '山本 剛', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  66, 'comp_id' => 66, 'name' => '吉田雅則', 'glider_type' => 'Ⅳ', 'state' => '---'],
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
