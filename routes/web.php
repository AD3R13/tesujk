<?php

use App\Http\Controllers\GelombangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenggunaController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('home/{usertype?}', [HomeController::class, 'index'])->name('home');
Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

// Route::get('/', [LoginController::class, 'index']);
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::get('register', [LoginController::class, 'register'])->name('register');

Route::post('actionRegister', [LoginController::class, 'actionRegister'])->name('actionRegister');
Route::post('actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin');
Route::post('actionLogout', [LoginController::class, 'actionLogout'])->name('actionLogout');

Route::middleware(['auth', 'administrator'])->group(function () {

    Route::resource('pengguna', PenggunaController::class);
    Route::resource('level', LevelController::class);
    Route::resource('jurusan', JurusanController::class);
    Route::resource('gelombang', GelombangController::class);
});
