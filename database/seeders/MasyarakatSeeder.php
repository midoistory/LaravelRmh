<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MasyarakatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
            DB::table('masyarakats')->insert([
            'nik'   => STR::random(16),
            'nama'  => STR::random(35),
            'username'  => STR::random(25),
            'password'  => STR::random(32),
            'telp'  => STR::random(13),
        ]);
    }
}
