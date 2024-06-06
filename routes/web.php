<?php

use App\Http\Controllers\mahasiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

// Route::get('/', function () {return view('welcome');});

Route::get('/',[LoginController::class,'showLoginForm'])->name('loginadmin');
Route::get('login',[LoginController::class,'showLoginForm'])->name('loginadmin');

Route::post('loginproses',[LoginController::class,'login'])->name('loginadmin2');

Route::resource('mahasiswa',mahasiswaController::class);