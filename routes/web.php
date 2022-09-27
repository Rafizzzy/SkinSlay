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

Route::get('/', [\App\Http\Controllers\HomepageController::class,'index']);
Route::get('/produk', [\App\Http\Controllers\HomepageController::class,'produk']);
Route::get('/about', [\App\Http\Controllers\HomepageController::class,'about']);
Route::get('/kategori', [\App\Http\Controllers\HomepageController::class,'kategori']);
Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class,'index']);

Route::group(['prefix' => 'admin'] , function(){
    Route::get('/' ,[\App\Http\Controllers\DashboardController::class,'index']);
    Route::resource('transaksi',\App\Http\Controllers\TransaksiController::class);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
