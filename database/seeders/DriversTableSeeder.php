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
                ['name' => '哲也', 'capacity' => 4],
                ['name' => 'B1清水', 'capacity' => 15],
                ['name' => 'B2大沢', 'capacity' => 15],
                ['name' => 'GL', 'capacity' => 80],
            ];

        $now = Carbon::now();
        foreach ($params as $param) {
            $param['created_at'] = $now;
            $param['updated_at'] = $now;
            
            Driver::insert($param);
        }
    }
}
