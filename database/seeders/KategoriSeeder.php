<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('kategori')->insert([

            [
                'kategori' => 'Olahraga',
                'status' => 'publish',
                'instansi_id' => 1,
            ],
            [
                'kategori' => 'Daftar Jenis Perizinan',
                'status' => 'publish',
                'instansi_id' => 18,
            ],
            [
                'kategori' => 'Pengumuman',
                'status' => 'publish',
                'instansi_id' => 1,
            ],
            [
                'kategori' => 'Wawancara',
                'status' => 'publish',
                'instansi_id' => 1,
            ],
            [
                'kategori' => 'Pariwisata',
                'status' => 'publish',
                'instansi_id' => 1,
            ],
            [
                'kategori ' => 'Pendidikan',
                'status' => 'publish',
                'instansi_id' => 1,
            ],
            [
                'kategori ' => 'umum',
                'status' => 'publish',
                'instansi_id' => 1,
            ],
            [
                'kategori ' => 'Pemerintahan',
                'status' => 'publish',
                'instansi_id' => 1,
            ],
            [
                'kategori ' => 'Pelayanan',
                'status' => 'unpublish',
                'instansi_id' => 1,
            ],
            [
                'kategori ' => 'Lain-lain',
                'status' => 'Publish',
                'instansi_id' => 1,
            ],
        ]);
    }
}