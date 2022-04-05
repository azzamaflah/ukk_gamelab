<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //untuk menampilkan data barang
    public function index()
    {
        $barangs = Barang::all();
        return view('barang.index', [
            "barangs" => $barangs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //untuk menampilkan halaman create
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //untuk menyimpan data
    public function store(Request $request)
    {
        $validatedData = validator($request->all(), [
            'kode' => 'required|string|max:200',
            'nama' => 'required|string|max:200',
            'harga' => 'required|integer',
        ])->validate();

        $barang = new Barang($validatedData);
        $barang->save();

        return redirect(route('daftarBarang'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    //untuk mengedit data barang
    public function edit(Barang $barang)
    {
        return view('barang.edit', [
            'barang' => $barang
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */

    //untuk memperbarui data yang telah di ubah
    public function update(Request $request, Barang $barang)
    {
        $validatedData = validator($request->all(), [
            'kode' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'harga' => 'required|integer',
        ])->validate();

        $barang->kode = $validatedData['kode'];
        $barang->nama = $validatedData['nama'];
        $barang->harga = $validatedData['harga'];

        $barang->save();

        return redirect(route('daftarBarang'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */

    // untuk menghapus data barang
    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect(route('daftarBarang'));
    }
}
