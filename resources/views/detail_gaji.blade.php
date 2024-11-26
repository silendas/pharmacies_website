@extends('layouts.mainlayout')

@section('title', 'Detail Gaji Karyawan')

@section('content')
<div class="container mt-4">
    <h1 class="text-center mb-4">Detail Gaji Karyawan</h1>
    <div class="card p-4 shadow-sm">
        <!-- Informasi Karyawan -->
        <h5 class="mb-3">Informasi Karyawan</h5>
        <table class="table table-borderless">
            <tr>
                <th>Nama Karyawan</th>
                <td>: John Doe</td>
            </tr>
            <tr>
                <th>Jabatan</th>
                <td>: Manager</td>
            </tr>
            <tr>
                <th>Periode</th>
                <td>: November 2024</td>
            </tr>
        </table>

        <hr>

        <!-- Detail Gaji -->
        <h5 class="mb-3">Rincian Gaji</h5>
        <table class="table table-bordered">
            <tr>
                <th>Komponen</th>
                <th>Jumlah (Rp)</th>
            </tr>
            <tr>
                <td>Gaji Pokok</td>
                <td>10,000,000</td>
            </tr>
            <tr>
                <td>Tunjangan</td>
                <td>2,000,000</td>
            </tr>
            <tr>
                <td>Bonus</td>
                <td>1,000,000</td>
            </tr>
            <tr>
                <td>Potongan</td>
                <td>-500,000</td>
            </tr>
            <tr>
                <th>Total Gaji</th>
                <th>12,500,000</th>
            </tr>
        </table>

        <hr>

        <!-- Tanggal Pembayaran -->
        <h5 class="mb-3">Informasi Pembayaran</h5>
        <table class="table table-borderless">
            <tr>
                <th>Tanggal Pembayaran</th>
                <td>: 25 November 2024</td>
            </tr>
            <tr>
                <th>Metode Pembayaran</th>
                <td>: Transfer Bank</td>
            </tr>
            <tr>
                <th>Status Pembayaran</th>
                <td>: Sudah Dibayar</td>
            </tr>
        </table>

        <!-- Tombol Aksi -->
        <div class="d-flex justify-content-end mt-3">
            <a href="#" class="btn btn-secondary me-2">Kembali</a>
            <button class="btn btn-success">Cetak Slip Gaji</button>
        </div>
    </div>
</div>
@endsection
