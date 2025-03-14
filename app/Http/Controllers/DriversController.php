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
        ], 200);
    }

    public function postDriver(Request $request)
    {
        $createdDriver = Driver::postDriver($request);
        return response()->json([
            'message' => 'Driver created successfully',
            'data' => $createdDriver
        ], 200);
    }
    
    public function putDriver(Request $request)
    {
        $updatedDriver = Driver::putDriver($request);
        return response()->json([
            'message' => 'Driver updated successfully',
            'data' => $updatedDriver
        ], 200);
    }
    
    public function deleteDriver(Request $request)
    {
        $deletedCount = Driver::deleteDriver($request);
        return response()->json([
            'message' => 'Driver deleteed successfully',
            'data' => $deletedCount
        ], 200);
    }
}
