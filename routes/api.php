<?php

use App\Http\Controllers\Laporan as ControllersLaporan;
use App\Http\Controllers\LoginApi;
use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('/loginapi', [LoginApi::class, 'login']);
Route::get('/laporan', [ControllersLaporan::class, 'getAllLaporan']);
Route::get('/laporan/area/{year}/{month}', [ControllersLaporan::class, 'getArea']);
Route::get('/laporan/job/{area}/{year}/{month}', [ControllersLaporan::class, 'getJob']);
Route::get('/laporan/task/{area}/{year}/{month}', [ControllersLaporan::class, 'getTask']);
Route::get('/laporan/get/{id}/{year}/{month}', [ControllersLaporan::class, 'getLaporan']);
