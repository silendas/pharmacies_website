<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StokKeluarController extends Controller
{
    public function index()
    {
        return view('stok_keluar');
    }
}
