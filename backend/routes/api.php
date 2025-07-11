<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController, NilaiController, SiswaController, 
    IndikatorController, TahunAjaranController, UserController, RekapController
};

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/me', [AuthController::class, 'me']);
    Route::apiResource('nilai', NilaiController::class);
    Route::apiResource('siswa', SiswaController::class);
    Route::apiResource('indikator', IndikatorController::class);
    Route::apiResource('tahunajaran', TahunAjaranController::class);
    Route::apiResource('users', UserController::class);
    Route::get('/rekap/pdf/{id}', [RekapController::class, 'generatePDF']);
    Route::post('/rekap/email/{id}', [RekapController::class, 'sendToWali']);
});
