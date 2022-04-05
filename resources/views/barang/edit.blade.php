@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Starter</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tambah Jurusan</a></li>
                        <li class="breadcrumb-item active">Starter</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="card">
        <div class="card-body">
            <form action="{{ route('updateBarang', ['id' => $barang->id]) }}" method="post">
                @csrf


                <div class="form-group">
                    <label for="kode"> kode Makanan </label>
                    <input type="text" name="kode" id="kode" class="form-control" required="required"
                        value="{{ $barang->kode }}" placeholder="Masukkan kode makanan ">
                </div>

                <div class="form-group">
                    <label for="nama"> Nama Makanan</label>
                    <input type="text" name="nama" id="nama" class="form-control" required="required"
                        value="{{ $barang->nama }}" placeholder="Masukkan nama makanan ">
                </div>

                <div class="form-group">
                    <label for="harga"> Harga Makanan </label>
                    <input type="number" name="harga" id="harga" class="form-control" required="required"
                        value="{{ $barang->harga }}" placeholder="Masukkan harga barang">
                </div>

                <div class="text-right">
                    <a href="{{ route('daftarBarang') }}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
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
