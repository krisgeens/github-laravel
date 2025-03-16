<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WezensController;
use App\Http\Controllers\KoninkrijkenController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/wezens/{wezen?}', [WezensController::class, 'show'])->name('wezens.show');

Route::prefix('koninkrijk')->group(function() {
    Route::get('/noord', [KoninkrijkenController::class, 'noord'])->name('koninkrijk.noord');
    Route::get('/zuid', [KoninkrijkenController::class, 'zuid'])->name('koninkrijk.zuid');
});