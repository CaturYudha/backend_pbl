<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function(Blueprint $table){
            $table->id('id')->primary;
            $table->string('nama_barang');
            $table->string('merek_barang');
            $table->integer('kode_barang');
            $table->integer('jml_barang');
            $table->text('deskripsi_barang');
            $table->timestamp('tgl_pembelian');
            $table->enum('status_ketersediaam', ['ada', 'tidak_ada']);
            $table->enum('status_kondisi', ['baik','rusak']);
            $table->enum('Jenis_Barang', ['sekali_Pakai', 'tidak_Sekali_Pakai']);
            $table->string('barcode_barang');
            $table->integer('harga_barang');
            $table->timestamp('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists('barang');
    }
};
