<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ReferencePointsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reference_points')->insert([
            [
                'name' => '足尾TO(HG)',
                'latitude' => 36.276836,
                'longitude' => 140.145818,
                'is_deleted' => false,
                'display_order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ニセコショップ',
                'latitude' => 42.837236,
                'longitude' => 140.652446,
                'is_deleted' => false,
                'display_order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '吉野川TO(水の丸)',
                'latitude' => 33.991833,
                'longitude' => 133.964361,
                'is_deleted' => false,
                'display_order' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
