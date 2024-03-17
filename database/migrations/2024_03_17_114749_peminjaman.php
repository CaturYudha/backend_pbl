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
        Schema::create('peminjaman', function (Blueprint $table){
            $table->id('id')->primary();
            $table->foreignUuid('barang_id')->constrained()->cascadeOnDelete();
            $table->foreignUuid('laporan_id')->constrained()->cascadeOnDelete();
            $table->string('nama_peminjaman');
            $table->string('keterangan_peminjaman');
            $table->timestamp('waktu_peminjaman');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists('peminjaman');
    }
};
