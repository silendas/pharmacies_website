@extends('layouts.mainlayout')

@section('title', 'Pengelolaan Gaji Karyawan')

@section('content')
<div class="container mt-4">
    <h1 class="text-center mb-4">Pengelolaan Gaji Karyawan</h1>

    <!-- Tambah Gaji -->
    <div class="card p-4 shadow-sm mb-4">
        <h5>Tambah Data Gaji</h5>
        <form>
            <div class="row g-3">
                <div class="col-md-4">
                    <label for="employee_id" class="form-label">Nama Karyawan:</label>
                    <select class="form-select" required>
                        <option value="">Pilih Karyawan</option>
                        <option value="1">Karyawan 1</option>
                        <option value="2">Karyawan 2</option>
                        <option value="3">Karyawan 3</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="period" class="form-label">Periode:</label>
                    <input type="month" id="period" class="form-control" required>
                </div>
                <div class="col-md-4">
                    <label for="salary" class="form-label">Total Gaji (Rp):</label>
                    <input type="number" id="salary" class="form-control" required>
                </div>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>

    <!-- Tabel Data Gaji -->
    <div class="card p-4 shadow-sm">
        <h5>Data Gaji Karyawan</h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Karyawan</th>
                    <th>Periode</th>
                    <th>Total Gaji (Rp)</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Karyawan 1</td>
                    <td>Oktober 2024</td>
                    <td>5.000.000</td>
                    <td><span class="badge bg-success">Paid</span></td>
                    <td>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Karyawan 2</td>
                    <td>Oktober 2024</td>
                    <td>4.000.000</td>
                    <td><span class="badge bg-warning">Unpaid</span></td>
                    <td>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Karyawan 3</td>
                    <td>Oktober 2024</td>
                    <td>6.000.000</td>
                    <td><span class="badge bg-success">Paid</span></td>
                    <td>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
