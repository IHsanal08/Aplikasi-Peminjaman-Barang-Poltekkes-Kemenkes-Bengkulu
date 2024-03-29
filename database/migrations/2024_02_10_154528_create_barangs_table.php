<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('kategori_barang');
            $table->string('kondisi_barang');
            $table->string('merk_barang');
            $table->integer('jumlah_barang');
            $table->string('tambah_foto');
            // $table->string('tambah_file');
            $table->timestamps();
            $table->softDeletes();

            // code integer untuk angka, code string untuk huruf
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
}
