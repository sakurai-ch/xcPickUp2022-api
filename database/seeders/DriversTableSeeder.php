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
                ['name' => '清水', 'capacity' => 4],
                ['name' => '小山', 'capacity' => 8],
                ['name' => '大塚', 'capacity' => 8],
                ['name' => '中里', 'capacity' => 8],
                ['name' => '杉山', 'capacity' => 8],
                ['name' => '堀', 'capacity' => 26],
                ['name' => 'GL', 'capacity' => 70],
                ['name' => 'ML', 'capacity' => 70],
            ];

        $now = Carbon::now();
        foreach ($params as $param) {
            $param['created_at'] = $now;
            $param['updated_at'] = $now;
            
            Driver::insert($param);
        }
    }
}
