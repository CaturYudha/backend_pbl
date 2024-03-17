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
            $table->string('nama_User');
            $table->string('username');
            $table->string('password_user');
            $table->string('user_admin');
            $table->string('user_kepsek');
            $table->string('user_wakasarpras');
            $table->string('user_kepro_keahlian');
            $table->string('user_guru');
            $table->string('user_murid');
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
