@extends('layouts.mainlayout')

@section('title', 'Daftar Pembayaran')

@section('content')
<div class="container mt-4">
    <h1 class="text-center mb-4">Form Pembayaran</h1>
    <div class="row">
        <!-- Form Pembayaran -->
        <div class="col-lg-8">
            <div class="card p-4 shadow-sm">
                <form>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="kodePegawai" class="form-label">Kode Pegawai</label>
                            <input type="text" class="form-control" id="kodePegawai" placeholder="Kode Pegawai">
                        </div>
                        <div class="col-md-4">
                            <label for="noTransaksi" class="form-label">No Transaksi</label>
                            <input type="text" class="form-control" id="noTransaksi" placeholder="No Transaksi">
                        </div>
                        <div class="col-md-4">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="kodeBarang" class="form-label">Kode Barang</label>
                            <input type="text" class="form-control" id="kodeBarang" placeholder="Kode Barang">
                        </div>
                        <div class="col-md-6">
                            <label for="namaBarang" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" id="namaBarang" placeholder="Nama Barang">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" class="form-control" id="harga" placeholder="Rp">
                        </div>
                        <div class="col-md-4">
                            <label for="jumlah" class="form-label">Jumlah</label>
                            <input type="number" class="form-control" id="jumlah" placeholder="Jumlah">
                        </div>
                        <div class="col-md-4">
                            <label for="namaCustomer" class="form-label">Nama Customer</label>
                            <input type="text" class="form-control" id="namaCustomer" placeholder="Nama Customer">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="metodePembayaran" class="form-label">Metode Pembayaran</label>
                            <select class="form-select" id="metodePembayaran">
                                <option selected>Pilih Metode</option>
                                <option value="1">Tunai</option>
                                <option value="2">Kartu Kredit</option>
                                <option value="3">Transfer</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="total" class="form-label">Total</label>
                            <input type="text" class="form-control" id="total" placeholder="Rp">
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <button type="button" class="btn btn-success">Simpan</button>
                        <button type="button" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Nota -->
        <div class="col-lg-4">
            <div class="card p-4 shadow-sm">
                <h5 class="text-center">NAMA TOKO</h5>
                <hr>
                <p><strong>Tanggal:</strong> <span id="tanggalNota"></span></p>
                <p><strong>No Transaksi:</strong> <span id="noTransaksiNota"></span></p>
                <p><strong>Kasir:</strong> <span id="kasirNota"></span></p>
                <p><strong>Nama Customer:</strong> <span id="customerNota"></span></p>
                <hr>
                <p><strong>Nama Barang:</strong> <span id="barangNota"></span></p>
                <p><strong>Items:</strong> <span id="itemsNota"></span></p>
                <p><strong>Subtotal:</strong> Rp <span id="subtotalNota"></span></p>
                <p><strong>Total:</strong> Rp <span id="totalNota"></span></p>
                <hr>
                <p><strong>Pembayaran:</strong> <span id="pembayaranNota"></span></p>
                <p><strong>Jumlah Tunai:</strong> Rp <span id="tunaiNota"></span></p>
                <p><strong>Kembalian:</strong> Rp <span id="kembalianNota"></span></p>
                <hr>
                <p class="text-center">Terima Kasih Sudah Berbelanja<br>Semoga Lekas Sembuh</p>
                <button type="button" class="btn btn-success w-100">Print</button>
            </div>
        </div>
    </div>
</div>
@endsection
