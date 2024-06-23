<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NanoController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/enkripsi', [NanoController::class, 'enkripsi'])->name('enkripsi');
Route::post('/enkripsi', [NanoController::class, 'enkripsi'])->name('enkripsi');
Route::get('/data', [NanoController::class, 'data'])->name('data');
Route::get('/data/{data_proses}', [NanoController::class, 'data_proses'])->name('data_proses');
