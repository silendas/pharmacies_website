@extends('layouts.mainlayout')

@section('title', 'Stok Keluar Inventory')

@section('content')
<div class="container mt-4">
    <h1 class="text-center mb-4">Stok Keluar Inventory</h1>

    <!-- Form Tambah Stok Keluar -->
    <div class="card p-4 shadow-sm mb-4">
        <h5>Tambah Stok Keluar</h5>
        <form>
            <div class="row g-3">
                <div class="col-md-4">
                    <label for="item_code" class="form-label">Kode Barang:</label>
                    <input type="text" id="item_code" class="form-control" placeholder="Masukkan Kode Barang" required>
                </div>
                <div class="col-md-4">
                    <label for="item_name" class="form-label">Nama Barang:</label>
                    <input type="text" id="item_name" class="form-control" placeholder="Masukkan Nama Barang" required>
                </div>
                <div class="col-md-4">
                    <label for="quantity" class="form-label">Jumlah:</label>
                    <input type="number" id="quantity" class="form-control" placeholder="Masukkan Jumlah" required>
                </div>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>

    <!-- Tabel Stok Keluar -->
    <div class="card p-4 shadow-sm">
        <h5>Data Stok Keluar</h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Tanggal Keluar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>BRG001</td>
                    <td>Paracetamol</td>
                    <td>20</td>
                    <td>2024-11-20</td>
                    <td>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>BRG002</td>
                    <td>Aspirin</td>
                    <td>15</td>
                    <td>2024-11-21</td>
                    <td>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>BRG003</td>
                    <td>Amoxicillin</td>
                    <td>10</td>
                    <td>2024-11-22</td>
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
