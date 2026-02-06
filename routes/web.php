<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiswaController::class, 'index']);
Route::get('/siswa', [SiswaController::class, 'store']);
Route::get('/siswa/{siswa}', [SiswaController::class, 'edit']);
Route::put('/siswa/{siswa}', [SiswaController::class, 'update']);