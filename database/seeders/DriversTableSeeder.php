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
                // ['name' => 'ドライバー名（*人/*本）', 'capacity' => 4],
                ['name' => '板垣蒼平', 'capacity' => 4],
                ['name' => '小山', 'capacity' => 4],
                ['name' => '清水', 'capacity' => 4],
                ['name' => '佐々木', 'capacity' => 4],
                // ['name' => 'ML', 'capacity' => 41],
                // ['name' => 'ABS', 'capacity' => 41],
                // ['name' => '帰着', 'capacity' => 41],
            ];

        $now = Carbon::now();
        foreach ($params as $param) {
            $param['created_at'] = $now;
            $param['updated_at'] = $now;
            
            Driver::insert($param);
        }
    }
}
