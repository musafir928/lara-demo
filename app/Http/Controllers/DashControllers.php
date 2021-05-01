<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashControllers extends Controller
{
    public function english(){
        return view('dashboard.english');
    }

    public function dutch(){
        return view('dashboard.dutch');
    }
}
