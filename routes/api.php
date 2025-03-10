<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\DriversController;
use App\Http\Controllers\FlymasterController;

Route::get('/v1/players', [PlayersController::class, 'getPlayers']);
Route::put('/v1/players', [PlayersController::class, 'putPlayer']);
Route::get('/v1/drivers', [DriversController::class, 'getDrivers']);
Route::post('/v1/drivers', [DriversController::class, 'postDriver']);
Route::put('/v1/drivers', [DriversController::class, 'putDriver']);
Route::get('/v1/flymaster', [FlymasterController::class, 'getFlymaster']);
Route::get('/v1/curMap', [FlymasterController::class, 'getCurMap']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
