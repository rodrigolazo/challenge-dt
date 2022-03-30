<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\PersonaController;
use App\Http\Controllers\Api\VueloController;



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

/* Api Route Rersona Tabla 1*/

Route::controller(PersonaController::class)->group(function (){
    Route::get('/personas', 'index');
    Route::post('/persona', 'store');
    Route::get('/persona/{id}', 'show');
    Route::put('/persona/{id}', 'update');
    Route::delete('/persona/{id}', 'destroy');

});

/* Api Route Vuelo Tabla 2*/
Route::controller(VueloController::class)->group(function (){
    Route::get('/vuelos', 'index');
    Route::post('/vuelo', 'store');
    Route::get('/vuelo/{id}', 'show');
    Route::put('/vuelo/{id}', 'update');
    Route::delete('/vuelo/{id}', 'destroy');

});


