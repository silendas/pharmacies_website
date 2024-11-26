<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailGajiController extends Controller
{
    public function index()
    {
        return view('detail_gaji');
    }
}
