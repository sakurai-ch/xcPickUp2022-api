<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\DriversController;

// Route::group(
//     [
//         'prefix' => 'v1'
//     ],
//     function ($router) {
        Route::get('/v1/players', [PlayersController::class, 'getPlayers']);
        Route::put('/v1/players', [PlayersController::class, 'putPlayer']);
        Route::get('/v1/drivers', [DriversController::class, 'getDrivers']);
        Route::post('/v1/drivers', [DriversController::class, 'postDriver']);
//     }
// );

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
