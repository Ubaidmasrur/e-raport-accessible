<?php
use Illuminate\Support\Facades\Route;
Route::post('/login', 'AuthController@login');
Route::middleware('auth:sanctum')->group(function () {
 Route::get('/user', 'AuthController@me');
 Route::apiResource('nilai', NilaiController::class);
 Route::apiResource('siswa', SiswaController::class);
 Route::apiResource('indikator', IndikatorController::class);
 Route::get('/rekap/pdf', 'RekapController@generatePDF');
});