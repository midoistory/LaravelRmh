<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach(range(1,3)as $index){
            //membuat nilai id_spp yang unik
            $uniqueIdSpp = $faker->unique()->numerify('###########');

            DB::table('spp')->insert([
                'id_spp' => $uniqueIdSpp,
                'tahun' => $faker->numberBetween(2000, 2024),
                'nominal'   =>$faker->randomFloat(1, 150000, 300000),
            ]);
        }
    }
}
