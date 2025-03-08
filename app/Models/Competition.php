<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    public static function getLastCompetition() {
        $competition = Competition::orderBy('id', 'DESC')->first();
        return $competition;
    }

    // use HasFactory;
}
