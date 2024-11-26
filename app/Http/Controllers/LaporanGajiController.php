<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanGajiController extends Controller
{
    public function index()
    {
        return view('laporan_gaji');
    }
}
