<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\pegawaiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});

Route::get('/dashboard',[HomeController::class,'dashboard']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [AuthController::class,'logout']);
Route::get('/barang',[HomeController::class,'barang'])->name('barang');
Route::get('/tambahbarang',[HomeController::class,'tambahbarang'])->name('tambahbarang');
Route::POST('/insertdata',[HomeController::class,'insertdata'])->name('insertdata');
Route::get('/delete/{id}',[HomeController::class,'delete']);
Route::get('edit/{id}',[HomeController::class,'updateUi']);
Route::post('/update/{id}',[HomeController::class,'update']);

//Pegawai
Route::get('/pegawai',[PegawaiController::class,'pegawai'])->name('Pegawai.user');

//Tambah
Route::get('/tambahuser',[PegawaiController::class,'tambah']);
Route::post('/insert',[PegawaiController::class,'insertdata']);

//Hapus
Route::get('/hapus/{id}',[PegawaiController::class,'hapus']);
