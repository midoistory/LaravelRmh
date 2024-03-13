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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->foreignId('id_petugas')->references('id')->on('petugass');
            $table->char('nisn', 10);
            $table->foreign('nisn')->references('nisn')->on('siswas');
            $table->foreignId('id_pembayaran')->references('id')->on('pembayarans');
            $table->foreignId('id_spp')->references('id')->on('spps');
            $table->enum('status', ['Lunas', 'Belum Lunas']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
