<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Player;
use Carbon\Carbon;

class PlayersTableSeeder extends Seeder
{
    public function run()
    {
        $params =
            [
                ['name' => 'sample1'],
                ['name' => 'sample2'],
                ['name' => 'sample3'],
                ['name' => 'sample4'],
                ['name' => 'sample5'],
                ['name' => 'sample6'],
                ['name' => 'sample7'],
            ];

        $no = 0;
        $now = Carbon::now();
        foreach ($params as $param) {
            $no++;
            $param['no'] = $no;
            $param['glider_type'] = 'Para';
            $param['state'] = '---';
            $param['map'] = '';
            $param['driver'] = '---';
            
            // $param['latitude'] = NULL;
            // $param['longitude'] = NULL;
            // $param['distance'] = NULL;
            // $param['direction'] = NULL;

            $param['created_at'] = $now;
            $param['updated_at'] = $now;

            Player::insert($param);
        }
    }
}
