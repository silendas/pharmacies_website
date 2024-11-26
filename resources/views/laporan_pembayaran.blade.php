@extends('layouts.mainlayout')

@section('title', 'Laporan Pembayaran')

@section('content')
<div class="container mt-4">
    <h1 class="text-center mb-4">Laporan Pembayaran</h1>
    <div class="card p-4 shadow-sm">
        <!-- Filter Laporan -->
        <form class="row mb-4">
            <div class="col-md-4">
                <label for="startDate" class="form-label">Tanggal Mulai</label>
                <input type="date" class="form-control" id="startDate" name="start_date">
            </div>
            <div class="col-md-4">
                <label for="endDate" class="form-label">Tanggal Selesai</label>
                <input type="date" class="form-control" id="endDate" name="end_date">
            </div>
            <div class="col-md-4 d-flex align-items-end">
                <button type="submit" class="btn btn-primary w-100">Filter</button>
            </div>
        </form>

        <!-- Tabel Laporan -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>No Transaksi</th>
                        <th>Nama Customer</th>
                        <th>Metode Pembayaran</th>
                        <th>Subtotal (Rp)</th>
                        <th>Diskon (Rp)</th>
                        <th>Total (Rp)</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contoh Data -->
                    <tr>
                        <td>1</td>
                        <td>2024-11-26</td>
                        <td>TRX001</td>
                        <td>John Doe</td>
                        <td>Tunai</td>
                        <td>100,000</td>
                        <td>5,000</td>
                        <td>95,000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2024-11-26</td>
                        <td>TRX002</td>
                        <td>Jane Smith</td>
                        <td>Transfer</td>
                        <td>200,000</td>
                        <td>10,000</td>
                        <td>190,000</td>
                    </tr>
                    <!-- Tambahkan data lainnya di sini -->
                </tbody>
            </table>
        </div>

        <!-- Tombol Cetak Laporan -->
        <div class="d-flex justify-content-end mt-3">
            <button class="btn btn-success">Cetak Laporan</button>
        </div>
    </div>
</div>
@endsection
