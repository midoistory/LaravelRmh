<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('petugass')->insert([
            'id_petugas'   => random_int(1, 16),
            'nama_petugas' => Str::random(35),
            'username'     => Str::random(25),
            'password'     => Str::random(32),
            'telp'         => Str::random(13),
            'level'        => 'admin,petugas', 
        ]);
    }
}
