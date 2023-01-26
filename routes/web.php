<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BarangController;

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

Route::get('/supplier',[ SupplierController::class,'index']);
Route::get('/supplier/tambah',[ SupplierController::class,'tambah']);
Route::post('/supplier/simpan',[ SupplierController::class,'store']);
Route::get('/supplier/edit/{id}',[SupplierController::class,'edit']);
Route::post('/supplier/editsimpan',[ SupplierController::class,'update']);
Route::get('/supplier/hapus/{id}',[SupplierController::class,'hapus']);


Route::get('/barang',[ BarangController::class,'index']);
Route::get('/barang/tambah',[ BarangController::class,'formTambah']);
Route::post('/barang/simpan',[ BarangController::class,'store']);
Route::get('/barang/edit/{id}',[BarangController::class,'edit']);
Route::post('/barang/editsimpan',[ BarangController::class,'update']);
Route::get('/barang/hapus/{id}',[BarangController::class,'hapus']);


