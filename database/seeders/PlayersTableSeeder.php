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
            ['no' =>  1, 'name' => '秋吉 壮志', 'glider_type' => 'ハング', 'state' => '---'],
            ['no' =>  2, 'name' => '荒井 大悟', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  3, 'name' => '石坂 繁人', 'glider_type' => 'ハング', 'state' => '---'],
            ['no' =>  4, 'name' => '伊藤 勝啓', 'glider_type' => 'リジット', 'state' => '---'],
            ['no' =>  5, 'name' => '伊藤 龍那', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  6, 'name' => '岩崎 正芳', 'glider_type' => 'リジット', 'state' => '---'],
            ['no' =>  7, 'name' => '右近 隆則', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  8, 'name' => '内田 秀子', 'glider_type' => 'ハング', 'state' => '---'],
            ['no' =>  9, 'name' => '太田 昇吾', 'glider_type' => 'ハング', 'state' => '---'],
            ['no' =>  10, 'name' => '大沼 智', 'glider_type' => 'ハング', 'state' => '---'],
            ['no' =>  11, 'name' => '大沼 秀', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  12, 'name' => '大山 真哉', 'glider_type' => 'ハング', 'state' => '---'],
            ['no' =>  13, 'name' => '柏木 寛之', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  14, 'name' => '嘉山 留美', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  15, 'name' => '川地 正孝', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  16, 'name' => '川名 啓', 'glider_type' => 'パラ', 'state' => '自己'],
            ['no' =>  17, 'name' => '菊田 久美', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  18, 'name' => '菊田 高司', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  19, 'name' => '木村 豪一', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  20, 'name' => '熊谷 勝秀', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  21, 'name' => '小梶 渓太', 'glider_type' => 'ハング', 'state' => '---'],
            ['no' =>  22, 'name' => '古坂 学俊', 'glider_type' => 'リジット', 'state' => '---'],
            ['no' =>  23, 'name' => '小高 史郎', 'glider_type' => 'ハング', 'state' => '---'],
            ['no' =>  24, 'name' => '小林 祥子', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  25, 'name' => '小林 剛', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  26, 'name' => '櫻井 さやか', 'glider_type' => 'ハング', 'state' => '---'],
            ['no' =>  27, 'name' => '佐々木 則生', 'glider_type' => 'リジット', 'state' => '---'],
            ['no' =>  28, 'name' => '佐々木 稔', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  29, 'name' => '塩野 正光', 'glider_type' => 'リジット', 'state' => '---'],
            ['no' =>  30, 'name' => '宍戸 俊之', 'glider_type' => 'リジット', 'state' => '---'],
            ['no' =>  31, 'name' => '杉下 拓也', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  32, 'name' => '鈴木 あき子', 'glider_type' => 'ハング', 'state' => '---'],
            ['no' =>  33, 'name' => '須田 健二', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  34, 'name' => '砂間 隆司', 'glider_type' => 'リジット', 'state' => '---'],
            ['no' =>  35, 'name' => '隅 秀敏', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  36, 'name' => '関口 典彦', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  37, 'name' => '関根 久男', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  38, 'name' => '大陽 智仁', 'glider_type' => 'ハング', 'state' => '---'],
            ['no' =>  39, 'name' => '多賀 純一', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  40, 'name' => '棚木 和之', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  41, 'name' => '冨原 淳', 'glider_type' => 'リジット', 'state' => '---'],
            ['no' =>  42, 'name' => '豊田 良平', 'glider_type' => 'リジット', 'state' => '---'],
            ['no' =>  43, 'name' => '鳥居 仰', 'glider_type' => 'ハング', 'state' => '---'],
            ['no' =>  44, 'name' => '内藤 邦裕', 'glider_type' => 'リジット', 'state' => '---'],
            ['no' =>  45, 'name' => '永井 邦彦', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  46, 'name' => '中川 喜昭', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  47, 'name' => '中里 勝', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  48, 'name' => '中嶋 隆之', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  49, 'name' => '中野 信行', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  50, 'name' => '中目 みどり', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  51, 'name' => '中山 隆広', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  52, 'name' => '名和 靖晃', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  53, 'name' => '橋本 耕一', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  54, 'name' => '花村 泰明', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  55, 'name' => '馬場 峻司', 'glider_type' => 'ハング', 'state' => '---'],
            ['no' =>  56, 'name' => '濱田 革', 'glider_type' => 'ハング', 'state' => '---'],
            ['no' =>  57, 'name' => '星合 智子', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  58, 'name' => '星 一彦', 'glider_type' => 'リジット', 'state' => '---'],
            ['no' =>  59, 'name' => '前島 聡夫', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  60, 'name' => '松田 隆至', 'glider_type' => 'リジット', 'state' => '---'],
            ['no' =>  61, 'name' => '松田 隆行', 'glider_type' => 'リジット', 'state' => '---'],
            ['no' =>  62, 'name' => '三竹 涼', 'glider_type' => 'ハング', 'state' => '---'],
            ['no' =>  63, 'name' => '峰岸 正弘', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  64, 'name' => '文字 英彰', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  65, 'name' => '山口 香代', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  66, 'name' => '山口 裕之', 'glider_type' => 'リジット', 'state' => '---'],
            ['no' =>  67, 'name' => '山田 裕一', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  68, 'name' => '山本 剛', 'glider_type' => 'リジット', 'state' => '---'],
            ['no' =>  69, 'name' => '和田 浩二', 'glider_type' => 'パラ', 'state' => '---'],
            ['no' =>  70, 'name' => '渡邊 正剛', 'glider_type' => 'パラ', 'state' => '---'],
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
