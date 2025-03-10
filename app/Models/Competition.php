<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Competition extends Model
{
    public static function getLastCompetition() {
        $competition = Competition::orderBy('id', 'DESC')->first();
        return $competition;
    }

    public static function postCompetition($competition) {
        Competition::truncate();

        $now = Carbon::now();
        $competition = Competition::create([
            'name' => $competition -> name | ' ', 
            'group_id' => $competition -> groupId | 0, 
            'token' => $competition -> token | ' ', 
            'created_at' => $now, 
            'updated_at' => $now,
        ]);
        return [ 
            'name' => $competition -> name, 
            'groupId' => $competition -> group_id, 
        ];
    }

    protected $fillable = [
        'name',
        'group_id',
        'token',
    ];

    // use HasFactory;
}
