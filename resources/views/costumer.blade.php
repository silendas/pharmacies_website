@extends('layouts.mainlayout')

@section('title', 'Customer Apoteker')

@section('content')
<div class="container mt-4">
    <h1 class="text-center mb-4">Daftar Customer Apoteker</h1>

    <!-- Form Pencarian Customer -->
    <div class="card p-4 shadow-sm mb-4">
        <h5>Pencarian Customer</h5>
        <form>
            <div class="row g-3">
                <div class="col-md-4">
                    <label for="search_name" class="form-label">Nama Customer:</label>
                    <input type="text" id="search_name" class="form-control" placeholder="Cari berdasarkan nama">
                </div>
                <div class="col-md-4">
                    <label for="search_phone" class="form-label">No. Telepon:</label>
                    <input type="text" id="search_phone" class="form-control" placeholder="Cari berdasarkan no. telepon">
                </div>
                <div class="col-md-4">
                    <label for="search_email" class="form-label">Email:</label>
                    <input type="email" id="search_email" class="form-control" placeholder="Cari berdasarkan email">
                </div>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
        </form>
    </div>

    <!-- Tabel Daftar Customer -->
    <div class="card p-4 shadow-sm">
        <h5>Daftar Customer Apoteker</h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Customer</th>
                    <th>No. Telepon</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Rina Sari</td>
                    <td>081234567890</td>
                    <td>rina@example.com</td>
                    <td>Jl. Melati No. 12, Jakarta</td>
                    <td>
                        <button class="btn btn-info btn-sm">Detail</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Andi Pratama</td>
                    <td>082345678901</td>
                    <td>andi@example.com</td>
                    <td>Jl. Mawar No. 5, Surabaya</td>
                    <td>
                        <button class="btn btn-info btn-sm">Detail</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Fikri Aditya</td>
                    <td>083456789012</td>
                    <td>fikri@example.com</td>
                    <td>Jl. Raya No. 23, Bandung</td>
                    <td>
                        <button class="btn btn-info btn-sm">Detail</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
