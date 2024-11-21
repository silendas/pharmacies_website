@extends('layouts.mainlayout')

@section('title', 'Dashboard Apoteker')

@section('content')

<div class="container">
    <!-- Header Greeting with Card -->
    <div class="row">
        <div class="col-12 mb-4">
            <!-- Card for Header with Greeting -->
            <div class="card shadow border-0 rounded-3">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <!-- Greeting Message on the Left -->
                    <div>
                        <h1 class="mb-0">Good Morning,</h1>
                        <h4 class="text-success">Dr. Arkali Moorthi</h4>
                        <p>Have a nice day at work!</p>
                    </div>
                    
                    <!-- Image representing Apoteker on the Right -->
                    <img src="../image/2385309.jpg" alt="Apoteker Image" class="img-fluid " style="width: 220px;">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Gaji Section -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card shadow border-0 rounded-3" style="background-color: #E8DCC3;">
                <div class="card-body text-center">
                    <i class="bi bi-cash-stack fs-1 text-dark mb-3"></i>
                    <h5 class="card-title text-dark">Gaji</h5>
                    <p class="card-text text-dark">Kelola daftar gaji karyawan, detail, dan laporan.</p>
                    <a href="#" class="btn btn-dark btn-sm">Kelola Gaji</a>
                </div>
            </div>
        </div>
    
        <!-- Pembayaran Section -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card shadow border-0 rounded-3" style="background-color: #D3CBB8;">
                <div class="card-body text-center">
                    <i class="bi bi-wallet2 fs-1 text-dark mb-3"></i>
                    <h5 class="card-title text-dark">Pembayaran</h5>
                    <p class="card-text text-dark">Pantau dan kelola semua pembayaran pelanggan.</p>
                    <a href="#" class="btn btn-dark btn-sm">Kelola Pembayaran</a>
                </div>
            </div>
        </div>
    
        <!-- Inventory Section -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card shadow border-0 rounded-3" style="background-color: #C7DAD4;">
                <div class="card-body text-center">
                    <i class="bi bi-box-seam fs-1 text-dark mb-3"></i>
                    <h5 class="card-title text-dark">Inventory</h5>
                    <p class="card-text text-dark">Kelola stok barang, laporan masuk/keluar.</p>
                    <a href="#" class="btn btn-dark btn-sm">Kelola Inventory</a>
                </div>
            </div>
        </div>
    
        <!-- Pelanggan Section -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card shadow border-0 rounded-3" style="background-color: #DAD3CB;">
                <div class="card-body text-center">
                    <i class="bi bi-people fs-1 text-dark mb-3"></i>
                    <h5 class="card-title text-dark">Pelanggan</h5>
                    <p class="card-text text-dark">Pantau dan kelola data pelanggan setia.</p>
                    <a href="#" class="btn btn-dark btn-sm">Kelola Pelanggan</a>
                </div>
            </div>
        </div>
    </div>
    
</div>

@endsection
