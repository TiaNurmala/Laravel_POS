<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterProdukInsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_produk_ins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('barcode');
            $table->string('nama');
            $table->integer('id_produk');
            $table->integer('jumlah');
            //relasi ke tabel profil dengan id 1
            $table->integer('id_koperasi');
            $table->string('tipe_masuk');
            $table->string('pj');
            $table->string('sub_harga');
            //tanggal disini
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_produk_ins');
    }
}
