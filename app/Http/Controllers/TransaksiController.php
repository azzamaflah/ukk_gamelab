<?php

namespace App\Http\Controllers;

use App\Transaksi;
use App\Pelanggan;
use App\Barang;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksis = Transaksi::all();
        return view('transaksi.index', [
            "transaksis" => $transaksis
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelanggans = Pelanggan::all();
        $barangs = Barang::all();
        return view('transaksi.create', [
            'pelanggans' => $pelanggans,
            'barangs' => $barangs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = validator($request->all(), [
            'id_barang'     => 'required|integer|max:255',
            'id_pelanggan'  => 'required|integer|max:255',
            'tanggal'       => 'required|date',
            'jumlah_barang' => 'required|integer',
            'jumlah_harga'  => 'required|integer',
            'diskon'        => 'required|integer',
            'harga_setelah_diskon'  => 'required|integer',
        ])->validate();

        $transaksi = new Transaksi($validatedData);
        $transaksi->save();

        return redirect(route('daftarTransaksi'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        $barangs = Barang::all();
        $pelanggans = Pelanggan::all();
        return view('transaksi.edit', [
            'transaksi' => $transaksi,
            'barangs' => $barangs,
            'pelanggans' => $pelanggans
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        $validatedData = validator($request->all(), [
            'id_barang'     => 'required|integer',
            'id_pelanggan'  => 'required|integer',
            'tanggal'       => 'required|date',
            'jumlah_barang' => 'required|integer',
            'jumlah_harga'  => 'required|integer',
            'diskon'        => 'required|integer',
            'harga_setelah_diskon'  => 'required|integer',
        ])->validate();

        $transaksi->id_barang = $validatedData['id_barang'];
        $transaksi->id_pelanggan = $validatedData['id_pelanggan'];
        $transaksi->tanggal = $validatedData['tanggal'];
        $transaksi->jumlah_barang = $validatedData['jumlah_barang'];
        $transaksi->jumlah_harga = $validatedData['jumlah_harga'];
        $transaksi->diskon = $validatedData['diskon'];
        $transaksi->harga_setelah_diskon = $validatedData['harga_setelah_diskon'];
        $transaksi->save();

        return redirect(route('daftarTransaksi'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();
        return redirect(route('daftarTransaksi'));
    }
}
