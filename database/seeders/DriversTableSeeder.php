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
                ['name' => 'driver name', 'capacity' => 0],
                // ['name' => 'ML', 'capacity' => 100],
                // ['name' => 'ABS', 'capacity' => 100],
                // ['name' => 'returned', 'capacity' => 100],
            ];

        $now = Carbon::now();
        foreach ($params as $param) {
            $param['created_at'] = $now;
            $param['updated_at'] = $now;
            
            Driver::insert($param);
        }
    }
}
