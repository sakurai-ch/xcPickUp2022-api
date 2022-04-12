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
                ['name' => '池野', 'capacity' => 4],
                ['name' => 'もとこ', 'capacity' => 4],
                ['name' => '木内', 'capacity' => 4],
                ['name' => '倉井', 'capacity' => 4],
                ['name' => '倉上', 'capacity' => 4],
                ['name' => '斎藤和美', 'capacity' => 4],
                ['name' => '斉まき', 'capacity' => 4],
                ['name' => '園部', 'capacity' => 4],
                ['name' => '田中', 'capacity' => 4],
                ['name' => 'ダニエル', 'capacity' => 4],
                ['name' => '徳永', 'capacity' => 4],
            ];

        $now = Carbon::now();
        foreach ($params as $param) {
            $param['created_at'] = $now;
            $param['updated_at'] = $now;
            
            Driver::insert($param);
        }
    }
}
