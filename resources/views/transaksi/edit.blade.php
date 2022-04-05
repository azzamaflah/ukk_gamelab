@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Transaksi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Edit Transaksi</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="card">
        <div class="card-body">
            <form action="{{ route('updateTransaksi', ['id' => $transaksi->id]) }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="id_barang">Nama Barang</label>
                    <select class="form-control" name="id_barang" id="id_barang" required="required">
                        @foreach ($barangs as $barang)
                            <option value="{{ $barang->id }}">{{ $barang->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="id_pelanggan">Nama Pelanggan</label>
                    <select class="form-control" name="id_pelanggan" id="id_pelanggan" required="required">
                        @foreach ($pelanggans as $pelanggan)
                            <option value="{{ $pelanggan->id }}">{{ $pelanggan->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal" class="form-control" required="required"
                        value="{{ $transaksi->tanggal }}" placeholder="Masukkan Tanggal Transaksi Baru">
                </div>

                <div class="form-group">
                    <label for="jumlah_barang">Jumlah Barang</label>
                    <input type="number" name="jumlah_barang" id="jumlah_barang" class="form-control" required="required"
                        value="{{ $transaksi->jumlah_barang }}" placeholder="Masukkan Jumlah Barang Baru">
                </div>

                <div class="form-group">
                    <label for="jumlah_harga">Jumlah Harga</label>
                    <input type="number" name="jumlah_harga" id="jumlah_harga" class="form-control" required="required"
                        value="{{ $transaksi->jumlah_harga }}" placeholder="Masukkan Jumlah Harga Baru">
                </div>

                <div class="form-group">
                    <label for="diskon">Diskon</label>
                    <input type="number" name="diskon" id="diskon" class="form-control" required="required"
                        value="{{ $transaksi->diskon }}" placeholder="Masukkan Diskon Baru">
                </div>

                <div class="form-group">
                    <label for="harga_setelah_diskon">Harga Diskon</label>
                    <input type="number" name="harga_setelah_diskon" id="harga_setelah_diskon" class="form-control"
                        required="required" value="{{ $transaksi->harga_setelah_diskon }}"
                        placeholder="Masukkan Harga Setelah Diskon Baru">
                </div>

                <div class="text-right">
                    <a href="{{ route('daftarTransaksi') }}" class="btn-outline-secondary mr-2" role="button">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            {{-- main content here --}}

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
