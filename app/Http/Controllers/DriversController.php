<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;

class DriversController extends Controller
{
    public function getDrivers(Request $request)
    {
        $drivers = Driver::getDrivers();
        return response()->json([
            'message' => 'Drivers got successfully',
            'data' => $drivers
        ], 200)
        ->header('Content-Type', 'application/json')
        ->header('Access-Control-Allow-Origin', '*');
    }

    public function postDriver(Request $request)
    {
        $createdDriver = Driver::postDriver($request);
        return response()->json([
            'message' => 'Driver created successfully',
            'data' => $createdDriver
        ], 200);
    }
}
