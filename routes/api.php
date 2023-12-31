<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\HistoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\PeminjamanController;
use App\Http\Controllers\Api\PengembalianController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Admin
// Mobil
Route::get('/admin/mobil', [ProductController::class, 'index']);
Route::post('/admin/mobil/store', [ProductController::class, 'store']);
Route::put('/admin/mobil/update/{id}', [ProductController::class, 'update']);
Route::delete('/admin/mobil/destroy/{id}', [ProductController::class, 'destroy']);

// Peminjaman
Route::get('/admin/peminjaman', [PeminjamanController::class, 'index']);
Route::post('/admin/peminjaman/store', [PeminjamanController::class, 'store']);
Route::put('/admin/peminjaman/update/{id}', [PeminjamanController::class, 'update']);
Route::delete('/admin/peminjaman/destroy/{id}', [PeminjamanController::class, 'destroy']);

// Pengembalian
Route::get('/admin/pengembalian', [PengembalianController::class, 'index']);
Route::post('/admin/pengembalian/store', [PengembalianController::class, 'store']);
Route::delete('/admin/pengembalian/destroy/{id}', [PengembalianController::class, 'destroy']);

// History
Route::get('/admin/history', [HistoryController::class, 'index']);