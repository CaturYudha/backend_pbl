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
        Schema::create('user', function (Blueprint $table){
            $table->id('id')->primary();
            $table->foreignUuid('barang_id')->constrained()->cascadeOnDelete();
            $table->foreignUuid('peminjaman_id')->constrained()->cascadeOnDelete();
            $table->string('nama_User');
            $table->string('no_hp');
            $table->dateTime('tgl_buat');
            $table->datetime('tgl_edit');
            $table->string('ttd');
            $table->string('username');
            $table->string('password_user');
            $table->string('user_Admin');
            $table->string('user_Kepsek');
            $table->string('user_wakasarpras');
            $table->string('user_kepro_keahlian');
            $table->string('user_guru');
            $table->string('user_Murid');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists('user');
    }
};
