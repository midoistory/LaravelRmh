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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id('id_pembayaran');
            $table->foreignId('id_petugas')->references('id_petugas')->on('petugas');
            $table->char('nisn', 10);
            $table->foreign('nisn')->references('nisn')->on('siswa');
            $table->date('tgl_bayar');
            $table->string('bulan_bayar', 8);
            $table->string('tahun_bayar', 4);
            $table->foreignId('id_spp')->references('id_spp')->on('spp');
            $table->integer('jumlah_bayar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
