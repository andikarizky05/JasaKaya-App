<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Jalankan semua seeder utama untuk inisialisasi sistem.
     */
    public function run(): void
    {
        // Jalankan RegionSeeder terlebih dahulu
        $this->call(RegionSeeder::class);

        // Lanjutkan dengan SuperAdminSeeder (bergantung pada RegionSeeder)
        $this->call(SuperAdminSeeder::class);

        // Tambahkan seeder lainnya di sini jika ada di masa depan
        // $this->call(AnotherSeeder::class);
    }
}
