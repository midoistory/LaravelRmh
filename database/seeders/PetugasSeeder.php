<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach(range(1, 3)as $index){
            // membuat nilai id_petugas yang unik
            $uniquesIdPetugas = $faker->unique()->numerify('###########');

            DB::table('petugass')->insert([
                'id_petugas' => $uniquesIdPetugas,
                'nama_petugas' => $faker->name,
                'username' => $faker->userName,
                'password' => 'password',
                'telp' => $faker->phoneNumber,
                'level' => $faker->randomElement(['admin', 'petugas']),
            ]);
        }
    }
}
