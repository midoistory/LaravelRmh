<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MasyarakatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 3) as $index) {
            // membuat nilai nik yang unik
            $uniqueNik = $faker->unique()->numerify('###########');

            DB::table('masyarakats')->insert([
                'nik' => $uniqueNik,
                'nama' => $faker->name,
                'username' => $faker->userName,
                'password' => 'password',
                'telp' => $faker->phoneNumber,
            ]);
        }
    }
}
