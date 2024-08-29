<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MbkmProgramController;
use App\Http\Controllers\PendaftaranMBKMController;
use App\Http\Controllers\ProgramMBKMController;
use App\Http\Controllers\RegistrationSettingController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/mbkm-program/create', [MbkmProgramController::class, 'create'])->name('mbkm-program.create');
    Route::post('/mbkm-program', [MbkmProgramController::class, 'store'])->name('mbkm-program.store');

    Route::resource('registration-settings', RegistrationSettingController::class);
    Route::resource('programs', ProgramMBKMController::class)->middleware('auth');
    Route::resource('pendaftarans', PendaftaranMBKMController::class)->middleware('auth');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');
});
