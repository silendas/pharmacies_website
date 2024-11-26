@extends('layouts.mainlayout')

@section('title', 'Laporan Gaji Karyawan')

@section('content')
<div class="container mt-4">
    <h1 class="text-center mb-4">Laporan Gaji Karyawan</h1>

    <!-- Filter Data -->
    <div class="card p-4 shadow-sm mb-4">
        <h5>Filter Laporan</h5>
        <form>
            <div class="row g-3">
                <div class="col-md-4">
                    <label for="start_date" class="form-label">Dari Tanggal:</label>
                    <input type="date" id="start_date" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="end_date" class="form-label">Sampai Tanggal:</label>
                    <input type="date" id="end_date" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="employee_id" class="form-label">Karyawan:</label>
                    <select id="employee_id" class="form-select">
                        <option value="">Semua Karyawan</option>
                        <option value="1">Karyawan 1</option>
                        <option value="2">Karyawan 2</option>
                        <option value="3">Karyawan 3</option>
                    </select>
                </div>
            </div>
            <div class="mt-3 d-flex justify-content-end">
                <button type="button" class="btn btn-primary">Tampilkan</button>
                <button type="button" class="btn btn-success ms-2">Cetak PDF</button>
            </div>
        </form>
    </div>

    <!-- Tabel Laporan -->
    <div class="card p-4 shadow-sm">
        <h5 class="mb-3">Hasil Laporan</h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Karyawan</th>
                    <th>Jabatan</th>
                    <th>Periode</th>
                    <th>Total Gaji (Rp)</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Nama Karyawan 1</td>
                    <td>Manager</td>
                    <td>Oktober 2024</td>
                    <td>5.000.000</td>
                    <td><span class="badge bg-success">Paid</span></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Nama Karyawan 2</td>
                    <td>Staff</td>
                    <td>Oktober 2024</td>
                    <td>3.500.000</td>
                    <td><span class="badge bg-warning">Unpaid</span></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Nama Karyawan 3</td>
                    <td>Admin</td>
                    <td>Oktober 2024</td>
                    <td>4.200.000</td>
                    <td><span class="badge bg-success">Paid</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
