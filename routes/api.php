<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProdukController;
use App\Http\Controllers\Api\HimpunanController;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\HimpunanProduksController;
use App\Http\Controllers\Api\KategoriProduksController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [AuthController::class, 'login'])->name('api.login');

Route::middleware('auth:sanctum')
    ->get('/user', function (Request $request) {
        return $request->user();
    })
    ->name('api.user');

Route::name('api.')
    ->middleware('auth:sanctum')
    ->group(function () {
        Route::apiResource('himpunans', HimpunanController::class);

        // Himpunan Produks
        Route::get('/himpunans/{himpunan}/produks', [
            HimpunanProduksController::class,
            'index',
        ])->name('himpunans.produks.index');
        Route::post('/himpunans/{himpunan}/produks', [
            HimpunanProduksController::class,
            'store',
        ])->name('himpunans.produks.store');

        Route::apiResource('kategoris', KategoriController::class);

        // Kategori Produks
        Route::get('/kategoris/{kategori}/produks', [
            KategoriProduksController::class,
            'index',
        ])->name('kategoris.produks.index');
        Route::post('/kategoris/{kategori}/produks', [
            KategoriProduksController::class,
            'store',
        ])->name('kategoris.produks.store');

        Route::apiResource('produks', ProdukController::class);

        Route::apiResource('users', UserController::class);
    });
