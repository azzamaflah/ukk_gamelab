<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('id_barang');
            $table->integer('id_pelanggan');
            $table->date('tanggal');
            $table->integer('jumlah_barang');
            $table->integer('jumlah_harga');
            $table->integer('diskon');
            $table->integer('harga_setelah_diskon');
        });
    }
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
