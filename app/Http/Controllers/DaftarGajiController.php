<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarGajiController extends Controller
{
    public function index()
    {
        return view('daftar_gaji');
    }
}
