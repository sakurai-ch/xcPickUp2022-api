<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Driver;
use Carbon\Carbon;

class DriversTableSeeder extends Seeder
{
    public function run()
    {
        $params =
            [
                ['name' => '倉井（OBバン）8人/8本', 'capacity' => 8],
                ['name' => '斉まき（岩崎ウイッシュ）5人/8本', 'capacity' => 5],
                ['name' => '土田（松田レヴォーグ）4人/7本', 'capacity' => 4],
                ['name' => '北山（塩野カー）4人/8本', 'capacity' => 4],
                ['name' => '徳永（徳永カー）5人/8本', 'capacity' => 4],
                ['name' => '堀（櫻井ヴァンガード）4人/5本', 'capacity' => 4],
                ['name' => '杉山（佐々木カー）4人/7本', 'capacity' => 4],
                ['name' => '土のみ（ダニエル）', 'capacity' => 0],
                ['name' => '土のみ（中嶋）', 'capacity' => 4],
                ['name' => '斎たつや（斎藤カー）5人/5本 ', 'capacity' => 5],
                ['name' => '浅田（大陽カー）4人/6本', 'capacity' => 4],
                ['name' => '濱田（濱田カー）5人/8本', 'capacity' => 5],
                ['name' => '森口（松田カー）', 'capacity' => 0],
                ['name' => '自己回収', 'capacity' => 70],
                ['name' => 'ML', 'capacity' => 70],
                ['name' => 'DNF', 'capacity' => 70],
            ];

        $now = Carbon::now();
        foreach ($params as $param) {
            $param['created_at'] = $now;
            $param['updated_at'] = $now;
            
            Driver::insert($param);
        }
    }
}
