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
                ['name' => 'たつや（4人/5本）', 'capacity' => 4],
                ['name' => 'かずみ（4人/7本）', 'capacity' => 4],
                ['name' => '徳永（5人/8本）', 'capacity' => 5],
                ['name' => '北山（4人/6本）', 'capacity' => 4],
                ['name' => '倉井（8人/8人）', 'capacity' => 8],
                ['name' => '中西（4人/8本/土のみ）', 'capacity' => 4],
                ['name' => '園部（4人/8本/日のみ）', 'capacity' => 4],
                ['name' => 'ML', 'capacity' => 41],
                ['name' => 'ABS', 'capacity' => 41],
                ['name' => '帰着', 'capacity' => 41],
            ];

        $now = Carbon::now();
        foreach ($params as $param) {
            $param['created_at'] = $now;
            $param['updated_at'] = $now;
            
            Driver::insert($param);
        }
    }
}
