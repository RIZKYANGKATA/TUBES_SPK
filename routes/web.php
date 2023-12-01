<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\AlternatifKriteriaController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MasterDataController;
use App\Http\Controllers\PerhitunganController;
use App\Http\Controllers\RiwayatStokController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\SubKriteriaController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', [DashboardController::class, 'index']);
// Route::get('/', [DashboardController::class, 'index']);




Route::get('/', [DashboardController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
// Route::get('/sub_criteria', [DashboardController::class, 'show_sub_criteria']);
// Route::get('/criteria', [DashboardController::class, 'show_criteria']);


Route::resource('kriteria', KriteriaController::class);
Route::resource('sub_kriteria', SubKriteriaController::class);
Route::resource('alternatif', AlternatifController::class);
Route::resource('alternatif_kriteria', AlternatifKriteriaController::class);
Route::resource('perhitungan', PerhitunganController::class);
Route::post('/reset', [PerhitunganController::class, 'reset']);
Route::get('/hasil_akhir', [PerhitunganController::class, 'hasil']);