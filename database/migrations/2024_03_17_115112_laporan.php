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
        Schema::create('laporan', function (Blueprint $table){
            $table->id('id')->primary();
            $table->string('nama_laporan');
            $table->string('keterangan_laporan');
            $table->timestamp('waktu_laporan');
            $table->string('jenis_laporan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists('laporan');
    }
};
