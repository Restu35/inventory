<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.dashboard');
});

//halaman crud pelanggan 
Route::get('/pelanggan',[PelangganController::class,'index']);
Route::get('/pelanggan/tambah',[PelangganController::class,'create']);
Route::get('/pelanggan/simpan',[PelangganController::class,'store']);
Route::get('/pelanggan/{id}/show',[PelangganController::class,'show']);
Route::get('/pelanggan/{id}/update',[PelangganController::class,'update']);
Route::get('/pelanggan/{id}/delete',[PelangganController::class,'destroy']);