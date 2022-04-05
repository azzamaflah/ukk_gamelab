<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    #melindungin data tabel
    protected $table = 'transaksi';

    #untuk mendaftarkan atribut (nama kolom) yang bisa kita isi ketika melakukan insert atau update ke database
    protected $fillable = [

        'id_barang',
        'id_pelanggan',
        'tanggal',
        'jumlah_barang',
        'jumlah_harga',
        'diskon',
        'harga_setelah_diskon',

    ];

    #untuk merelasikan data
    public function Barang()
    {
        return $this->belongsTo('App\Barang', 'id_barang');
    }

    public function Pelanggan()
    {
        return $this->belongsTo('App\Pelanggan', 'id_pelanggan');
    }
}
