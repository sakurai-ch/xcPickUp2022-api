<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\DriversController;
use App\Http\Controllers\FlymasterController;
use App\Http\Controllers\CompetitionController;

Route::get('/v1/players', [PlayersController::class, 'getPlayers']);
Route::post('/v1/players', [PlayersController::class, 'postPlayers']);
Route::put('/v1/players', [PlayersController::class, 'putPlayer']);
Route::get('/v1/drivers', [DriversController::class, 'getDrivers']);
Route::post('/v1/driver', [DriversController::class, 'postDriver']);
Route::put('/v1/driver', [DriversController::class, 'putDriver']);
Route::delete('/v1/driver', [DriversController::class, 'deleteDriver']);
Route::get('/v1/flymaster', [FlymasterController::class, 'getFlymaster']);
Route::get('/v1/curMap', [FlymasterController::class, 'getCurMap']);
Route::get('/v1/competition', [CompetitionController::class, 'getCompetition']);
Route::post('/v1/competition', [CompetitionController::class, 'postCompetition']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
