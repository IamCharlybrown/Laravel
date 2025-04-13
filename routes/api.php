<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\GenderController;
use App\Http\Controllers\API\SuperHeroController;
use App\Http\Controllers\API\UniverseController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('genders', GenderController::class);
Route::apiResource('superheroes', SuperHeroController::class);
Route::apiResource('universes', UniverseController::class);
