<?php

use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\DashboardController;
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

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/', [DashboardController::class, 'index']);
Route::resource('/barang_masuk', BarangMasukController::class);
Route::post('/barang_masuk', [BarangMasukController::class, 'store']);
Route::get('/barang_masuk/create', [BarangMasukController::class, 'create']);

Route::resource('/barang_keluar', BarangKeluarController::class);
Route::post('/barang_keluar', [BarangKeluarController::class, 'store']);
Route::get('/barang_keluar/create', [BarangKeluarController::class, 'create']);


