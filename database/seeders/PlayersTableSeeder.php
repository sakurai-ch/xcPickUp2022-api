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
            ['no' =>  2, 'comp_id' => 2, 'name' => '荒井 大悟', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  3, 'comp_id' => 3, 'name' => '石坂 繁人', 'glider_type' => 'Ⅰ', 'state' => '---'],
            ['no' =>  4, 'comp_id' => 4, 'name' => '伊藤 勝啓', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  5, 'comp_id' => 5, 'name' => '伊藤 龍那', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  6, 'comp_id' => 6, 'name' => '岩崎 正芳', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  7, 'comp_id' => 7, 'name' => '右近 隆則', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  8, 'comp_id' => 8, 'name' => '内田 秀子', 'glider_type' => 'Ⅰ', 'state' => '---'],
            ['no' =>  9, 'comp_id' => 9, 'name' => '太田 昇吾', 'glider_type' => 'Ⅰ', 'state' => '---'],
            ['no' =>  10, 'comp_id' => 10, 'name' => '大沼 智', 'glider_type' => 'Ⅰ', 'state' => '---'],
            ['no' =>  11, 'comp_id' => 11, 'name' => '大沼 秀', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  12, 'comp_id' => 12, 'name' => '大山 真哉', 'glider_type' => 'Ⅰ', 'state' => '---'],
            ['no' =>  13, 'comp_id' => 13, 'name' => '柏木 寛之', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  14, 'comp_id' => 14, 'name' => '嘉山 留美', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  15, 'comp_id' => 15, 'name' => '川地 正孝', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  16, 'comp_id' => 16, 'name' => '川名 啓', 'glider_type' => 'Ⅳ', 'state' => '自己回収'],
            ['no' =>  17, 'comp_id' => 17, 'name' => '菊田 久美', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  18, 'comp_id' => 18, 'name' => '菊田 高司', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  19, 'comp_id' => 19, 'name' => '木村 豪一', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  20, 'comp_id' => 20, 'name' => '熊谷 勝秀', 'glider_type' => 'Ⅳ', 'state' => '---'],
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
