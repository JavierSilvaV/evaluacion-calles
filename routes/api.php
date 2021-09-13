<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\CalleController;

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
Route::get('/regiones', [RegionController::class, 'index']);
Route::get('/provincias/regiones/{id}', [ProvinciaController::class, 'provinciasXregion']);
Route::get('ciudades/provincias/{id}', [CiudadController::class, 'ciudadesXprovincia']);
Route::get('calles/ciudades/{id}', [CalleController::class, 'callesXciudad']);