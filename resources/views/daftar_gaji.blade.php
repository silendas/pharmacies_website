@extends('layouts.mainlayout')

@section('title', 'Daftar Gaji')

@section('content')
<div class="container mt-4">
    <h1 class="text-center mb-4">Daftar Gaji Karyawan</h1>
    <div class="card p-4 shadow-sm">
        <!-- Filter Daftar Gaji -->
        <form class="row mb-4">
            <div class="col-md-4">
                <label for="bulan" class="form-label">Bulan</label>
                <select id="bulan" name="bulan" class="form-select">
                    <option value="" selected>Pilih Bulan</option>
                    <option value="01">Januari</option>
                    <option value="02">Februari</option>
                    <option value="03">Maret</option>
                    <option value="04">April</option>
                    <option value="05">Mei</option>
                    <option value="06">Juni</option>
                    <option value="07">Juli</option>
                    <option value="08">Agustus</option>
                    <option value="09">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="tahun" class="form-label">Tahun</label>
                <input type="number" id="tahun" name="tahun" class="form-control" placeholder="Masukkan Tahun">
            </div>
            <div class="col-md-4 d-flex align-items-end">
                <button type="submit" class="btn btn-primary w-100">Filter</button>
            </div>
        </form>

        <!-- Tabel Daftar Gaji -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Karyawan</th>
                        <th>Jabatan</th>
                        <th>Gaji Pokok (Rp)</th>
                        <th>Tunjangan (Rp)</th>
                        <th>Bonus (Rp)</th>
                        <th>Potongan (Rp)</th>
                        <th>Total Gaji (Rp)</th>
                        <th>Tanggal Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contoh Data -->
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>Manager</td>
                        <td>10,000,000</td>
                        <td>2,000,000</td>
                        <td>1,000,000</td>
                        <td>500,000</td>
                        <td>12,500,000</td>
                        <td>2024-11-25</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>Staff</td>
                        <td>5,000,000</td>
                        <td>1,000,000</td>
                        <td>500,000</td>
                        <td>200,000</td>
                        <td>6,300,000</td>
                        <td>2024-11-25</td>
                    </tr>
                    <!-- Tambahkan data lainnya di sini -->
                </tbody>
            </table>
        </div>

        <!-- Tombol Cetak Daftar Gaji -->
        <div class="d-flex justify-content-end mt-3">
            <button class="btn btn-success">Cetak Daftar Gaji</button>
        </div>
    </div>
</div>
@endsection
