@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->

    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Count Table</h1>
                </div><!-- /.col -->

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>

                </div>
                <!-- /.col -->
                <div class="col1-x1-3 col-md-2">

                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Barang

                            <h4 class="mb-0">
                                {{ $totalbarang }}
                            </h4>
                        </div>

                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('daftarBarang') }}">Lihat Barang</a>
                            <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col1-x1-3 col-md-2">

                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">Pelanggan
                            <h4 class="mb-0">
                                {{ $totalpelanggan }}

                            </h4>
                        </div>

                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('daftarPelanggan') }}">Lihat
                                Pelanggan</a>
                            <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                        </div>
                    </div>
                </div>

                <div class="col1-x1-3 col-md-2">

                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Transaksi

                            <h4 class="mb-0">
                                {{ $totaltransaksi }}
                            </h4>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('daftarTransaksi') }}">Lihat
                                Transaksi</a>
                            <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- /.row -->

    <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->




    <!-- Main content -->

    <div class="content">
        <div class="container-fluid">

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
