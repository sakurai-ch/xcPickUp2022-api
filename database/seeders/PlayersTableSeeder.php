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
            ['no' =>  1, 'comp_id' => 1, 'name' => '秋吉壮志', 'glider_type' => 'Ⅰ', 'state' => '---'],
            ['no' =>  2, 'comp_id' => 2, 'name' => '荒井大悟', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  3, 'comp_id' => 3, 'name' => '生駒陽', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  4, 'comp_id' => 4, 'name' => '石坂繁人', 'glider_type' => 'Ⅰ', 'state' => '---'],
            ['no' =>  5, 'comp_id' => 5, 'name' => '岩崎正芳', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  6, 'comp_id' => 6, 'name' => '右近隆則', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  7, 'comp_id' => 7, 'name' => '遠藤智也', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  8, 'comp_id' => 8, 'name' => '大野洋', 'glider_type' => 'Ⅰ', 'state' => '---'],
            ['no' =>  9, 'comp_id' => 9, 'name' => '小野三千博', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  10, 'comp_id' => 10, 'name' => '亀岡亘', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  11, 'comp_id' => 11, 'name' => '五位渕孝幸', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  12, 'comp_id' => 12, 'name' => '小梶渓太', 'glider_type' => 'Ⅰ', 'state' => '---'],
            ['no' =>  13, 'comp_id' => 13, 'name' => '古坂学俊', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  14, 'comp_id' => 14, 'name' => '小高史郎', 'glider_type' => 'Ⅰ', 'state' => '---'],
            ['no' =>  15, 'comp_id' => 15, 'name' => '櫻井さやか', 'glider_type' => 'Ⅰ', 'state' => '---'],
            ['no' =>  16, 'comp_id' => 16, 'name' => '櫻井大朗', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  17, 'comp_id' => 17, 'name' => '塩野正光', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  18, 'comp_id' => 18, 'name' => '宍戸俊之', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  19, 'comp_id' => 19, 'name' => '杉下拓也', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  20, 'comp_id' => 20, 'name' => '鈴木清', 'glider_type' => 'Ⅰ', 'state' => '---'],
            ['no' =>  21, 'comp_id' => 21, 'name' => '諏訪世俊', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  22, 'comp_id' => 22, 'name' => '関口典彦', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  23, 'comp_id' => 23, 'name' => '関根靖明', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  24, 'comp_id' => 24, 'name' => '大陽智仁', 'glider_type' => 'Ⅰ', 'state' => '---'],
            ['no' =>  25, 'comp_id' => 25, 'name' => '鳥羽岳太', 'glider_type' => 'Ⅰ', 'state' => '---'],
            ['no' =>  26, 'comp_id' => 26, 'name' => '富岡好次郎', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  27, 'comp_id' => 27, 'name' => '冨原淳', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  28, 'comp_id' => 28, 'name' => '鳥海真弓', 'glider_type' => 'Ⅰ', 'state' => '---'],
            ['no' =>  29, 'comp_id' => 29, 'name' => '内藤邦裕', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  30, 'comp_id' => 30, 'name' => '中目みどり', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  31, 'comp_id' => 31, 'name' => '中村智史', 'glider_type' => 'Ⅰ', 'state' => '---'],
            ['no' =>  32, 'comp_id' => 32, 'name' => '野尻知里', 'glider_type' => 'Ⅰ', 'state' => '---'],
            ['no' =>  33, 'comp_id' => 33, 'name' => '能祖雄大', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  34, 'comp_id' => 34, 'name' => '橋本耕一', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  35, 'comp_id' => 35, 'name' => '馬場峻司', 'glider_type' => 'Ⅰ', 'state' => '---'],
            ['no' =>  36, 'comp_id' => 36, 'name' => '松田隆至', 'glider_type' => 'Ⅰ', 'state' => '---'],
            ['no' =>  37, 'comp_id' => 37, 'name' => '松田隆行', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  38, 'comp_id' => 38, 'name' => '三竹涼', 'glider_type' => 'Ⅰ', 'state' => '---'],
            ['no' =>  39, 'comp_id' => 39, 'name' => '山口裕之', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  40, 'comp_id' => 40, 'name' => '山田裕一', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  41, 'comp_id' => 41, 'name' => '山本剛', 'glider_type' => 'Ⅴ', 'state' => '---'],
            
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
