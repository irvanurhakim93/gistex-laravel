<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KaryawanController;
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

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//login routes
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/postlogin', [LoginController::class,'postlogin'])->name('postlogin');
Route::get('/dashboard', [LoginController::class,'dashboard'])->name('dashboard');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');

//karyawan controller
Route::get('/karyawan', [KaryawanController::class,'index'])->name('karyawanpage');
Route::get('/karyawan/export', [KaryawanController::class,'export'])->name('export');
Route::get('/karyawan/tambah', [KaryawanController::class,'tambah'])->name('tambah');
Route::post('/karyawan/tambah/post', [KaryawanController::class,'post'])->name('post');
Route::get('/karyawan/edit/{id}', [KaryawanController::class,'edit'])->name('editkaryawan');
Route::post('/karyawan/edit/update/{id}', [KaryawanController::class,'update'])->name('updatekaryawan');
Route::delete('/karyawan/hapus/{id}', [KaryawanController::class,'delete'])->name('hapuskaryawan');