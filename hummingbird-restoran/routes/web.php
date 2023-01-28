<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TransactionController;
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

Route::controller(AuthController::class)->group(function () {
    Route::get('/auth', 'index');
    Route::post('/auth/login', 'login');
    Route::post('/auth/register', 'register');
    Route::get('/auth/logout', 'logout')->middleware('IsLogin');
});

Route::middleware('IsLogin')->group(function () {
    if (Route::middleware('can:transaksi') && Route::middleware('can:menu') && Route::middleware('can:laporan')) {
        Route::get('/', [AuthController::class, 'homepage']);
    } else {
        Route::get('/dashboard', [AuthController::class, 'dashboard']);
    }

    Route::middleware('can:menu')->group(function () {
        Route::controller(ProductsController::class)->group(function () {
            Route::get('/menu', 'view');
            Route::get('/menu/add', 'add');
            Route::post('/menu/add/store', 'store');
            Route::get('/menu/{id}/edit', 'edit');
            Route::get('/menu/{id}/view', 'view');
            Route::put('/menu/{id}/update', 'update');
            Route::delete('/menu/delete', 'destroy');
        });
    });

    Route::middleware('can:transaksi')->group(function () {
        Route::controller(TransactionController::class)->group(function () {
            Route::get('/transaction', 'view');
            Route::get('/transaction/add', 'add');
            Route::post('/transaction/add/store', 'store');
            Route::get('/transaction/{id}/edit', 'edit');
            Route::get('/transaction/{id}/view', 'view');
            Route::put('/transaction/{id}/update', 'update');
            Route::delete('/transaction/delete', 'destroy');
        });
    });

    Route::middleware('can:laporan')->group(function () {
        Route::controller(ReportController::class)->group(function () {
            Route::get('/transaction', 'view');
        });
    });
});