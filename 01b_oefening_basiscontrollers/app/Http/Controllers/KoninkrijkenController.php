<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\KoninkrijkenController;

class KoninkrijkenController extends Controller
{
    public function noord() {
        return view('koninkrijk/noord');
    }
    
    public function zuid() {
        return view('koninkrijk/zuid');
    }
}

