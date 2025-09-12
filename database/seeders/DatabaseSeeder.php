<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(DriversTableSeeder::class);
        $this->call(PlayersTableSeeder::class);
        $this->call(CompetitionSeeder::class);
        $this->call(ReferencePointsSeeder::class);
    }
}
