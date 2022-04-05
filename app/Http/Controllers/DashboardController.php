<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\Pelanggan;
use App\Barang;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    //untuk memanggil count data masing"
    public function index()
    {
        $totalbarang = Barang::all()->count();
        $totalpelanggan = Pelanggan::all()->count();
        $totaltransaksi = Transaksi::all()->count();
        return view('dashboard', compact('totalbarang', 'totalpelanggan', 'totaltransaksi'));
    }
}
