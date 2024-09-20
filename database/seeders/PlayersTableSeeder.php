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
            ['no' =>  1, 'comp_id' => 1, 'name' => '橋本 耕一', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  2, 'comp_id' => 2, 'name' => '岩﨑 拓夫', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  4, 'comp_id' => 4, 'name' => '山下 敦子', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  5, 'comp_id' => 5, 'name' => '稲見 祐二', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  6, 'comp_id' => 6, 'name' => '和田 浩二', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  7, 'comp_id' => 7, 'name' => '中村 浩希', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  8, 'comp_id' => 8, 'name' => '多賀 純一', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  9, 'comp_id' => 9, 'name' => '入山 朋一', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  10, 'comp_id' => 10, 'name' => '隅 秀敏', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  12, 'comp_id' => 12, 'name' => '平木 啓子', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  13, 'comp_id' => 13, 'name' => '杉山 卓也', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  14, 'comp_id' => 14, 'name' => '谷口 正和', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  15, 'comp_id' => 15, 'name' => '竹尾 雅行', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  16, 'comp_id' => 16, 'name' => '杉下 拓也', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  17, 'comp_id' => 17, 'name' => '宮田 清和', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  18, 'comp_id' => 18, 'name' => '青木 和広', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  19, 'comp_id' => 19, 'name' => '若山 朋晴', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  20, 'comp_id' => 20, 'name' => '長島 信一', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  21, 'comp_id' => 21, 'name' => '中川 喜昭', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  22, 'comp_id' => 22, 'name' => '中目 みどり', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  23, 'comp_id' => 23, 'name' => '早坂 真有美', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  24, 'comp_id' => 24, 'name' => '北村 和之', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  25, 'comp_id' => 25, 'name' => '荒井 大悟', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  26, 'comp_id' => 26, 'name' => '岩本 晃治', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  27, 'comp_id' => 27, 'name' => '氏田 敏彦', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  30, 'comp_id' => 30, 'name' => '梅迫 賢一', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  32, 'comp_id' => 32, 'name' => '福丸 貴大', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  33, 'comp_id' => 33, 'name' => '伊澤 光', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  34, 'comp_id' => 34, 'name' => '府玻 伸平', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  35, 'comp_id' => 35, 'name' => '福井 雅春', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  38, 'comp_id' => 38, 'name' => '小梶 渓太', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  39, 'comp_id' => 39, 'name' => '平井 直行', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  40, 'comp_id' => 40, 'name' => '中村 哲也', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  44, 'comp_id' => 44, 'name' => '小林 敦之', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  47, 'comp_id' => 47, 'name' => '金本 知子', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  49, 'comp_id' => 49, 'name' => '山本 雅史', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  51, 'comp_id' => 51, 'name' => '東 智子', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  52, 'comp_id' => 52, 'name' => '坂口 実', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  53, 'comp_id' => 53, 'name' => '山田 俊介', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  54, 'comp_id' => 54, 'name' => '石井 旭', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  57, 'comp_id' => 57, 'name' => '毛井 宏史', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  58, 'comp_id' => 58, 'name' => '辻本 恵一', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  59, 'comp_id' => 59, 'name' => '森山 寿幸', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  60, 'comp_id' => 60, 'name' => '高橋 さゆり', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  63, 'comp_id' => 63, 'name' => '成田 定治', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  65, 'comp_id' => 65, 'name' => '石川 滋一', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  66, 'comp_id' => 66, 'name' => '吉原 紀子', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  67, 'comp_id' => 67, 'name' => '内藤 丈', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  68, 'comp_id' => 68, 'name' => '目黒 敏', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  71, 'comp_id' => 71, 'name' => '渡邊 正剛', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  72, 'comp_id' => 72, 'name' => '中野 富夫', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  73, 'comp_id' => 73, 'name' => '北嶋 康嗣', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  74, 'comp_id' => 74, 'name' => '熊谷 勝秀', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  75, 'comp_id' => 75, 'name' => '吉田 和博', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  78, 'comp_id' => 78, 'name' => '関根 久男', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  79, 'comp_id' => 79, 'name' => '前川 克哉', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  81, 'comp_id' => 81, 'name' => '酒井 節夫', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  82, 'comp_id' => 82, 'name' => '梅岡 翔吾', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  84, 'comp_id' => 84, 'name' => '原 健一', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  87, 'comp_id' => 87, 'name' => '藤木 芳猛', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  90, 'comp_id' => 90, 'name' => '山田 裕一', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  91, 'comp_id' => 91, 'name' => '疋田 祥丈', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  95, 'comp_id' => 95, 'name' => '櫻井 俊秀', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  99, 'comp_id' => 99, 'name' => '佐藤 仁一', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  100, 'comp_id' => 100, 'name' => '川口 孝', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  101, 'comp_id' => 101, 'name' => '大田 豊承', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  103, 'comp_id' => 103, 'name' => '新谷 俊一', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  115, 'comp_id' => 115, 'name' => '関根 靖明', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  126, 'comp_id' => 126, 'name' => 'Monaghan Marcel', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  128, 'comp_id' => 128, 'name' => '籾山 孝一', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  130, 'comp_id' => 130, 'name' => 'Ting Hui Tzu', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  131, 'comp_id' => 131, 'name' => '佐藤 研斗', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  701, 'comp_id' => 701, 'name' => 'Zhongyi Zheng', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  702, 'comp_id' => 702, 'name' => 'Wang Quanguo', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  801, 'comp_id' => 801, 'name' => '予備1', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  802, 'comp_id' => 802, 'name' => '予備2', 'glider_type' => 'Ⅲ', 'state' => '---'],
            ['no' =>  803, 'comp_id' => 803, 'name' => '予備3', 'glider_type' => 'Ⅲ', 'state' => '---'],
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
