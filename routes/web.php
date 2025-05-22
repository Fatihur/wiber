<?php

use App\Http\Controllers\BerandaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\HimpunanController;
use App\Http\Controllers\KategoriController;

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
    return view('berandas.home');
});
Route::get('/tentang', function () {
    return view('berandas.tentang');
});
// Route::resource('beranda', BerandaController::class);
Route::resource('beranda-produk', BerandaController::class);
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('/')
    ->middleware('auth')
    ->group(function () {
        Route::resource('himpunans', HimpunanController::class);
        Route::resource('kategoris', KategoriController::class);
        Route::resource('produks', ProdukController::class);
        Route::resource('users', UserController::class);
    });
