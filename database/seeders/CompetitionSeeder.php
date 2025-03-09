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
                    'name' => '2024EJC Class5', 
                    'group_id' => 6442, 
                    'token' => 'c57c8abc8280cc6d236c6f5575874b5ec687272eca631b03a02aad976ebcaa95', 
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
