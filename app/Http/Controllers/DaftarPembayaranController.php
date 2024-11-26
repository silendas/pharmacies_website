<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarPembayaranController extends Controller
{
    public function index()
    {
        return view('daftar_pembayaran');
    }
}
