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
                ['name' => '杉山', 'capacity' => 8],
                ['name' => '小山', 'capacity' => 7],
                ['name' => '大塚', 'capacity' => 0],
                ['name' => '池野', 'capacity' => 5],
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
