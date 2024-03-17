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
        Schema::create('ruangan', function (Blueprint $table){
            $table->id('id')->primary();
            $table->foreignUuid('barang_id')->constrained()->cascadeOnDelete();
            $table->foreignUuid('jurusan_id')->constrained()->cascadeOnDelete();
            $table->string('nama_ruangan');
            $table->string('deskripsi_ruangan');
            $table->integer('kode_ruangan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists('ruangan');
    }
};
