<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Competition;
use Carbon\Carbon;

class CompetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params =
            [
                [
                    'name' => 'competition name sample', 
                    'group_id' => 1000, 
                    'token' => 'tokenSample', 
                ],
            ];

        $now = Carbon::now();
        foreach ($params as $param) {
            $param['created_at'] = $now;
            $param['updated_at'] = $now;
            
            Competition::insert($param);
        }
    }
}
