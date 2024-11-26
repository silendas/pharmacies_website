<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanInventoryController extends Controller
{
    public function index()
    {
        return view('laporan_inventory');
    }
}
