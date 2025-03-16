<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index() {
        //return view('wezens.show', ['wezen' => $wezen]);  // BEIDE schrijfwijzen werken !!
        return view('films.index', compact('categorie'));       // BEIDE schrijfwijzen werken !!
    }
    
    public function show() {
        //return view('wezens.show', ['wezen' => $wezen]);  // BEIDE schrijfwijzen werken !!
        return view('films.show', compact('film'));       // BEIDE schrijfwijzen werken !!
    }
}


