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
        Schema::create('petugass', function (Blueprint $table) {
            $table->id('id_petugas');
            $table->string('nama_petugas', 35);
            $table->string('username', 25);
            $table->string('password', 32);
            $table->string('telp', 20);
            $table->enum('level', ['admin', 'petugas']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petugass');
    }
};
