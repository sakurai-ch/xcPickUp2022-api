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
                ['name' => '清水4（4人）', 'capacity' => 4],
                ['name' => '小山1（8人）', 'capacity' => 8],
                ['name' => '大塚2（8人）', 'capacity' => 8],
                ['name' => '中里5（8人）', 'capacity' => 8],
                ['name' => '杉山3（8人）', 'capacity' => 8],
                ['name' => '堀（26人）', 'capacity' => 26],
                ['name' => 'GL', 'capacity' => 70],
                ['name' => 'ML', 'capacity' => 70],
                ['name' => 'ABS', 'capacity' => 70],
                ['name' => '帰着', 'capacity' => 70],
            ];

        $now = Carbon::now();
        foreach ($params as $param) {
            $param['created_at'] = $now;
            $param['updated_at'] = $now;
            
            Driver::insert($param);
        }
    }
}
