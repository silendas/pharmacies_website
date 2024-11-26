<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StokMasukController extends Controller
{
    public function index()
    {
        return view('stok_masuk');
    }
}
