<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class HomeControllers extends Controller
{
    public function index() {
        $videos = Video::all();
        $data['videos'] = $videos; 
        return view('welcome', $data);
    }
}
