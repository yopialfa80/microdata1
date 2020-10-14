<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstansiSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('instansi')->insert([
            [
                'instansi' => 'Dinas Pendidikan dan Kebudayaan',
                'instansi_order' => 3,
                'origin' => 'http://disdik.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Dinas Sosial',
                'instansi_order' => 2,
                'origin' => 'http://dinsos.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Dinas Kesehatan',
                'instansi_order' => 4,
                'origin' => 'http://dinkes.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Dinas Pekerjaan Umum dan Penataan Ruang',
                'instansi_order' => 5,
                'origin' => 'http://pupr.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Dinas Pertanian',
                'instansi_order' => 6,
                'origin' => 'http://distani.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Bagian Perekonomian',
                'instansi_order' => 7,
                'origin' => 'http://bagekonomi.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Dinas Kependudukan dan Catatan Sipil',
                'instansi_order' => 8,
                'origin' => 'http://disdukcapil.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Dinas Ketahanan Pangan',
                'instansi_order' => 9,
                'origin' => 'http://dkp.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Dinas Komunikasi dan Informatika',
                'instansi_order' => 10,
                'origin' => 'http://diskominfo.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Dinas Koperasi dan UMKM',
                'instansi_order' => 11,
                'origin' => 'http://diskop.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Dinas Lingkungan Hidup',
                'instansi_order' => 12,
                'origin' => 'http://dlh.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Dinas Perhubungan',
                'instansi_order' => 13,
                'origin' => 'http://dishub.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Dinas Perikanan',
                'instansi_order' => 14,
                'origin' => 'http://perikanan.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Dinas Perdagangan',
                'instansi_order' => 15,
                'origin' => 'http://perdagangan.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Dinas Perkebunan',
                'instansi_order' => 16,
                'origin' => '',
            ],
            [
                'instansi' => 'Dinas Perpustakaan dan Arsip Daerah',
                'instansi_order' => 17,
                'origin' => 'http://dispusip.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Dinas Pemberdayaan Masyarakat dan Kampung',
                'instansi_order' => 18,
                'origin' => 'http://dpmk.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Dinas PMPTSP',
                'instansi_order' => 19,
                'origin' => 'http://dpmptsp.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Dinas Kepemudaan dan Olahraga',
                'instansi_order' => 20,
                'origin' => 'http://diskepora.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Dinas PP, KB',
                'instansi_order' => 21,
                'origin' => 'http://dppkb.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Dinas Tenaga Kerja dan Transmigrasi',
                'instansi_order' => 22,
                'origin' => 'http://disnakertrans.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Dinas TPHP',
                'instansi_order' => 23,
                'origin' => '',
            ],
            [
                'instansi' => 'Satuan Polisi Pamong Praja',
                'instansi_order' => 24,
                'origin' => 'http://polpp.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Badan Penanggulangan Bencana Daerah',
                'instansi_order' => 25,
                'origin' => 'http://bpbd.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Bagian Kesejahteraan Rakyat\r\n',
                'instansi_order' => 26,
                'origin' => 'http://bagkesra.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Badan Kesatuan Bangsa dan Politik',
                'instansi_order' => 27,
                'origin' => 'http://kesbangpol.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Badan Kesatuan Bangsa dan Politik',
                'instansi_order' => 28,
                'origin' => 'http://kesbangpol.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Badan Kesatuan Bangsa dan Politik',
                'instansi_order' => 28,
                'origin' => '',
            ],
            [
                'instansi' => 'Pemerintahan Kecamatan',
                'instansi_order' => 29,
                'origin' => '',
            ],
            [
                'instansi' => 'Bagian Tata Pemerintahan',
                'instansi_order' => 30,
                'origin' => 'http://pemerintahan.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Badan Kepegawaian, Pendidikan, & Pelatihan',
                'instansi_order' => 31,
                'origin' => 'http://bkpp.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Badan Pengelolaan Keuangan dan Aset Daerah',
                'instansi_order' => 32,
                'origin' => 'http://bpkad.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Badan Pengelolaan Keuangan dan Aset Daerah',
                'instansi_order' => 32,
                'origin' => 'http://bpkad.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Badan Perencanaan Pembangunan Daerah',
                'instansi_order' => 33,
                'origin' => 'http://bappeda.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Badan Pendapatan Daerah',
                'instansi_order' => 34,
                'origin' => 'http://bapenda.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Bagian Hukum dan Perundang-undangan',
                'instansi_order' => 0,
                'origin' => 'http://baghukum.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Bagian Hukum dan Perundang-undangan',
                'instansi_order' => 0,
                'origin' => 'http://baghukum.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Bagian Sumber Daya Alam dan Infrastruktur',
                'instansi_order' => 0,
                'origin' => 'http://bagsda.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Bagian Organisasi',
                'instansi_order' => 0,
                'origin' => 'http://bagor.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Bagian Protokol',
                'instansi_order' => 0,
                'origin' => 'http://bagprotokol.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Bagian Keuangan',
                'instansi_order' => 0,
                'origin' => 'http://bagkeu.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak',
                'instansi_order' => 0,
                'origin' => 'http://dp3a.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Dinas Perumahan Rakyat dan Kawasan Pemukiman',
                'instansi_order' => 0,
                'origin' => 'http://dprkp.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Dinas Pariwisata dan Kebudayaan',
                'instansi_order' => 0,
                'origin' => 'http://disparbud.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Bagian Pemerintah dan Otonomi Daerah',
                'instansi_order' => 0,
                'origin' => 'http://bagotonomi.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Bagian Umum',
                'instansi_order' => 0,
                'origin' => 'http://bagumum.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Mal Pelayanan Publik',
                'instansi_order' => 0,
                'origin' => 'http://mpp.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'RSUD Menggala',
                'instansi_order' => 0,
                'origin' => 'http://rsud.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Inspektorat',
                'instansi_order' => 15,
                'origin' => 'http://inspektorat.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Bagian Pengadaan Barang dan Jasa',
                'instansi_order' => 0,
                'origin' => 'http://bpbj.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Dewan Perwakilan Rakyat',
                'instansi_order' => 0,
                'origin' => 'http://dprd.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Sekretariat Dewan Pengurus Korpri',
                'instansi_order' => 0,
                'origin' => 'http://setkorpri.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Banjar Agung',
                'instansi_order' => 0,
                'origin' => 'http://banjaragung.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Banjar Baru',
                'instansi_order' => 0,
                'origin' => 'http://banjarbaru.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Banjar Margo',
                'instansi_order' => 0,
                'origin' => 'http://banjarmargo.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Dente Teladas',
                'instansi_order' => 0,
                'origin' => 'http://denteteladas.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Gedung Aji',
                'instansi_order' => 0,
                'origin' => 'http://gedungaji.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Gedung Aji Baru',
                'instansi_order' => 0,
                'origin' => 'http://gedungajibaru.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Gedung Meneng',
                'instansi_order' => 0,
                'origin' => 'http://gedungmeneng.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Menggala',
                'instansi_order' => 0,
                'origin' => 'http://menggala.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Menggala Timur',
                'instansi_order' => 0,
                'origin' => 'http://menggalatimur.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Meraksa Aji',
                'instansi_order' => 0,
                'origin' => 'http://meraksaaji.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Penawar Aji',
                'instansi_order' => 0,
                'origin' => 'http://penawaraji.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Penawar Tama',
                'instansi_order' => 0,
                'origin' => 'http://penawartama.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Rawa Jitu Selatan',
                'instansi_order' => 0,
                'origin' => 'http://rawajituselatan.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Rawa Jitu Timur',
                'instansi_order' => 0,
                'origin' => 'http://rawajitutimur.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Rawa Pitu',
                'instansi_order' => 0,
                'origin' => 'http://rawapitu.tulangbawangkab.go.id',
            ],
            [
                'instansi' => 'Kejaksaan Negeri',
                'instansi_order' => 0,
                'origin' => 'http://kejari.tulangbawangkab.go.id',
            ],
            
        ]);
    }
}