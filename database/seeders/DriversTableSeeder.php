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
                ['name' => '研斗', 'capacity' => 4],
                ['name' => '川浪', 'capacity' => 9],
                ['name' => '五位渕', 'capacity' => 8],
                ['name' => '生井', 'capacity' => 8],
                ['name' => '山本', 'capacity' => 4],
                ['name' => '大石', 'capacity' => 4],
                ['name' => 'B1清水', 'capacity' => 15],
                ['name' => 'B2堀', 'capacity' => 15],
                ['name' => 'GL', 'capacity' => 0],
                ['name' => 'ML', 'capacity' => 0],
                ['name' => 'DNF', 'capacity' => 0],
            ];

        $now = Carbon::now();
        foreach ($params as $param) {
            $param['created_at'] = $now;
            $param['updated_at'] = $now;
            
            Driver::insert($param);
        }
    }
}
