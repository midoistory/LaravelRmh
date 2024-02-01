<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TanggapanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 3) as $index) {
            // dapatkan nilai id_pengaduan dari tabel pengaduan
            $existingPengaduanIds = DB::table('pengaduans')->pluck('id_pengaduan')->toArray();
            $existingPetugasIds = DB::table('petugass')->pluck('id_petugas')->toArray();

            // dapatkan nilai dan generate jika perlu
            $uniqueIdPengaduan = $faker->unique()->randomElement($existingPengaduanIds) ?? $faker->unique()->numerify('###########');
            $uniqueIdPetugas = $faker->unique()->randomElement($existingPetugasIds) ?? $faker->unique()->numerify('###########');
            $uniqueIdTanggapan = $faker->unique()->numerify('###########');

            DB::table('tanggapans')->insert([
                'id_tanggapan' => $uniqueIdTanggapan,
                'id_pengaduan' => $uniqueIdPengaduan,
                'tgl_tanggapan' => $faker->date,
                'id_petugas' => $uniqueIdPetugas,
                'tanggapan' => $faker->paragraph,
            ]);
        }
    }
}
