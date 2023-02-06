<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BarangkeluarController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\lokasiController;
use App\Http\Controllers\LevelUserController;
use App\Http\Controllers\LoginController;
// use App\Http\Controllers\DashboardController;



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

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/supplier',[ SupplierController::class,'index']);
Route::get('/supplier/tambah',[ SupplierController::class,'formTambah']);
Route::post('/supplier/simpan',[ SupplierController::class,'store']);
Route::get('/supplier/edit/{id}',[SupplierController::class,'edit']);
Route::post('/supplier/editsimpan',[ SupplierController::class,'update']);
Route::get('/supplier/hapus/{id}',[SupplierController::class,'hapus']);

Route::get('/barang',[ BarangController::class,'index']);


Route::get('/barang/keluar',[ BarangKeluarController::class,'index']);
Route::get('/barang/keluar/tambah',[ BarangKeluarController::class,'formTambah']);
Route::post('/barang/keluar/simpan',[ BarangKeluarController::class,'store']);
Route::get('/barang/keluar/{id}',[ BarangKeluarController::class,'store']);
Route::get('/barang/keluar/edit/{id}',[BarangKeluarController::class,'edit']);
Route::post('/barang/keluar/editsimpan',[ BarangKeluarController::class,'update']);
Route::get('/barang/keluar/hapus/{id}',[BarangKeluarController::class,'hapus']);
// Route::get('/barang/keluar/search/{$search}',[BarangKeluarController::class,'search'])->middleware('auth');

Route::get('/lokasi',[ lokasiController::class,'index']);
Route::get('/lokasi/tambah',[ lokasiController::class,'formTambah']);
Route::post('/lokasi/simpan',[ lokasiController::class,'store']);
Route::get('/lokasi/{id}',[ lokasiController::class,'store']);
Route::get('/lokasi/edit/{id}',[lokasiController::class,'edit']);
Route::post('/lokasi/editsimpan',[ lokasiController::class,'update']);
Route::get('/lokasi/hapus/{id}',[lokasiController::class,'hapus']);


Route::get('/barang/masuk',[ BarangMasukController::class,'index']);
Route::get('/barang/masuk/tambah',[ BarangMasukController::class,'formTambah']);
Route::post('/barang/masuk/simpan',[ BarangMasukController::class,'store']);
Route::get('/barang/masuk/edit/{id}',[BarangMasukController::class,'edit']);
Route::post('/barang/masuk/editsimpan',[ BarangMasukController::class,'update']);
Route::get('/barang/masuk/hapus/{id}',[BarangMasukController::class,'hapus']);

Route::get('/levelUser\]

',[ LevelUserController::class,'index']);
Route::get('/levelUser/tambah',[LevelUserController::class,'formTambah'])->middleware('auth');
Route::post('/levelUser/simpan',[LevelUserController::class,'simpan'])->middleware('auth');

Route::get('login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/dashboard',[DashboardController::class,'dashboard']);
