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
        Schema::create('jurusan', function (Blueprint $table){
            $table->id('id')->primary();
            $table->foreignUuid('ruangan_id')->constrained()->cascadeOnDelete();
            $table->string('nama_jurusan');
            $table->string('deskripsi_jurusan');
            $table->integer('kode_jurusan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists('jurusan');
    }
};
