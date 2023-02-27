<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BarangkeluarController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\lokasiController;
use App\Http\Controllers\LevelUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoggingController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\pengajuanBBController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\SumberDanaController;
use Illuminate\Routing\Route as RoutingRoute;

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



Route::get('/supplier',[ SupplierController::class,'index'])->middleware('auth');
Route::get('/supplier/tambah',[ SupplierController::class,'formTambah'])->middleware('auth');
Route::post('/supplier/simpan',[ SupplierController::class,'store'])->middleware('auth');
Route::get('/supplier/edit/{id}',[SupplierController::class,'edit'])->middleware('auth');
Route::post('/supplier/editsimpan',[ SupplierController::class,'update'])->middleware('auth');
Route::get('/supplier/hapus/{id}',[SupplierController::class,'hapus'])->middleware('auth');

Route::get('/barang',[ BarangController::class,'index'])->middleware('auth');


Route::get('/barang/keluar',[ BarangKeluarController::class,'index'])->middleware('auth');
Route::get('/barang/keluar/tambah',[ BarangKeluarController::class,'formTambah'])->middleware('auth');
Route::post('/barang/keluar/simpan/{id}',[ BarangKeluarController::class,'store'])->middleware('auth');
Route::get('/barang/keluar/{id}',[ BarangKeluarController::class,'store'])->middleware('auth');
Route::get('/barang/keluar/edit/{id}',[BarangKeluarController::class,'edit'])->middleware('auth');
Route::post('/barang/keluar/editsimpan',[ BarangKeluarController::class,'update'])->middleware('auth');
Route::get('/barang/keluar/hapus/{id}',[BarangKeluarController::class,'hapus'])->middleware('auth');
// Route::get('/barang/keluar/search/{$search}',[BarangKeluarController::class,'search'])->middleware('auth');

Route::get('/lokasi',[ lokasiController::class,'index'])->middleware('auth');
Route::get('/lokasi/tambah',[ lokasiController::class,'formTambah'])->middleware('auth');
Route::post('/lokasi/simpan',[ lokasiController::class,'store'])->middleware('auth');
Route::get('/lokasi/{id}',[ lokasiController::class,'store'])->middleware('auth');
Route::get('/lokasi/edit/{id}',[lokasiController::class,'edit'])->middleware('auth');
Route::post('/lokasi/editsimpan',[ lokasiController::class,'update'])->middleware('auth');
Route::get('/lokasi/hapus/{id}',[lokasiController::class,'hapus'])->middleware('auth');


Route::get('/barang/masuk',[ BarangMasukController::class,'index'])->middleware('auth');
Route::get('/barang/masuk/tambah',[ BarangMasukController::class,'formTambah'])->middleware('auth');
Route::post('/barang/masuk/simpan',[ BarangMasukController::class,'store'])->middleware('auth');
Route::get('/barang/masuk/edit/{id}',[BarangMasukController::class,'edit'])->middleware('auth');
Route::post('/barang/masuk/editsimpan',[ BarangMasukController::class,'update'])->middleware('auth');
Route::get('/barang/masuk/hapus/{id}',[BarangMasukController::class,'hapus'])->middleware('auth');

Route::get('/levelUser\]',[ LevelUserController::class,'index'])->middleware('auth');
Route::get('/levelUser/tambah',[LevelUserController::class,'formTambah'])->middleware('auth')->middleware('auth');
Route::post('/levelUser/simpan',[LevelUserController::class,'simpan'])->middleware('auth')->middleware('auth');

Route::get('login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/logging',[LoggingController::class,'index'])->middleware('auth');

    Route::get('/approval/BB',[ ApprovalController::class,'indexBarangBaru'])->middleware('auth');
    Route::get('/approval/BB/search',[ ApprovalController::class,'searchindexBarangBaru'])->middleware('auth');
    Route::get('/approval/BB/detail/{id}',[ApprovalController::class,'detailBarangBaru'])->middleware('auth');
    Route::get('/approval/BB/setuju/{id}',[ApprovalController::class,'statusSetujuBarangBaru'])->middleware('auth');
    Route::get('/approval/BB/tidaksetuju/{id}',[ApprovalController::class,'statusTidakSetujuBarangBaru'])->middleware('auth');



Route::get('/pengajuan/barangbaru',[ pengajuanBBController::class,'index']);
Route::get('/pengajuan/barangbaru/tambah',[ pengajuanBBController::class,'tambah']);
Route::post('/pengajuan/barangbaru/simpan',[ pengajuanBBController::class,'store']);


Route::get('/pengguna', [PenggunaController::class, 'index'])->middleware('auth');
Route::group(['middleware' => ['auth', 'level:admin']], function () {
    Route::get('/pengguna/tambah', [PenggunaController::class, 'formTambah'])->middleware('auth');
    Route::post('/pengguna/simpan', [PenggunaController::class, 'store'])->middleware('auth');
    Route::get('/pengguna/edit/{id}', [PenggunaController::class, 'edit'])->middleware('auth');
    Route::post('/pengguna/edit/editsimpan', [PenggunaController::class, 'editsimpan'])->middleware('auth');
    Route::get('/pengguna/hapus/{id}', [PenggunaController::class, 'hapus'])->middleware('auth');
});



Route::get('/sb',[ SumberDanaController::class,'index']);
Route::get('/sb/tambah',[ SumberDanaController::class,'tambah']);
Route::post('/sb/simpan', [ SumberDanaController::class,'store']);
