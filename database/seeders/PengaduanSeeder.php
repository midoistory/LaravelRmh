<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::Create();

        foreach(range(1, 3)as $index){
            // Dapatkan nilai nik yang sudah ada dalam tabel masyarakats
            $existingMasyarakatIds = DB::table('masyarakats')->pluck('nik')->toArray();
            // membuat nilai id_pengaduan yang unik
            $uniqueNik = $faker->unique()->randomElement($existingMasyarakatIds) ?? $faker->unique()->numerify('###########');
            $uniqueIdPengaduan = $faker->unique()->numerify('###########');

            DB::table('pengaduans')->insert([
                'id_pengaduan' => $uniqueIdPengaduan,
                'tgl_pengaduan' => $faker->date,
                'nik'   =>  $uniqueNik,
                'isi_laporan'   => $faker->paragraph,
                'foto'  => $faker->imageUrl,
                'status'    => $faker->randomElement(['0', 'proses', 'selesai']),
            ]);
        }
    }
}
