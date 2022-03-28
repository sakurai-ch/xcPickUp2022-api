<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Carbon\Carbon;

class Driver extends Model
{
    public static function getDrivers()
    {
        $drivers = Driver::orderBy('id', 'asc')->get();
        return $drivers;
    }

    public static function postDriver(Request $request)
    {
        $createdDriver = Driver::create([
                'name' => $request->name,
                'capacity' => $request->capacity,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        return $createdDriver;
    }

    protected $fillable = [
        'name',
        'capacity',
    ];

    // use HasFactory;
}
