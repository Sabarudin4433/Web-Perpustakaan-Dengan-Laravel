<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index'])->name('mahasiswa');

Route::get('/mahasiswa/create', [App\Http\Controllers\MahasiswaController::class, 'create']);

Route::post('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'store'])->name('mahasiswa');

Route::get('mahasiswa/{id}/edit', [App\Http\Controllers\MahasiswaController::class, 'edit']);

Route::patch('mahasiswa/{id}', [App\Http\Controllers\MahasiswaController::class, 'update']);

Route::delete('mahasiswa/{id}', [App\Http\Controllers\MahasiswaController::class, 'destroy'])->name('mahasiswa');

Route::get('mahasiswa/{id}/lihat', [App\Http\Controllers\MahasiswaController::class, 'lihat']);

Route::get('mahasiswa/search', [App\Http\Controllers\MahasiswaController::class, 'search'])->name('search');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/perpustakaan', [App\Http\Controllers\PerpustakaanController::class, 'index'])->name('perpustakaan');

Route::get('/perpustakaan/create', [App\Http\Controllers\PerpustakaanController::class, 'create']);

Route::post('/perpustakaan', [App\Http\Controllers\PerpustakaanController::class, 'store'])->name('perpustakaan');

Route::get('perpustakaan/{id}/edit', [App\Http\Controllers\PerpustakaanController::class, 'edit']);

Route::patch('perpustakaan/{id}', [App\Http\Controllers\PerpustakaanController::class, 'update']);

Route::delete('perpustakaan/{id}', [App\Http\Controllers\PerpustakaanController::class, 'destroy'])->name('perpustakaan');

Route::get('perpustakaan/{id}/lihat', [App\Http\Controllers\PerpustakaanController::class, 'lihat']);

Route::get('perpustakaan/search', [App\Http\Controllers\PerpustakaanController::class, 'search'])->name('search');

/*Route::get('/mahasiswa/create', 'MahasiswaController@create'); 
Route::post('/mahasiswa', 'MahasiswaController@store');
Route::get('mahasiswa/{id}/edit', 'MahasiswaController@edit'); 
Route::patch('mahasiswa/{id}', 'MahasiswaController@update');
Route::delete('mahasiswa/{id}', 'MahasiswaController@destroy');*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');