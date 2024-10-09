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
            ['no' =>  101, 'comp_id' => 101, 'name' => '板垣 直樹', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  102, 'comp_id' => 102, 'name' => '岩崎正芳', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  103, 'comp_id' => 103, 'name' => '古坂　学俊', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  104, 'comp_id' => 104, 'name' => '櫻井 大朗', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  105, 'comp_id' => 105, 'name' => '岡田 伸弘', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  106, 'comp_id' => 106, 'name' => '山口　裕之', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  107, 'comp_id' => 107, 'name' => '塩野　正光', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  108, 'comp_id' => 108, 'name' => '宍戸　俊之', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  109, 'comp_id' => 109, 'name' => '冨原　淳', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  110, 'comp_id' => 110, 'name' => '豊田良平', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  111, 'comp_id' => 111, 'name' => '内藤　邦裕', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  112, 'comp_id' => 112, 'name' => '山本　剛', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  113, 'comp_id' => 113, 'name' => '砂間 隆司', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  114, 'comp_id' => 114, 'name' => '松田 隆至', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  212, 'comp_id' => 212, 'name' => '平塚　勝也', 'glider_type' => 'Ⅴ', 'state' => '---'],
            ['no' =>  213, 'comp_id' => 213, 'name' => '松田隆行', 'glider_type' => 'Ⅴ', 'state' => '---'],
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
