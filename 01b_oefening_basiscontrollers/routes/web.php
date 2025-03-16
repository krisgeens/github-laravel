<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('welcome');
})->name('home');


Route::get('/wezens/{wezen?}', function($wezen = "wilde hond") {
    //return view('wezens.show', ['wezen' => $wezen]);  // BEIDE schrijfwijzen werken !!
    return view('wezens.show', compact('wezen'));       // BEIDE schrijfwijzen werken !!
})->name('wezens.show');
 

Route::prefix('koninkrijk')->group(function() {

    Route::get('/noord', function(){
        return view('koninkrijk/noord');
    })->name('koninkrijk.noord');

    Route::get('/zuid', function(){
        return view('koninkrijk/zuid');
    })->name('koninkrijk.zuid');
});