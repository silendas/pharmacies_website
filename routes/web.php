<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StokMasukController;
use App\Http\Controllers\DaftarGajiController;
use App\Http\Controllers\DetailGajiController;
use App\Http\Controllers\StokKeluarController;
use App\Http\Controllers\LaporanGajiController;
use App\Http\Controllers\PengelolaanGajiController;
use App\Http\Controllers\DaftarPembayaranController;
use App\Http\Controllers\LaporanPembayaranController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return redirect()->route('dashboard');
});
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Inventory
Route::get('stok_masuk', [StokMasukController::class, 'index'])->name('stok_masuk');
Route::get('stok_keluar', [StokKeluarController::class, 'index'])->name('stok_keluar');


// Pembayaran
Route::get('daftar_pembayaran', [DaftarPembayaranController::class, 'index'])->name('daftar_pembayaran');
Route::get('laporan_pembayaran', [LaporanPembayaranController::class, 'index'])->name('laporan_pembayaran');


// Gaji
Route::get('daftar_gaji', [DaftarGajiController::class, 'index'])->name('daftar_gaji');
Route::get('detail_gaji', [DetailGajiController::class, 'index'])->name('detail_gaji');
Route::get('pengelolaan_gaji', [PengelolaanGajiController::class, 'index'])->name('pengelolaan_gaji');
Route::get('laporan_gaji', [LaporanGajiController::class, 'index'])->name('laporan_gaji');


