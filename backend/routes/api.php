<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\RekapController;

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [AuthController::class, 'me']);
    Route::apiResource('nilai', NilaiController::class);
    Route::apiResource('siswa', SiswaController::class);
    Route::apiResource('indikator', IndikatorController::class);
    Route::get('/rekap/pdf', [RekapController::class, 'generatePDF']);
});
