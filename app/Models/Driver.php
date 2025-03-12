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

    public static function putDriver(Request $request)
    {
        Driver::where('id', $request->id)
            ->update([
                'name' => $request->name,
                'capacity' => $request->capacity,
                'updated_at' => Carbon::now(),
            ]);
        $createdDriver = Driver::find($request->id);
        return $createdDriver;
    }

    public static function deleteDriver(Request $request)
    {
        $deletedCount = Driver::where('id', $request->id)
                        ->delete();
        return $deletedCount;
    }

    protected $fillable = [
        'name',
        'capacity',
    ];

    // use HasFactory;
}
