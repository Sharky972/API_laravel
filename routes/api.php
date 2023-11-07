<?php

use App\Http\Controllers\API\PropertyCotroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\ChampionController;
use App\Http\Controllers\API\CapacitiesController;
use App\Models\Costs;
use App\Http\Controllers\API\CostsController;
use App\Http\Controllers\API\MonstersController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//? Les routes "users.*" de l'API
Route::apiResource("users", UserController::class);
Route::post('/auth/login', [UserController::class, 'loginUser']);


//? Les routes "champions.*" de l'API

Route::apiResource("champions", ChampionController::class);



//? Les routes "capacities.*" de l'API
Route::apiResource("capacities", CapacitiesController::class);

//? Les routes "costs.*" de l'API
Route::apiResource("costs", CostsController::class);

//? Les routes "monsters.*" de l'API
Route::apiResource("monsters", MonstersController::class);
