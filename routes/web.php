<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Upload1;
use App\Http\Controllers\Upload2;
use App\Http\Controllers\Laporan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/laporan',[Laporan::class, 'getAllLaporan'])->name('laporanAll');
Route::get('/laporan/date', [Laporan::class, 'getDateLaporan'])->name('dateLaporan');
Route::get('/laporan/area', [Laporan::class, 'getAreaLaporan'])->name('areaLaporan');
Route::post('/laporan/post', [Laporan::class,'uploadLaporan'])->name('upload');
Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard');
Route::get('/dashboard', [Upload1::class, 'index'])->name('upload1');
Route::get('/dashboard', [Upload2::class, 'index'])->name('upload2');