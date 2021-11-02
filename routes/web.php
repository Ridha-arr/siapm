<?php

use App\Http\Controllers\Cms;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Upload1;
use App\Http\Controllers\Upload2;
use App\Http\Controllers\Profil;
use App\Http\Controllers\GantiProfil;
use App\Http\Controllers\Laporan;
use App\Http\Controllers\Login;
use App\Http\Controllers\LoginApi;
use App\Http\Controllers\Monitoring;
use App\Http\Controllers\Notifikasi;
use App\Http\Controllers\verifikasi;
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
Route::post('/tambah', [Cms::class, 'tambah'])->name( 'tambah-akun');
Route::get('/cms', [Cms::class, 'index'])->name('cms');
Route::post('/update-akun', [Cms::class, 'update'])->name('update-akun');
Route::get('/edit-profile/{id}', [Cms::class, 'edit'])->name('edit-profile');
Route::get('/delete-akun/{id}', [Cms::class, 'delete'])->name('delete-akun');
Route::get('/notifikasi', [Notifikasi::class, 'index'])->name('notifikasi');
Route::get('/monitoring', [Monitoring::class, 'index'])->name('monitoring');
Route::get('/monitoring/detail', [Monitoring::class, 'detail'])->name('monitoring/detail');
Route::get('/monitoring/view/{area}', [Monitoring::class, 'view'])->name('monitoring/view');
Route::get('/verifikasi', [verifikasi::class, 'index'])->name('verifikasi');
Route::post('/verif', [verifikasi::class, 'verif'])->name('verif');
Route::get('/verifikasi/area', [verifikasi::class, 'area'])->name('verifikasi/area');
Route::get('/verifikasi/area/{detail}', [verifikasi::class, 'detail'])->name('verifikasi/area/detail');
Route::get('/verifikasi/valid/{valid}', [verifikasi::class, 'isi'])->name('verifikasi/valid');
Route::get('/verifikasi/syarat/{id}', [verifikasi::class, 'syarat'])->name('verifikasi/syarat');
Route::get('/verifikasi/hasil/{id}', [verifikasi::class, 'hasil'])->name('verifikasi/hasil');
Route::get('/gantiprofil', [GantiProfil::class, 'index'])->name('gantiprofil');
Route::post('/gantiprofil/update', [GantiProfil::class, 'update'])->name('profil/update');
