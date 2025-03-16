<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index'] )->name('home');








Route::get('/films', [HomeController::class, 'index'] )->name('films');

Route::get('/', [HomeController::class, 'index'] )->name('home');
Route::get('/', [HomeController::class, 'index'] )->name('home');

//Route::get('/films/{categorie}/{film}', [FilmController::class, 'index'])->name('films.show');

Route::prefix('films')->group(function() {
    Route::get('/', [FilmController::class, 'index'])->name('films.index');
    Route::get('/{categorie}/{film}', [FilmController::class, 'categorie'])->name('films.show');
});






Route::get('/', [HomeController::class, 'index'])->name('home');

//Route::get('/films/{wezen?}', [FilmController::class, 'show'])->name('wezens.show');

Route::prefix('koninkrijk')->group(function() {
    Route::get('/noord', [KoninkrijkenController::class, 'noord'])->name('koninkrijk.noord');
    Route::get('/zuid', [KoninkrijkenController::class, 'zuid'])->name('koninkrijk.zuid');
});