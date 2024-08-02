<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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

Route::get('/api/mahasiswa', [MahasiswaController::class, 'index']); // Membaca semua data mahasiswa
Route::get('/api/mahasiswa/{id}', [MahasiswaController::class, 'show']); // Membaca data mahasiswa berdasarkan ID
Route::post('/api/mahasiswa', [MahasiswaController::class, 'store']); // Membuat data mahasiswa baru
Route::put('/api/mahasiswa/{id}', [MahasiswaController::class, 'update']); // Memperbarui data mahasiswa
Route::delete('/api/mahasiswa/{id}', [MahasiswaController::class, 'destroy']); // Menghapus data mahasiswa