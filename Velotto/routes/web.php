<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VelottoController;


Route::get('/', [VelottoController::class, 'index']);

Route::get('/velotto/data', [VelottoController::class, 'data']);
Route::get('/velotto/detail/{id}', [VelottoController::class, 'detail'])->name('velotto.detail');

Route::get('/velotto/tambah', [VelottoController::class, 'tambah']);
Route::post('/velotto/storeOr', [VelottoController::class, 'storeOr']);
Route::get('/velotto/bayar', [VelottoController::class, 'bayar']);
Route::post('/velotto/storeBy', [VelottoController::class, 'storeBy']);

Route::get('/velotto/tambahM', [VelottoController::class, 'tambahM']);
Route::post('/velotto/storeM', [VelottoController::class, 'storeM']);

Route::get('/velotto/hapus/{id}', [VelottoController::class, 'hapus']);
Route::get('/velotto/hapusM/{id}', [VelottoController::class, 'hapusM']);

Route::get('/velotto/edit/{id}', [VelottoController::class, 'edit']);
Route::post('/velotto/update', [VelottoController::class, 'update']);
Route::get('/velotto/editM/{id}', [VelottoController::class, 'editM']);
Route::post('/velotto/updateM', [VelottoController::class, 'updateM']);


Route::get('/velotto/home/', [VelottoController::class, 'home']);
Route::get('/velotto/history', [VelottoController::class, 'history']);


    