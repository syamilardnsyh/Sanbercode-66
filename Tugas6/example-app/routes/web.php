<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\SelamatController;
use App\Http\Controllers\CategoryController;


Route::get('/', [DashboardController::class, 'home']);
Route::get('/daftar', [DaftarController::class, 'pendaftaran']);

Route::get('/selamat', [SelamatController::class, 'selamat']);

//ROUTE CATEGORIES / GENRES
// CREATE DATA
Route::get('category/create', [CategoryController::class, 'create']);