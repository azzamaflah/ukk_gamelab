@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Daftar Transaksi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Daftar Transaksi</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Untuk Paginate -->
@section('addCss')
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
@endsection

<!-- Untuk menampilkan confirm -->
@section('addJavascript')
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $(function() {
            $("#data-table").DataTable()
        })
    </script>

    <script src="{{ asset('js/sweetalert.min.js') }}"></script>

    <script>
        confirmDelete = function(button) {
            var url = $(button).data('url');
            swal({
                'title': 'Konfirmasi Hapus',
                'text': 'Apakah Kamu Yakin Ingin Menghapus Data Ini?',
                'dangerMode': true,
                'buttons': true
            }).then(function(value) {
                if (value) {
                    window.location = url;
                }
            })
        }
    </script>
@endsection

<!-- Main content -->
<div class="content">
    <div class="container-fluid">

        {{-- main content here --}}
        <div class="card">
            <div class="card-header text-right">
                <a href="{{ route('createTransaksi') }}" class="btn btn-primary bg-cyan " role="button">Tambah
                    Transaksi</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered mb-0" id="data-table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Barang</th>
                            <th>Nama Pelanggan</th>
                            <th>Tanggal</th>
                            <th>Jumlah Barang</th>
                            <th>Jumlah Harga</th>
                            <th>Diskon</th>
                            <th>Harga Setelah Diskon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- mengambil tabel data dari tabel transaksi -->
                        @foreach ($transaksis as $transaksi)
                            <tr>
                                <td> {{ $loop->index + 1 }}</td>
                                <td> {{ $transaksi->barang ? $transaksi->barang->nama : '-' }}</td>
                                <td> {{ $transaksi->pelanggan ? $transaksi->pelanggan->nama : '-' }}</td>
                                <td> {{ $transaksi->tanggal }}</td>
                                <td> {{ $transaksi->jumlah_barang }}</td>
                                <td> {{ $transaksi->jumlah_harga }}</td>
                                <td> {{ $transaksi->diskon }}</td>
                                <td> {{ $transaksi->harga_setelah_diskon }}</td>

                                <td>
                                    <a href="{{ route('editTransaksi', ['id' => $transaksi->id]) }}"
                                        class="btn btn-warning btn-sm" role="button">Edit</a>
                                    <a onclick="confirmDelete(this)"
                                        data-url="{{ route('deleteTransaksi', ['id' => $transaksi->id]) }}"
                                        class="btn btn-danger btn-sm" role="button">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>

            </div>

        </div>

    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
