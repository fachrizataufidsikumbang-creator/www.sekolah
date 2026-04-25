<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pendaftars', function (Blueprint $table) {
            // idpendaftar sebagai primary key tipe integer
            $table->integer('idpendaftar')->primary();

            $table->string('namalengkap', 35);
            $table->string('email', 35);
            $table->string('no_hp', 13);
            $table->date('tgllahir');
            $table->string('alamat', 25);
            $table->string('namafakulitas', 35);
            $table->string('namaprodi', 35);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Sesuaikan nama tabel di sini juga agar bisa di-rollback
        Schema::dropIfExists('pendaftars');
    }
};