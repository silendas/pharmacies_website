<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengelolaanGajiController extends Controller
{
    public function index()
    {
        return view('pengelolaan_gaji');
    }
}
