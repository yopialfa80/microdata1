<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstansiSettingSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('instansi_setting')->insert([
            [
                'instansi_id' => 1,
                'nama_kepala' => 'Nasaruddin,S.H.,M.H.',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1563372023kadise.jpeg',
                'template' => '',
                'font' => 'font-4.css',
                'theme' => 'boxed',
                'style' => 'skin-4.css',
                'bg' => 'bg-12.jpg',
                'preloader' => '2.gif',
            ],
            [
                'instansi_id' => 2,
                'nama_kepala' => 'Ir. AHMAD SUKUR',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1569891338IMG_20190930_083620_HHT.jpg',
                'template' => '',
                'font' => '',
                'theme' => NULL,
                'style' => 'skin-8.css',
                'bg' => 'bg-5.jpg',
                'preloader' => '',
            ],
            [
                'instansi_id' => 33,
                'nama_kepala' => 'I NYOMAN SUTAMAWAN,SE.,MM',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1557296613IMG-20190508-WA0022.jpg',
                'template' => '',
                'font' => 'font-5.css',
                'theme' => 'boxed',
                'style' => 'skin-7.css',
                'bg' => 'bg-11.jpg',
                'preloader' => '',
            ],
            [
                'instansi_id' => 32,
                'nama_kepala' => 'DICKY SOERACHMAN, S. E.',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1561100658IMG_20190619_093817[1].jpg',
                'template' => '',
                'font' => 'font-5.css',
                'theme' => 'boxed',
                'style' => 'skin-3.css',
                'bg' => 'bg-14.jpg',
                'preloader' => '2.gif',
            ],
            [
                'instansi_id' => 31,
                'nama_kepala' => 'DR. RUSTAM EFFENDI, SE.,M.Si.Akt.,CA,CMA',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1557970246IMG_20190515_131801.JPG',
                'template' => '',
                'font' => 'font-2.css',
                'theme' => '',
                'style' => 'skin-2.css',
                'bg' => 'bg-11.jpg',
                'preloader' => '',
            ],
            [
                'instansi_id' => 30,
                'nama_kepala' => 'R. PENLIYUSLI PNR. S.E., M.H.',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1563435500kaban-2.jpg',
                'template' => '',
                'font' => 'font-1.css',
                'theme' => 'boxed',
                'style' => 'skin-10.css',
                'bg' => 'bg-13.jpg',
                'preloader' => '3.gif',
            ],
            [
                'instansi_id' => 29,
                'nama_kepala' => 'GUNAWAN',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => NULL,
                'template' => '',
                'font' => '',
                'theme' => '',
                'style' => '',
                'bg' => '',
                'preloader' => '',
            ],
            [
                'instansi_id' => 4,
                'nama_kepala' => 'M. PUNCAK STIAWAN, SP., MM',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1569461675WhatsApp-Image-2019-09-25-at-10.33.28.jpeg',
                'template' => '',
                'font' => 'font-1.css',
                'theme' => 'boxed',
                'style' => 'skin-3.css',
                'bg' => 'bg-9.jpg',
                'preloader' => '3.gif',
            ],
            [
                'instansi_id' => 3,
                'nama_kepala' => 'H. FATONI, S.Kep., M.M.',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1580961902Foto-Bati.jpeg',
                'template' => '',
                'font' => '',
                'theme' => '',
                'style' => '',
                'bg' => 'bg-2.jpg',
                'preloader' => '',
            ],
            [
                'instansi_id' => 5,
                'nama_kepala' => 'Ir. SUMARNO, M.P.',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1594611374IMG_20200710_112125_669-1.jpg',
                'template' => '',
                'font' => 'font-5.css',
                'theme' => 'boxed',
                'style' => 'skin-10.css',
                'bg' => 'bg-12.jpg',
                'preloader' => '6.gif',
            ],
            [
                'instansi_id' => 6,
                'nama_kepala' => 'AKHMAD SYAMSURI, SE., MM.',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1557978177IMG-20190516-WA0014[1].jpg',
                'template' => '',
                'font' => '',
                'theme' => '',
                'style' => '',
                'bg' => '',
                'preloader' => '',
            ],
            [
                'instansi_id' => 7,
                'nama_kepala' => 'YUSRIZAL, S.Sos., MM',
                'kabupaten' => 'TULANG BAWANG',
                'provinsi' => 'LAMPUNG',
                'foto_kepala' => '1560235195Pak-Yus-1.jpeg',
                'template' => '',
                'font' => '',
                'theme' => NULL,
                'style' => '',
                'bg' => 'bg-3.jpg',
                'preloader' => '3.gif',
            ],
            [
                'instansi_id' => 8,
                'nama_kepala' => 'Raden Mansus, S.E.',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1557891903IMG_20190515_103348.jpg',
                'template' => '',
                'font' => 'font-1.css',
                'theme' => NULL,
                'style' => 'skin-8.css',
                'bg' => 'bg-12.jpg',
                'preloader' => '',
            ],
            [
                'instansi_id' => 9,
                'nama_kepala' => 'Dedy Palwadi, AP.,M.M',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1597832432IMG-20200819-WA0024.jpg',
                'template' => 'classic',
                'font' => 'font-1.css',
                'theme' => 'boxed',
                'style' => 'skin-2.css',
                'bg' => 'bg-5.jpg',
                'preloader' => '2.gif',
            ],
            [
                'instansi_id' => 10,
                'nama_kepala' => 'BADRUDDIN, S.E., M.H.',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1594630860LOGO-KABUPATEN-TULANG-BAWANG.png',
                'template' => '',
                'font' => 'font-1.css',
                'theme' => '',
                'style' => 'skin-5.css',
                'bg' => 'bg-12.jpg',
                'preloader' => '6.gif',
            ],
            [
                'instansi_id' => 28,
                'nama_kepala' => '',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '',
                'template' => '',
                'font' => '',
                'theme' => '',
                'style' => '',
                'bg' => '',
                'preloader' => '',
            ],
            [
                'instansi_id' => 27,
                'nama_kepala' => '',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '',
                'template' => '',
                'font' => '',
                'theme' => '',
                'style' => '',
                'bg' => '',
                'preloader' => '',
            ],
            [
                'instansi_id' => 26,
                'nama_kepala' => 'HAMAMI RIA, S.Sos, MM',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1559107128IMG-20180910-WA0002.jpg',
                'template' => '',
                'font' => '',
                'theme' => '',
                'style' => '',
                'bg' => '',
                'preloader' => '',
            ],
            [
                'instansi_id' => 25,
                'nama_kepala' => 'Drs. OKTA HERI ALSYAH, M.Si',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1576114827PHOTO-KABAG-PAK-OKTA.jpg',
                'template' => '',
                'font' => 'font-4.css',
                'theme' => NULL,
                'style' => 'skin-8.css',
                'bg' => 'bg-5.jpg',
                'preloader' => '1.gif',
            ],
            [
                'instansi_id' => 24,
                'nama_kepala' => 'KANEDI, A.Pi., M.H.',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1579097387WhatsApp-Image-2020-01-14-at-14.03.47.jpeg',
                'template' => '',
                'font' => 'font-5.css',
                'theme' => 'boxed',
                'style' => 'skin-10.css',
                'bg' => 'bg-14.jpg',
                'preloader' => '3.gif',
            ],
            [
                'instansi_id' => 23,
                'nama_kepala' => 'Drs.THUHIR ALAM, M.I.P',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '15756009911557377180KASAT.jpg',
                'template' => '',
                'font' => 'font-1.css',
                'theme' => 'boxed',
                'style' => 'skin-5.css',
                'bg' => 'bg-8.jpg',
                'preloader' => '4.gif',
            ],
            [
                'instansi_id' => 22,
                'nama_kepala' => '',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '',
                'template' => '',
                'font' => '',
                'theme' => '',
                'style' => '',
                'bg' => '',
                'preloader' => '',
            ],
            [
                'instansi_id' => 21,
                'nama_kepala' => 'Ir. NURMANSYAH',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1558947204NURMANSYAH.jpg',
                'template' => '',
                'font' => '',
                'theme' => 'boxed',
                'style' => 'skin-10.css',
                'bg' => 'bg-8.jpg',
                'preloader' => '',
            ],
            [
                'instansi_id' => 11,
                'nama_kepala' => 'Ristu Irham S.pd,M.M.',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1560526261ristuirham.jpg',
                'template' => '',
                'font' => '',
                'theme' => '',
                'style' => '',
                'bg' => '',
                'preloader' => '',
            ],
            [
                'instansi_id' => 12,
                'nama_kepala' => 'Drs. HALIK SAHRIL, M.Si',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1570508483foto-pak-kadis.jpg',
                'template' => '',
                'font' => 'font-3.css',
                'theme' => 'boxed',
                'style' => 'skin-5.css',
                'bg' => 'bg-9.jpg',
                'preloader' => '5.gif',
            ],
            [
                'instansi_id' => 13,
                'nama_kepala' => 'RIA KHOLDI, SE.,M.M.',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1561701819Rio_holdi[1].jpg',
                'template' => '',
                'font' => '',
                'theme' => '',
                'style' => '',
                'bg' => '',
                'preloader' => '',
            ],
            [
                'instansi_id' => 14,
                'nama_kepala' => 'Drs. AMRI, M.IP',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1562646011IMG-20190415-WA0017.jpg',
                'template' => '',
                'font' => '',
                'theme' => '',
                'style' => '',
                'bg' => '',
                'preloader' => '',
            ],
            [
                'instansi_id' => 15,
                'nama_kepala' => 'Ir.SUMARNO,M.P.',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => NULL,
                'template' => '',
                'font' => '',
                'theme' => '',
                'style' => '',
                'bg' => '',
                'preloader' => '',
            ],
            [
                'instansi_id' => 20,
                'nama_kepala' => 'dr.HERRY NOVRIZAL',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1560840169WhatsApp-Image-2019-06-18-at-08.38.57.jpeg',
                'template' => '',
                'font' => '',
                'theme' => 'boxed',
                'style' => 'skin-1.css',
                'bg' => '',
                'preloader' => '',
            ],
            [
                'instansi_id' => 19,
                'nama_kepala' => 'Dra. Karmini Utari, M.H.',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1576207120bu-yeni.jpg',
                'template' => '',
                'font' => '',
                'theme' => '',
                'style' => '',
                'bg' => 'bg-13.jpg',
                'preloader' => '6.gif',
            ],
            [
                'instansi_id' => 18,
                'nama_kepala' => 'Dra.LUSIANA, M.A.P',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1560232938Ibu-Kadis.jpeg',
                'template' => '',
                'font' => 'font-4.css',
                'theme' => 'boxed',
                'style' => 'skin-8.css',
                'bg' => 'bg-4.jpg',
                'preloader' => '3.gif',
            ],
            [
                'instansi_id' => 17,
                'nama_kepala' => 'Drs. Yen Dahren, M.A.P',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1581902688WhatsApp-Image-2020-02-15-at-21.15.23.jpeg',
                'template' => '',
                'font' => 'font-2.css',
                'theme' => 'boxed',
                'style' => 'skin-8.css',
                'bg' => 'bg-13.jpg',
                'preloader' => '1.gif',
            ],
            //ssss
            [
                'instansi_id' => 16,
                'nama_kepala' => 'SYARIF ALI, SH.',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1557894601FOTO-KADIS-PERPUSTAKAAN.SYARIF-ALI,SH..jpg',
                'template' => '',
                'font' => '',
                'theme' => '',
                'style' => '',
                'bg' => '',
                'preloader' => '',
            ],
            [
                'instansi_id' => 43,
                'nama_kepala' => 'Drs. ISMED, M.H',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1557992947IMG-20190516-WA0028.jpg',
                'template' => '',
                'font' => '',
                'theme' => '',
                'style' => 'kin-4.css',
                'bg' => 'bg-11.jpg',
                'preloader' => '3.gif',
            ],
            [
                'instansi_id' => 42,
                'nama_kepala' => 'Ir. MEILAN AZIZ, M.M.',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1560396032IMG-20190613-WA0008.jpg',
                'template' => '',
                'font' => '',
                'theme' => '',
                'style' => '',
                'bg' => 'bg-4.jpg',
                'preloader' => '3.gif',
            ],
            [
                'instansi_id' => 41,
                'nama_kepala' => 'Dra. DESIA KUSUMAYUDA, M, Si',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1570503021WhatsApp-Image-2019-10-08-at-09.46.05.jpeg',
                'template' => '',
                'font' => 'font-2.css',
                'theme' => 'boxed',
                'style' => 'skin-1.css',
                'bg' => 'bg-13.jpg',
                'preloader' => '3.gif',
            ],
            [
                'instansi_id' => 36,
                'nama_kepala' => 'ANUARI,SH,MH,M.Si',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1562129534IMG_20190703_114943.JPG',
                'template' => '',
                'font' => '',
                'theme' => 'boxed',
                'style' => '',
                'bg' => 'bg-6.jpg',
                'preloader' => '',
            ],
            [
                'instansi_id' => 37,
                'nama_kepala' => 'ANIS ANDRIYANTO, S.E., M.M.',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1598841560IMG_20200831_092511.jpg',
                'template' => '',
                'font' => '',
                'theme' => '',
                'style' => '',
                'bg' => '',
                'preloader' => '',
            ],
            [
                'instansi_id' => 38,
                'nama_kepala' => 'Ir. Nuria Yunita, M.M.',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1563265168putu-ibu.jpg',
                'template' => '',
                'font' => '',
                'theme' => '',
                'style' => '',
                'bg' => '',
                'preloader' => '',
            ],
            [
                'instansi_id' => 39,
                'nama_kepala' => 'ARIANTO, S.STP',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1599539379WhatsApp-Image-2020-09-08-at-10.22.52.jpeg',
                'template' => '',
                'font' => '',
                'theme' => 'boxed',
                'style' => 'skin-8.css',
                'bg' => 'bg-5.jpg',
                'preloader' => '3.gif',
            ],
            [
                'instansi_id' => 40,
                'nama_kepala' => 'Tri Yogha Adi Susatya,S.P.,M.M',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1566183888WhatsApp-Image-2019-07-17-at-12.45.43-PM.jpeg',
                'template' => '',
                'font' => '',
                'theme' => '',
                'style' => '',
                'bg' => '',
                'preloader' => '',
            ],
            [
                'instansi_id' => 44,
                'nama_kepala' => 'Taufik Jaya',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1578990017IMG_20200102_164739.jpg',
                'template' => '',
                'font' => '',
                'theme' => '',
                'style' => '',
                'bg' => '',
                'preloader' => '',
            ],
            [
                'instansi_id' => 45,
                'nama_kepala' => 'A K M A L',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1557452772IMG_5618.JPG',
                'template' => '',
                'font' => '',
                'theme' => 'boxed',
                'style' => 'skin-2.css',
                'bg' => 'bg-9.jpg',
                'preloader' => '4.gif',
            ],
            [
                'instansi_id' => 46,
                'nama_kepala' => 'Hj. WINARTI, S.E., M.H',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '160224515016R-Ibu-Bendera.jpg',
                'template' => '',
                'font' => 'font-4.css',
                'theme' => 'boxed',
                'style' => 'skin-10.css',
                'bg' => 'bg-6.jpg',
                'preloader' => '2.gif',
            ],
            [
                'instansi_id' => 47,
                'nama_kepala' => 'dr. H. LUKMAN PURA, Sp.PD-KGH.,MHSM.,FINASIM',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1560829434WhatsApp-Image-2019-06-17-at-18.19.38.jpeg',
                'template' => '',
                'font' => 'font-1.css',
                'theme' => NULL,
                'style' => 'skin-3.css',
                'bg' => 'bg-2.jpg',
                'preloader' => '3.gif',
            ],
            [
                'instansi_id' => 49,
                'nama_kepala' => 'Dr. PAHADA HIDAYAT, S.H.,M.H',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1557808223inspektur.jpg',
                'template' => '',
                'font' => 'font-3.css',
                'theme' => NULL,
                'style' => 'skin-2.css',
                'bg' => 'bg-12.jpg',
                'preloader' => '2.gif',
            ],
            [
                'instansi_id' => 50,
                'nama_kepala' => 'NANAN WISNAGA, S.Sos., M.M.',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1557733866162639_488618617143_6068760_n.jpg',
                'template' => '',
                'font' => '',
                'theme' => 'boxed',
                'style' => 'skin-2.css',
                'bg' => 'bg-9.jpg',
                'preloader' => '6.gif',
            ],
            [
                'instansi_id' => 51,
                'nama_kepala' => 'SOPI\'I, S.H.',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1594481694SOPI\'I,-S.H.jpg',
                'template' => '',
                'font' => '',
                'theme' => 'boxed',
                'style' => 'skin-2.css',
                'bg' => 'bg-1.jpg',
                'preloader' => '4.gif',
            ],
            [
                'instansi_id' => 52,
                'nama_kepala' => 'M U H A R T A',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => NULL,
                'template' => '',
                'font' => '',
                'theme' => '',
                'style' => 'skin-2.css',
                'bg' => '',
                'preloader' => '4.gif',
            ],
            [
                'instansi_id' => 53,
                'nama_kepala' => 'L. FANDHI AHMAD ZIA S., S.STP., M.Si',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1579742962IMG-20191001-WA0016[1].jpg',
                'template' => 'modern',
                'font' => 'font-1.css',
                'theme' => NULL,
                'style' => 'skin-2.css',
                'bg' => 'bg-3.jpg',
                'preloader' => '',
            ],
            [
                'instansi_id' => 54,
                'nama_kepala' => 'SUTIKNO, S.IP.,M.IP',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1577771490cmt.jpg',
                'template' => 'modern',
                'font' => '',
                'theme' => 'boxed',
                'style' => 'skin-10.css',
                'bg' => '',
                'preloader' => '2.gif',
            ],
            [
                'instansi_id' => 55,
                'nama_kepala' => 'Anonymous',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => NULL,
                'template' => 'modern',
                'font' => '',
                'theme' => '',
                'style' => 'skin-3.css',
                'bg' => '',
                'preloader' => '',
            ],
            [
                'instansi_id' => 56,
                'nama_kepala' => 'SURATMAN,SE',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1579521318pak-camat-foto.jpeg',
                'template' => 'classic',
                'font' => '',
                'theme' => NULL,
                'style' => 'skin-1.css',
                'bg' => 'bg-9.jpg',
                'preloader' => '6.gif',
            ],
            [
                'instansi_id' => 57,
                'nama_kepala' => 'Anonymous',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => NULL,
                'template' => 'modern',
                'font' => '',
                'theme' => '',
                'style' => 'skin-6.css',
                'bg' => 'bg-8.jpg',
                'preloader' => '',
            ],
            [
                'instansi_id' => 58,
                'nama_kepala' => 'Sutiyo S.Pd., M.Pd',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => NULL,
                'template' => 'modern',
                'font' => '',
                'theme' => '',
                'style' => 'skin-10.css',
                'bg' => '',
                'preloader' => '',
            ],
            [
                'instansi_id' => 59,
                'nama_kepala' => 'SUDIRMAN, S.H',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1601440272IMG-20200614-WA0000.jpg',
                'template' => 'modern',
                'font' => '',
                'theme' => '',
                'style' => 'kin-1.css',
                'bg' => '',
                'preloader' => '3.gif',
            ],
            [
                'instansi_id' => 60,
                'nama_kepala' => 'Sudirman,SH.MM',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => NULL,
                'template' => 'modern',
                'font' => '',
                'theme' => '',
                'style' => 'skin-6.css',
                'bg' => '',
                'preloader' => '',
            ],
            [
                'instansi_id' => 61,
                'nama_kepala' => 'AHD ROZI, S.E.',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1598536132IMG_20200827_204134.jpg',
                'template' => 'modern',
                'font' => '',
                'theme' => '',
                'style' => 'skin-9.css',
                'bg' => 'bg-13.jpg',
                'preloader' => '1.gif',
            ],
            [
                'instansi_id' => 62,
                'nama_kepala' => 'ERMANSYAH.,SE.,MH.',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1579489595WhatsApp-Image-2020-01-20-at-10.02.55.jpeg',
                'template' => 'modern',
                'font' => '',
                'theme' => '',
                'style' => 'skin-6.css',
                'bg' => '',
                'preloader' => '',
            ],
            [
                'instansi_id' => 63,
                'nama_kepala' => 'Anonymous',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => NULL,
                'template' => 'modern',
                'font' => '',
                'theme' => '',
                'style' => 'skin-1.css',
                'bg' => '',
                'preloader' => '',
            ],
            [
                'instansi_id' => 64,
                'nama_kepala' => 'Suwardi S.Pd',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => NULL,
                'template' => 'modern',
                'font' => '',
                'theme' => '',
                'style' => 'skin-5.css',
                'bg' => '',
                'preloader' => '',
            ],
            [
                'instansi_id' => 65,
                'nama_kepala' => 'Anonymous',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => NULL,
                'template' => 'modern',
                'font' => '',
                'theme' => '',
                'style' => 'skin-10.css',
                'bg' => '',
                'preloader' => '',
            ],
            [
                'instansi_id' => 66,
                'nama_kepala' => 'H.Amad S.Pd, M.Pd',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => NULL,
                'template' => 'modern',
                'font' => '',
                'theme' => '',
                'style' => 'skin-6.css',
                'bg' => '',
                'preloader' => '',
            ],
            [
                'instansi_id' => 67,
                'nama_kepala' => 'I Putu Dada, S. Kep',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1599022821IMG-20200902-WA0014.jpg',
                'template' => 'modern',
                'font' => '',
                'theme' => '',
                'style' => 'kin-4.css',
                'bg' => '',
                'preloader' => '',
            ],
            [
                'instansi_id' => 68,
                'nama_kepala' => '\"DYAH AMBARWATI, S.H., M.H.\"',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '158351377820200306_202955.jpg',
                'template' => 'modern',
                'font' => '',
                'theme' => 'boxed',
                'style' => 'skin-3.css',
                'bg' => 'bg-2.jpg',
                'preloader' => '3.gif',
            ],
        ]);
    }
}