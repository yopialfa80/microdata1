<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('menu')->insert([

            [
                'instansi_id' => 1,
                'id_parent' => 0,
                'nama_menu' => 'Profile SKPD',
                'order_menu' => 1,
                'link' => '',
                'status' => 'y',
            ],
            [
                'instansi_id' => 1,
                'id_parent' => 1,
                'nama_menu' => 'Sejarah',
                'order_menu' => 7,
                'link' => '',
                'status' => 'y',
            ],
            [
                'instansi_id' => 1,
                'id_parent' => 1,
                'nama_menu' => 'Selayang Pandang',
                'order_menu' => 8,
                'link' => NULL,
                'status' => 'y',
            ],
            [
                'instansi_id' => 1,
                'id_parent' => 1,
                'nama_menu' => 'Visi, Misi dan Maklumat',
                'order_menu' => 9,
                'link' => NULL,
                'status' => 'y',
            ],
            [
                'instansi_id' => 1,
                'id_parent' => 1,
                'nama_menu' => 'Tugas dan Fungsi',
                'order_menu' => 10,
                'link' => '',
                'status' => 'y',
            ],
            [
                'instansi_id' => 68,
                'id_parent' => 0,
                'nama_menu' => 'Bidang',
                'order_menu' => Null,
                'link' => NULL,
                'status' => 'y',
            ],
            [
                'instansi_id' => 68,
                'id_parent' => 1301,
                'nama_menu' => 'Program Kerja',
                'order_menu' => '11',
                'link' => '',
                'status' => 'y',
            ],
            [
                'instansi_id' => 68,
                'id_parent' => 1307,
                'nama_menu' => 'Layanan Antar Barang Bukti',
                'order_menu' => '3',
                'link' => NULL,
                'status' => 'y',
            ],
            [
                'instansi_id' => 68,
                'id_parent' => 0,
                'nama_menu' => 'Layanan Informasi Publik',
                'order_menu' => '4',
                'link' => NULL,
                'status' => 'y',
            ],
            [
                'instansi_id' => 68,
                'id_parent' => 1307,
                'nama_menu' => 'Manual Barang Bukti',
                'order_menu' => '4',
                'link' => NULL,
                'status' => 'y',
            ],
        ]);
    }
}