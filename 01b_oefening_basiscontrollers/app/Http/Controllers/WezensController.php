<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WezensController extends Controller
{
    public function show($wezen = "wilde hond") {
        //return view('wezens.show', ['wezen' => $wezen]);  // BEIDE schrijfwijzen werken !!
        return view('wezens.show', compact('wezen'));       // BEIDE schrijfwijzen werken !!
    }
}
