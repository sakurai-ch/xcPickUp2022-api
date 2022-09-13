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
            ['no' =>  1, 'comp_id' => 1, 'name' => '多賀 純一', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  2, 'comp_id' => 2, 'name' => '上山 太郎', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  3, 'comp_id' => 3, 'name' => '成山 基義', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  4, 'comp_id' => 4, 'name' => '岩﨑 拓夫', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  5, 'comp_id' => 5, 'name' => '阿知波 広和', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  6, 'comp_id' => 6, 'name' => '平木 啓子', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  7, 'comp_id' => 7, 'name' => '荒井 大悟', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  8, 'comp_id' => 8, 'name' => '文字 英彰', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  9, 'comp_id' => 10, 'name' => '山下 敦子', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  10, 'comp_id' => 11, 'name' => '星田 真一', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  11, 'comp_id' => 12, 'name' => '小梶 渓太', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  12, 'comp_id' => 13, 'name' => '中目 みどり', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  13, 'comp_id' => 14, 'name' => '成山 奈緒', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  14, 'comp_id' => 15, 'name' => '青木 和広', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  15, 'comp_id' => 16, 'name' => '和田 浩二', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  16, 'comp_id' => 17, 'name' => '小幡 洋三', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  17, 'comp_id' => 18, 'name' => '橋本 耕一', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  18, 'comp_id' => 19, 'name' => '中村 浩希', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  19, 'comp_id' => 20, 'name' => '川地 正孝', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  20, 'comp_id' => 21, 'name' => '花田 瞬', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  21, 'comp_id' => 22, 'name' => '稲見 祐二', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  22, 'comp_id' => 23, 'name' => '高田 征広', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  23, 'comp_id' => 24, 'name' => '廣川 靖晃', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  24, 'comp_id' => 25, 'name' => '前島 聡夫', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  25, 'comp_id' => 26, 'name' => '吉田 和博', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  26, 'comp_id' => 27, 'name' => '小林 大晃', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  27, 'comp_id' => 28, 'name' => '入山 朋一', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  28, 'comp_id' => 29, 'name' => '長島 信一', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  29, 'comp_id' => 30, 'name' => '植田 真吾', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  30, 'comp_id' => 31, 'name' => '杉下 拓也', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  32, 'comp_id' => 32, 'name' => '四方 純', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  33, 'comp_id' => 33, 'name' => '隅 秀敏', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  34, 'comp_id' => 34, 'name' => '竹尾 雅行', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  35, 'comp_id' => 35, 'name' => '吉原 紀子', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  36, 'comp_id' => 36, 'name' => '森田 賢', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  37, 'comp_id' => 37, 'name' => '北村 和之', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  38, 'comp_id' => 38, 'name' => '中川 喜昭', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  39, 'comp_id' => 39, 'name' => '村田 好彦', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  40, 'comp_id' => 40, 'name' => '森山 寿幸', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  41, 'comp_id' => 41, 'name' => '田村 昌久', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  42, 'comp_id' => 42, 'name' => '早坂 真有美', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  43, 'comp_id' => 43, 'name' => '辻本 恵一', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  44, 'comp_id' => 44, 'name' => '関根 靖明', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  48, 'comp_id' => 45, 'name' => '木村 亜希子', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  49, 'comp_id' => 46, 'name' => '酒井 節夫', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  50, 'comp_id' => 47, 'name' => '石井 旭', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  51, 'comp_id' => 48, 'name' => '平井 直行', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  52, 'comp_id' => 49, 'name' => '北嶋 康嗣', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  54, 'comp_id' => 50, 'name' => '松岡 茂', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  55, 'comp_id' => 51, 'name' => '氏田 敏彦', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  56, 'comp_id' => 52, 'name' => '高橋 さゆり', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  57, 'comp_id' => 53, 'name' => '内藤 丈', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  61, 'comp_id' => 54, 'name' => '石川 滋一', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  62, 'comp_id' => 55, 'name' => '濱田 革', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  63, 'comp_id' => 56, 'name' => '籾山 孝一', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  64, 'comp_id' => 57, 'name' => '山本 雅史', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  65, 'comp_id' => 58, 'name' => '福井 雅春', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  66, 'comp_id' => 59, 'name' => '金本 知子', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  67, 'comp_id' => 60, 'name' => '渡邊 正剛', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  68, 'comp_id' => 61, 'name' => '山田 裕一', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  70, 'comp_id' => 62, 'name' => '関根 久男', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  71, 'comp_id' => 63, 'name' => '山田 俊介', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  73, 'comp_id' => 64, 'name' => '川口 孝', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  75, 'comp_id' => 65, 'name' => '田村 康子', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  79, 'comp_id' => 66, 'name' => '花村 泰明', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  80, 'comp_id' => 67, 'name' => '府玻 伸平', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  88, 'comp_id' => 68, 'name' => '櫻井 俊秀', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  89, 'comp_id' => 69, 'name' => '岩本 晃治', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  91, 'comp_id' => 70, 'name' => '岩谷 勝弘', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  92, 'comp_id' => 71, 'name' => '宮田 清和', 'glider_type' => 'Ⅳ', 'state' => '---'],
            ['no' =>  102, 'comp_id' => 72, 'name' => '前川 克哉', 'glider_type' => 'Ⅳ', 'state' => ''],
            ['no' =>  103, 'comp_id' => 73, 'name' => '大渕 勲', 'glider_type' => 'Ⅳ', 'state' => ''],
            ['no' =>  122, 'comp_id' => 74, 'name' => '田邊 万作', 'glider_type' => 'Ⅳ', 'state' => ''],
            ['no' =>  123, 'comp_id' => 75, 'name' => 'Jeffry Seals', 'glider_type' => 'Ⅳ', 'state' => ''],
            ['no' =>  124, 'comp_id' => 76, 'name' => '梅岡 翔吾', 'glider_type' => 'Ⅳ', 'state' => ''],
            ['no' =>  701, 'comp_id' => 77, 'name' => 'Seokju Hur', 'glider_type' => 'Ⅳ', 'state' => ''],
            ['no' =>  801, 'comp_id' => 78, 'name' => '予備1', 'glider_type' => 'Ⅳ', 'state' => ''],
            ['no' =>  802, 'comp_id' => 79, 'name' => '予備2', 'glider_type' => 'Ⅳ', 'state' => ''],            
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
