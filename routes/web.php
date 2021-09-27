<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Upload1;
use App\Http\Controllers\Upload2;
use App\Http\Controllers\Profil;
use App\Http\Controllers\GantiProfil;
use App\Http\Controllers\Laporan;
use App\Http\Controllers\Login;
use App\Http\Controllers\LoginApi;
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

Route::get('/', [Login::class, 'index']);
Route::post('/', [Login::class, 'login'])->name('login');

Route::get('/logout', [Login::class, 'logout'])->name('logout');

Route::get('/laporan/date', [Laporan::class, 'getDateLaporan'])->name('dateLaporan');
Route::get('/laporan/area', [Laporan::class, 'getAreaLaporan'])->name('areaLaporan');
Route::post('/laporan/post', [Laporan::class,'uploadLaporan'])->name('upload');
Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard');
Route::get('/upload1', [Upload1::class, 'index'])->name('upload1');
Route::get('/upload2', [Upload2::class, 'index'])->name('upload2');
Route::post('/postUpload', [Upload2::class, 'postUpload'])->name('postUpload');
Route::post('/update', [Upload2::class, 'update'])->name('update');
Route::middleware('auth')->group(function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {

    });
});
Route::get('/profil', [Profil::class, 'index'])->name('profil');
Route::get('/gantiprofil', [GantiProfil::class, 'index'])->name('gantiprofil');
