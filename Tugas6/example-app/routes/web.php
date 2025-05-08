<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\SelamatController;


Route::get('/', [DashboardController::class, 'home']);
Route::get('/daftar', [DaftarController::class, 'pendaftaran']);
Route::get('/selamat', [SelamatController::class, 'selamat']);

Route::get('/master', function(){
    return view('layouts.master');
});