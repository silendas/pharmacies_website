@extends('layouts.mainlayout')

@section('title', 'Laporan Inventory')

@section('content')
<div class="container mt-4">
    <h1 class="text-center mb-4">Laporan Inventory</h1>

    <!-- Form Filter Laporan -->
    <div class="card p-4 shadow-sm mb-4">
        <h5>Filter Laporan Inventory</h5>
        <form>
            <div class="row g-3">
                <div class="col-md-4">
                    <label for="start_date" class="form-label">Tanggal Mulai:</label>
                    <input type="date" id="start_date" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="end_date" class="form-label">Tanggal Selesai:</label>
                    <input type="date" id="end_date" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="item_category" class="form-label">Kategori Barang:</label>
                    <select id="item_category" class="form-control">
                        <option value="">Pilih Kategori</option>
                        <option value="obat">Obat</option>
                        <option value="peralatan">Peralatan</option>
                        <option value="bahan">Bahan</option>
                    </select>
                </div>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Filter</button>
                <button type="button" class="btn btn-success">Unduh Laporan</button>
            </div>
        </form>
    </div>

    <!-- Tabel Laporan Inventory -->
    <div class="card p-4 shadow-sm">
        <h5>Data Laporan Inventory</h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Stok Masuk</th>
                    <th>Stok Keluar</th>
                    <th>Sisa Stok</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal Keluar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>BRG001</td>
                    <td>Paracetamol</td>
                    <td>Obat</td>
                    <td>50</td>
                    <td>20</td>
                    <td>30</td>
                    <td>2024-11-20</td>
                    <td>2024-11-22</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>BRG002</td>
                    <td>Aspirin</td>
                    <td>Obat</td>
                    <td>30</td>
                    <td>15</td>
                    <td>15</td>
                    <td>2024-11-21</td>
                    <td>2024-11-23</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>BRG003</td>
                    <td>Amoxicillin</td>
                    <td>Obat</td>
                    <td>40</td>
                    <td>10</td>
                    <td>30</td>
                    <td>2024-11-22</td>
                    <td>2024-11-24</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
