<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\DriversController;

Route::group(
    [
        'prefix' => 'v1'
    ],
    function ($router) {
        Route::get('/players', [PlayersController::class, 'getPlayers']);
        Route::put('/players', [PlayersController::class, 'putPlayer']);
        Route::get('/drivers', [DriversController::class, 'getDrivers']);
        Route::post('/drivers', [DriversController::class, 'postDriver']);
    }
);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
