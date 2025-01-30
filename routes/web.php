<?php

use App\Http\Controllers\PendaftarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lobyPendaftar',[PendaftarController::class,'index'])->name('data.index');
Route::get('/createData',[PendaftarController::class,'create'])->name('data.create');
Route::post('/addPeserta',[PendaftarController::class,'store'])->name('data.store');