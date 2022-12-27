<?php

use App\Http\Controllers\KosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users_controller;

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

Route::get('/', [KosController::class, 'index']);
Route::get('/penghuni', [KosController::class, 'indexPenghuni']);
Route::get('/penghuni/create', [KosController::class, 'create']);
Route::post('/store', [KosController::class, 'store']);
Route::get('/penghuni/{id}', [KosController::class, 'showPenghuni']);
Route::delete('/penghuni/{id}/delete', [KosController::class, 'destroy']);
Route::post('/penghuni/{id}/update', [KosController::class, 'update']);
Route::get('/penghuni/{id}/edit', [KosController::class, 'edit']);
Route::get('/{id}', [KosController::class, 'showKamar']);