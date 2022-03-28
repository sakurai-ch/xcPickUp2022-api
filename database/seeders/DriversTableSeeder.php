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
                ['name' => 'driver1', 'capacity' => 4],
                ['name' => 'driver2', 'capacity' => 4],
                ['name' => 'driver3', 'capacity' => 4],
                ['name' => 'driver4', 'capacity' => 7],
            ];

        $no = 0;
        $now = Carbon::now();
        foreach ($params as $param) {
            $param['created_at'] = $now;
            $param['updated_at'] = $now;
            
            Driver::insert($param);
        }
    }
}
