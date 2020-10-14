<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('artikels')->insert([
            [
                'user_id' => 0,
                'kategori_id' => 10,
                'headlines' => 0,
                'utama' => 1,
                'judul_artikel' => 'Surat Edaran Dirjen Dikdasmen Tentang Kualitas Data Pokok Pendidikan Dasar dan Menengah',
                'caption' => '',
                'slug' => 'surat-edaran-dirjen-dikdasmen-tentang-kualitas-data-pokok-pendidikan-dasar-dan-menengah',
                'isi_artikel' => '<p style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 0px 0px 10px; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif; font-size: 14px; text-align: justify;">
                Assalamualaikum warahmatullahi wabarakatuh</p>
            <p style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 0px 0px 10px; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif; font-size: 14px; text-align: justify;">
                <span style="font-size:14px;">Dalam rangka untuk terus meningkatkan 
            kualitas data Dapodik, Direktur Jenderal Pendidikan Dasar Dan Menengah 
            mengeluarkan Surat Edaran Nomor 0993/D/PR/2018 tentang Kualitas Data 
            Pokok Pendidikan Dasar dan Menengah. Adapun isi Surat Edaran tersebut 
            secara garis besar adalah sebagai berikut:</span></p>
            <ol style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin-top: 0px; margin-bottom: 10px; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif; font-size: 14px; text-align: justify;"><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent;">
                    <span style="font-size:14px;">Dinas Pendidikan Provinsi/Kab/Kota 
            secara aktif memantau progress pengiriman dapodik melalui laman 
            http://dapo.dikdasmen.kemdikbud.go.id/progres.</span></li><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent;">
                    <span style="font-size:14px;">Dinas Pendidikan Provinsi/Kab/Kota 
            melakukan verifikasi atas kelengkapan data yang di inputkan pada 
            Dapodik, dan jika hasil verifikasi terdapat sekolah sudah tidak 
            beroperasi dan tidak sinkronisasi 3 semester berturut-turut maka 
            dilakukan penghapusan dari sistem Dapodik.</span></li><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent;">
                    <span style="font-size:14px;">Apabila dalam pelaksanaan BOS terdapat 
            pelanggaran yang dapat merugikan negara, sekolah dan/atau peserta didik,
             maka oknum yang bersangkutan diberikan sanksi oleh aparat/pejabat yang 
            berwenang.</span></li><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent;">
                    <span style="font-size:14px;">Dinas Pendidikan Provinsi/Kab/Kota dapat
             melakukan pelatihan, bimbingan teknis, sosialisasi dan layanan teknis 
            Aplikasi Dapodikdasmen.</span></li><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent;">
                    <span style="font-size:14px;">Dalam hal sekolah selama 3 (tiga) tahun 
            berturut-turut memiliki siswa kurang dari 60 (enam puluh), dapat 
            dilakukan penggabungan dengan sekolah sederajat terdekat.</span></li><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent;">
                    <span style="font-size:14px;">Untuk menjamin kualitas layanan 
            pendidikan dasar dan menengah, mulai Tahun Anggaran 2020 dana BOS hanya 
            akan dialokasikan bagi Satuan Pendidikan yang sudah terakreditasi.</span></li></ol>
            <p style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 0px 0px 10px; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif; font-size: 14px; text-align: justify;">
                <span style="font-size:14px;">Demikian informasi yang kami sampaikan, 
            file surat edaran selengkapnya dapat diunduh pada lampiran berita ini. 
            Atas perhatian dan kerja sama Bapak/Ibu, kami ucapkan terima kasih.</span></p>
            <p style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 0px 0px 10px; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif; font-size: 14px; text-align: justify;">
                <br style="box-sizing: border-box; -webkit-tap-highlight-color: transparent;">
                <span style="font-size:14px;">Wassalamualaikum warahmatullahi wabarakatuh.</span></p>
            <p style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 0px 0px 10px; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif; font-size: 14px; text-align: justify;">
                Salam Satu Data,</p>
            <p style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 0px 0px 10px; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif; font-size: 14px; text-align: justify;">
                <br style="box-sizing: border-box; -webkit-tap-highlight-color: transparent;">
                <span style="font-size:14px;"><span style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; font-weight: 700;">Admin Dapodikdasmen</span></span></p>
            <p style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 0px 0px 10px; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif; font-size: 14px; text-align: justify;">
                 </p>
            <p style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 0px 0px 10px; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif; font-size: 14px; text-align: justify;">
                <span style="font-size:14px;"><span style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; font-weight: 700;">LAMPIRAN</span></span></p>
            <p style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 0px 0px 10px; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif; font-size: 14px; text-align: justify;">
                <span style="font-size:14px;"><a href="http://dapodikdasmen.data.kemdikbud.go.id/SE%20Kualitas%20Data%20Pokok%20Pendidikan%20Dasar%20dan%20Menengah.pdf" style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; background-color: transparent; color: rgb(0, 150, 136); text-decoration-line: none;" target="_blank">Unduh Surat Edaran Dirjen Dikdasmen Tentang Kualitas Data Pokok Pendidikan Dasar dan Menengah</a></span></p>
            <p style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 0px 0px 10px; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif; font-size: 14px; text-align: justify;">
                 </p>
            <p style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 0px 0px 10px; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif; font-size: 14px; text-align: justify;">
                <em><strong><span style="font-size:14px;">Sumber info : </span><span style="color: rgb(34, 34, 34); font-family: Arial, Verdana, sans-serif; font-size: 12px;">http://dapo.dikdasmen.kemdikbud.go.id/berita/surat-edaran-dirjen-dikdasmen-tentang-kualitas-data-pokok-pendidikan-dasar-dan-menengah</span></strong></em></p>',
                'img' => '1557844562surat-2Bedaran.jpg',
                'metakey' => 'surat edaran',
                'metadesc' => 'surat edran dirjen dikdasmen',
                'tanggal' => '2019-05-14',
                'view' => 720,
                'tag' => 'LAIN-LAIN',
                'parent' => 0,
                'created_at' => '2019-03-28 08:18:47',
                'updated_at' => '2019-03-28 08:18:47',
                'instansi_id' => 1,
            ],
            [
                'user_id' => 0,
                'kategori_id' => 3,
                'headlines' => 0,
                'utama' => 1,
                'judul_artikel' => 'Rilis Patch Pembaruan Aplikasi Dapodikdasmen Versi 2019.e',
                'caption' => '',
                'slug' => 'rilis-patch-pembaruan-aplikasi-dapodikdasmen-versi-2019e',
                'isi_artikel' => '<p><p></p><p></p><p><span style="font-size:16px;">Assalamualaikum warahmatullahi wabarakatuh</span>
                </p><p></p><p style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 0px 0px 10px; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif; font-size: 14px; text-align: justify;">
                    <span style="font-size:16px;">Sebagai tindaklanjut laporan adanya 
                beberapa bug/kesalahan aplikasi pada Versi 2019.d, maka telah dilakukan 
                perbaikan-perbaikan dan kembali saat ini dirilis Pembaruan Aplikasi 
                Dapodikdasmen Versi 2019.e. Bagi sekolah yang menggunakan Aplikasi 
                Dapodikdasmen Versi 2019.c dan Aplikasi Dapodikdasmen Versi 2019.d, 
                dapat melakukan pembaruan dengan mengunduh dan menginstall&nbsp;<span style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; font-weight: 700;">Patch Versi 2019.e</span>&nbsp;atau melalui&nbsp;<span style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; font-weight: 700;">Pembaruan secara Online</span>. DISARANKAN TELAH MELAKUKAN SINKRONISASI TERLEBIH DAHULU sebelum melakukan pembaruan ke Versi 2019.e.</span></p>
                <p style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 0px 0px 10px; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif; font-size: 14px; text-align: justify;">
                    <span style="font-size:16px;">Tata cara melakukan pembaruan Aplikasi Dapodikdasmen Versi 2019.e sebagai berikut:</span></p>
                <p style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 0px 0px 10px; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif; font-size: 14px; padding-left: 30px;">
                    <span style="font-size:16px;">1. Unduh file PATCH 2019.e pada menu unduhan laman dapo.dikdasmen.kemdikbud.go.id atau pada bagian Lampiran pada berita ini.</span></p>
                <p style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 0px 0px 10px; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif; font-size: 14px; padding-left: 30px;">
                    <span style="font-size:16px;">2. Jika&nbsp;sudah terinstall Aplikasi Dapodikdasmen Versi 2019.c atau Versi 2019.d&nbsp;maka&nbsp;<span style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; font-weight: 700;">dapat langsung melakukan installasi Patch Versi 2019.e tanpa harus melakukan Uninstall&nbsp;Aplikasi Dapodikdasmen.</span></span></p>
                <p style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 0px 0px 10px; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif; font-size: 14px; padding-left: 30px;">
                    <span style="font-size:16px;">3. Lakukan installasi sampai dengan selesai.</span></p>
                <p style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 0px 0px 10px; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif; font-size: 14px; padding-left: 30px;">
                    <span style="font-size:16px;">4. Lakukan refresh (Ctrl + F5).</span></p>
                <p style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 0px 0px 10px; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif; font-size: 14px; text-align: justify;">
                    &nbsp;</p>
                <p style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 0px 0px 10px; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif; font-size: 14px;">
                    <span style="font-size:16px;">Tata cara&nbsp;melakukan pembaruan secara Online sebagai berikut:</span></p>
                <ol style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin-top: 0px; margin-bottom: 10px; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif; font-size: 14px;"><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent;">
                        <span style="font-size:16px;">Pastikan komputer terkoneksi internet.</span></li><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent;">
                        <span style="font-size:16px;">Silahkan login pada Aplikasi Dapodikdasmen Versi 2019.c atau Versi 2019.d.</span></li><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent;">
                        <span style="font-size:16px;">Masuk pada menu Pengaturan, Cek Pembaruan Aplikasi, klik pada tombol “Cek Pembaruan”.</span></li><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent;">
                        <span style="font-size:16px;">Maka ditampilkan keterangan bahwa 
                Pembaruan Tersedia. Pembaruan Tersedia (Dapodik 2019.e) Apakah Anda 
                ingin melanjutkan? Pastikan tidak menutup jendela browser sebelum proses
                 pembaruan selesai!</span></li><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent;">
                        <span style="font-size:16px;">Klik tombol “Lanjutkan”, maka sistem akan melakukan update pembaruan.</span></li><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent;">
                        <span style="font-size:16px;">Setelah proses selesai, klik tombol “Muat ulang halaman sekarang”.</span></li><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent;">
                        <span style="font-size:16px;">Jika diperlukan, lakukan refresh (Ctrl + F5).</span></li></ol>
                <p style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 0px 0px 10px; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif; font-size: 14px; text-align: justify;">
                    <br style="box-sizing: border-box; -webkit-tap-highlight-color: transparent;">
                    <span style="font-size:16px;">Berikut adalah daftar pembaruan pada Aplikasi Dapodikdasmen Versi 2019.e:</span></p>
                <ul style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin-top: 0px; margin-bottom: 10px; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif; font-size: 14px;"><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; text-align: justify;">
                        <span style="font-size:16px;"><span style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; color: rgb(0, 128, 0);"><span style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; font-weight: 700;">[Perbaikan]</span></span>&nbsp;Perbaikan&nbsp;<em style="box-sizing: border-box; -webkit-tap-highlight-color: transparent;">bugs</em>&nbsp;ketika menampilkan GTK pada Manajemen Pengguna</span></li><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; text-align: justify;">
                        <span style="font-size:16px;"><span style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; color: rgb(0, 128, 0);"><span style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; font-weight: 700;">[Perbaikan]</span></span>&nbsp;Perbaikan&nbsp;<em style="box-sizing: border-box; -webkit-tap-highlight-color: transparent;">bugs</em>&nbsp;pengisian lintang dan bujur pada menu DUDI</span></li><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; text-align: justify;">
                        <span style="font-size:16px;"><span style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; color: rgb(0, 128, 0);"><span style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; font-weight: 700;">[Perbaikan]</span></span>&nbsp;Perbaikan&nbsp;<em style="box-sizing: border-box; -webkit-tap-highlight-color: transparent;">bugs</em>&nbsp;pada rombongan belajar untuk tingkat TKLB pada bentuk pendidikan SLB</span></li><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; text-align: justify;">
                        <span style="font-size:16px;"><span style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; color: rgb(0, 128, 0);"><span style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; font-weight: 700;">[Perbaikan]</span></span>&nbsp;Perbaikan&nbsp;<em style="box-sizing: border-box; -webkit-tap-highlight-color: transparent;">bugs</em>&nbsp;validasi pada saat mendeteksi No Kitas untuk peserta didik warga negara asing</span></li><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; text-align: justify;">
                        <span style="font-size:16px;"><span style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; color: rgb(0, 128, 0);"><span style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; font-weight: 700;">[Perbaikan]</span></span>&nbsp;Perbaikan&nbsp;<em style="box-sizing: border-box; -webkit-tap-highlight-color: transparent;">bugs</em>&nbsp;sinkronisasi untuk pengiriman pada kelompok mata pelajaran muatan sekolah</span></li><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; text-align: justify;">
                        <span style="font-size:16px;"><span style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; color: rgb(0, 128, 0);"><span style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; font-weight: 700;">[Perbaikan]</span>&nbsp;</span>Perbaikan&nbsp;<em style="box-sizing: border-box; -webkit-tap-highlight-color: transparent;">bugs</em>&nbsp;pada saat menampilkan daftar peserta didik</span></li><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; text-align: justify;">
                        <span style="font-size:16px;"><span style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; color: rgb(0, 128, 0);"><span style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; font-weight: 700;">[Perbaikan]</span></span>&nbsp;Perbaikan nama kelompok mata pelajaran Ekstensi Team Teaching (Kejuruan) menjadi Kejuruan pada profil GTK</span></li><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; text-align: justify;">
                        <span style="font-size:16px;"><span style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; color: rgb(0, 128, 0);"><span style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; font-weight: 700;">[Perbaikan]</span></span>&nbsp;Perbaikan validasi untuk mengecek rasio rombel terhadap jumlah peserta didik</span></li><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; text-align: justify;">
                        <span style="font-size:16px;"><span style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; color: rgb(0, 128, 0);"><span style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; font-weight: 700;">[Perbaikan]</span></span>&nbsp;Perbaikan validasi NIK khusus untuk peserta didik yang tinggal di panti asuhan tidak diwajibkan</span></li><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; text-align: justify;">
                        <span style="font-size:16px;"><span style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; color: rgb(0, 128, 0);"><span style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; font-weight: 700;">[Perbaikan]</span></span>&nbsp;Perbaikan&nbsp;<em style="box-sizing: border-box; -webkit-tap-highlight-color: transparent;">security</em>&nbsp;sinkronisasi</span></li><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; text-align: justify;">
                        <span style="font-size:16px;"><span style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; color: rgb(0, 0, 255);"><span style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; font-weight: 700;">[Pembaruan]</span></span>&nbsp;Penambahan validasi untuk medeteksi nama mata pelajaran pada pembalajaran jika lebih dari 50 karakter</span></li></ul>
                <p style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 0px 0px 10px; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif; font-size: 14px; text-align: justify;">
                    <br style="box-sizing: border-box; -webkit-tap-highlight-color: transparent;">
                    <span style="font-size:16px;">Demikian informasi yang kami sampaikan. Atas perhatian dan kerja sama Bapak/Ibu, kami ucapkan terima kasih.</span></p>
                <p style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 0px 0px 10px; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif; font-size: 14px; text-align: justify;">
                    <br style="box-sizing: border-box; -webkit-tap-highlight-color: transparent;">
                    <span style="font-size:16px;">Wassalamualaikum warahmatullahi wabarakatuh.<br style="box-sizing: border-box; -webkit-tap-highlight-color: transparent;">
                    &nbsp;</span><br style="box-sizing: border-box; -webkit-tap-highlight-color: transparent;">
                    &nbsp;</p>
                <p style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 0px 0px 10px; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif; font-size: 14px; text-align: justify;">
                    <span style="font-size:16px;">Salam Satu Data,</span><br><br></p><p></p><p style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 0px 0px 10px; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif; font-size: 14px; text-align: justify;">
                    <span style="font-weight: 700; text-decoration-line: underline; font-size: 16px;">LAMPIRAN:</span></p>
                <p style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 0px 0px 10px; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif; font-size: 14px; text-align: justify;">
                    <span style="font-size:16px;"><span style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; font-weight: 700;">Patch Aplikasi Dapodikdasmen Versi 2019.e</span></span></p>
                <ul style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin-top: 0px; margin-bottom: 10px; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif; font-size: 14px;"><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; text-align: justify;">
                        <span style="font-size:16px;"><a href="http://dapo.dikdasmen.kemdikbud.go.id/files/app/Patch_Dapodik_2019.e.exe" style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; background-color: transparent; color: rgb(0, 150, 136); text-decoration-line: none;" target="_blank">Link unduhan ke-1</a></span></li><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; text-align: justify;">
                        <span style="font-size:16px;"><a href="https://www.filesupload.org/40f123ffb69ef567327c0e6ec8a0bf71/Patch_Dapodik_2019.e.exe" style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; background-color: transparent; color: rgb(0, 150, 136); text-decoration-line: none;" target="_blank">Link unduhan ke-2</a></span></li><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; text-align: justify;">
                        <span style="font-size:16px;"><a href="https://1fichier.com/?xmhjpjk316raasegr7qf&amp;af=62851" style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; background-color: transparent; color: rgb(0, 150, 136); text-decoration-line: none;" target="_blank">Link unduhan ke-3</a></span></li><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; text-align: justify;">
                        <span style="font-size:16px;"><a href="http://www.share-online.biz/dl/NNA2HSPP8Q" style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; background-color: transparent; color: rgb(0, 150, 136); text-decoration-line: none;" target="_blank">Link unduhan ke-4</a></span></li><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; text-align: justify;">
                        <span style="font-size:16px;"><a href="https://www116.zippyshare.com/v/ltPXKfBA/file.html" style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; background-color: transparent; color: rgb(0, 150, 136); text-decoration-line: none;" target="_blank">Link unduhan ke-5</a></span></li><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; text-align: justify;">
                        <span style="font-size:16px;"><a href="https://www.oboom.com/NW2IBRUW" style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; background-color: transparent; color: rgb(0, 150, 136); text-decoration-line: none;" target="_blank">Link unduhan ke-6</a></span></li><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; text-align: justify;">
                        <span style="font-size:16px;"><a href="https://filerio.in/pawj2v9b7zum" style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; background-color: transparent; color: rgb(0, 150, 136); text-decoration-line: none;" target="_blank">Link unduhan ke-7</a></span></li><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; text-align: justify;">
                        <span style="font-size:16px;"><a href="https://filerio.in/pawj2v9b7zum" style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; background-color: transparent; color: rgb(0, 150, 136); text-decoration-line: none;" target="_blank">Link unduhan ke-8</a></span></li><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; text-align: justify;">
                        <span style="font-size:16px;"><a href="https://openload.co/f/PhccABshSHc/Patch_Dapodik_2019.e.exe" style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; background-color: transparent; color: rgb(0, 150, 136); text-decoration-line: none;" target="_blank">Link unduhan ke-9</a></span></li><li style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; text-align: justify;">
                        <span style="font-size:16px;"><a href="https://openload.co/f/PhccABshSHc/Patch_Dapodik_2019.e.exe" style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; background-color: transparent; color: rgb(0, 150, 136); text-decoration-line: none;" target="_blank">Link unduhan ke-10</a></span><br><br><strong><span style="font-size:16px;">Sumber berita :&nbsp;<a href="http://dapo.dikdasmen.kemdikbud.go.id/berita/rilis-patch-pembaruan-aplikasi-dapodikdasmen-versi-2019-e">http://dapo.dikdasmen.kemdikbud.go.id/berita/rilis-patch-pembaruan-aplikasi-dapodikdasmen-versi-2019-e</a></span></strong></li></ul></p>',
                'img' => '1557814210dapo.jpg',
                'metakey' => 'berita',
                'metadesc' => 'berita',
                'tanggal' => '2019-05-14',
                'view' => 121,
                'tag' => 'Nasional,pemerintahan',
                'parent' => 0,
                'created_at' => '2019-03-30 06:56:07',
                'updated_at' => '2019-03-30 06:56:07',
                'instansi_id' => 1,
            ],
            [
                'user_id' => 0,
                'kategori_id' => 22,
                'headlines' => 0,
                'utama' => 10,
                'judul_artikel' => 'Bupati Winarti Hibur Korban Bencana Angin Puting Beliung di Kampung Mahabang Kecamatan Dente Teladas',
                'caption' => 'Tulang Bawang : Bupati Tulang Bawang Hj. Winarti, SE,MH Kunjungi Korban Bencana Angin Puting Beliung di Kampung Mahabang Kecamatan Dente teladas',
                'slug' => 'bupati-winarti-hibur-korban-bencana-angin-puting-beliung-di-kampung-mahabang-kecamatan-dente-teladas',
                'isi_artikel' => '<p>Dalam kunjungannya bupati gotong royong yang ikut dalam rombongan 
                sejumlah kepala SKPD dan asisten menyampaikan Atas nama pribadi beserta 
                jajaran Pemerintah Kabupaten Tulang Bawang, saya mengucapkan “sangat 
                prihatin atas musibah ini, saya ada bersama saudaraku semua disaat 
                saudaraku semua mendapat kesusahan” ujarnya saat menyapa warga.</p>
                <p>Bupati mengatakan bahwa ini musibah ada hikmahnya mari semua kita 
                bergotong royong. Saling bahu membahu mengatasi dan secepatnya harus 
                kembali normal kehidupan di Kampung Mahabang ini.</p>
                <p>Dalam kunjungannya tersebut juga membawa bantuan untuk membantu meringankan&nbsp; penderitaan warganya.<br>
                Berupa :<br>
                – sembako berupa beras, mie instan<br>
                – 6 unit rumah rusak berat 15 jt<br>
                – 7 unit rumah rusak sedang 10jt<br>
                – 1 unit mesjid 10jt</p>
                <p>Bupati&nbsp; juga melakukan kunjungan langsung turun ke mesjid yang 
                dijadikan posko kesehatan korban bencana di kampung mahabang menggunakan
                 speedboat.</p>
                <p>Juga sempat bunda, sapaan akrab bupati pertama Tulang Bawang 
                memberikan dukungan moral kepada korban terdampak angin puting beliung 
                dengan bersendagurau&nbsp; bersama ibu – ibu dan anak-anak di masjid yang 
                juga di jadikan pos kesehatan. “Hal ini dimaksudkan untuk memberi 
                hiburan bagi mereka, karena beban musibah mereka sudah berat, ini salah 
                satu tugas saya mengunjungi saudara saya, ujar bunda pada awak media 
                yang mengikutinya.</p>
                <p>Setelah dari masjid mahabang, bupati melanjutkan kunjungan ke pondok 
                pesantren kalimasodo di kampung sungai nibung kec dente teladas yang 
                disambut langsung oleh kiyai Rosyid dan didampingin oleh&nbsp; camat dente 
                teladas, aparatur kampung untuk dapat bersilaturahmi bersama santri dan 
                masyarakat.</p>',
                'img' => '1557288114artworks-000302214051-fxqur4-t500x500.jpg',
                'metakey' => '-',
                'metadesc' => '-',
                'tanggal' => '2019-05-08',
                'view' => 62,
                'tag' => NULL,
                'parent' => 0,
                'created_at' => '2019-05-08 04:01:54',
                'updated_at' => '2019-05-08 04:01:54',
                'instansi_id' => 24,
            ],
            [
                'user_id' => 0,
                'kategori_id' => 25,
                'headlines' => 0,
                'utama' => 0,
                'judul_artikel' => 'Perpustakaan Republik Indonesia, Menggelar Sosialisasi Pembudayaan Kegemaran Membaca di Kabupaten Tulang Bawang',
                'caption' => 'Tulang Bawang – Bersama Pemerintah Kabupaten Tulang Bawang, Perpustakaan Republik Indonesia (RI), menggelar Sosialisasi Pembudayaan Kegemaran Membaca, yang dilaksanakan di Ruang Rapat Utama Kantor Bupati',
                'slug' => 'erpustakaan-republik-indonesia-menggelar-sosialisasi-pembudayaan-kegemaran-membaca-di-kabupaten-tula',
                'isi_artikel' => '<p>Dalam kesempatan ini hadir langsung Kepala Perpustakaan RI Drs. 
                Supriyanto MSi bersama Partisi Bidang Perpustakaan. Hadir pula 
                Sekretaris Daerah (Sekda) Ir. Anthoni MM, bersama Asisten I Dr. Akhmad 
                Suharyo M.Si dan Kepala Dinas Perpustakaan dan Kearsipan Syarif Ali SH, 
                dan beberapa Pejabat yang ada dilingkup Pemkab Tulang Bawang serta para 
                pelajar dan para guru dari tingkat SD, SMP, SMA se-Tulang Bawang.</p>
                <p>Kegiatan tersebut mengusung tema ‘Implementasi Program Revolusi 
                Mental Menuju Indonesia Cerdas Tahun 2024’, yang mana bertujuan untuk 
                menjadikan perpustakaan yang berbasis inklusif sosial. Adapun kegiatan 
                ini juga diisi dengan pemberian berbagai teori dalam membudayakan gemar 
                membacara yang dilakukan oleh Partisi Bidang Perpustakaan Nasional RI, 
                lalu diadakan sesi tanya jawab dari para peserta didik dan para guru 
                yang hadir.</p>
                <p>Sekretaris Daerah Ir. Anthoni MM menyampaikan, bahwa kegiatan yang 
                diprakarsai Perpustakaan RI bersama Pemerintah Kabupaten Tulang Bawang 
                dalam hal ini Dinas Perpustakaan dan Kearsipan, bertujuan meningkatkan 
                kecerdasan kehidupan bangsa dengan membudayakan gemar membaca. “Maka 
                dari itu, untuk meningkatkan kecerdasan anak-anak pelajar dan 
                masyarakat, dengan pelaksanaan sosialisasi pembudayaan kegemaran 
                membaca, diharapkan mampu mendorong tumbuhnya budaya gemar membaca 
                melalui pengembangan dan pendayahgunaan perpustakaan,” pesannya.</p>
                <p>Selain itu, kegiatan ini dilakukan untuk memberikan masukan-masukan 
                penting agar siswa-siswi maupun para guru di Kabupaten Tulang Bawang 
                semakin cerdas dengan adanya ide-ide yang dipaparkan oleh perpustakaan 
                RI. “Sebab peran perpustakaan sangat penting sebagai pilar dalam 
                mencerdaskan bangsa, sehingga terwujudnya masyarakat yang cerdas, karena
                 perpustakaan adalah tempat sarana belajar, menyediakan layanan 
                perpustakaan bagi masyarakat seluruh Indonesia,” tandas Ir. Anthoni MM.</p>
                <p>Sementara dalam sambutannya, Kepala Perpustakaan Nasional RI, Drs. 
                Supriyanto M.Si mengajak para siswa dan guru untuk memanfaatkan 
                kerjasama yang telah dijalin oleh Perpustakaan Nasional (Perpusnas) 
                dengan Pemerintah Daerah Kabupaten Tulang Bawang.</p>
                <p>“Kerjasama ini adalah bentuk perhatian Pemerintah Kabupaten Tulang 
                Bawang terhadap masyarakat, dalam meningkatkan kecerdasan dan ilmu 
                Pendidikan di Kabupaten Tulang Bawang, dan tujuan pelaksanaan 
                sosialisasi ini, guna memberikan pencerahan budaya gemar membaca, agar 
                dapat terwujud, sehingga bisa bermanfaat dalam menambah ilmu 
                pengetahuan,” jelas Kepala Perpustakaan Nasional Drs. Supriyanto M.Si.</p>
                <p>Sedangkan, Kepala Dinas Perpustakaan dan Kearsipan Tulang Bawang 
                Syarif Ali SH, menyampaikan ucapan terimakasih kepada Perpustakaan Pusat
                 bersama Partisi Bidang Perpustakaan RI, karena telah hadir di Kabupaten
                 Tulang Bawang dalam rangka memberikan sosialisasi pembudayaan kegemaran
                 membaca bagi masyarakat Tulang Bawang.</p>
                <p>“Semoga melalui sosialisasi ini dapat menumbuhkan minat dan kegemaran
                 membaca, sehingga membaca menjadi tradisi, budaya dan kebutuhan 
                masyarakat, karena pada dasarnya kegiatan ini bertujuan, memberikan 
                informasi pengetahuan kepada masyarakat bahwa buku dan membaca adalah 
                salah satu kunci penting kemajuan bangsa Indonesia khususnya di 
                Kabupaten Tulangbawang,” tutup Kepala Dinas Perpustakaan dan Kearsipan 
                Tulang Bawang Syarif Ali SH.</p>',
                'img' => '15572886462.jpg',
                'metakey' => '---',
                'metadesc' => '---',
                'tanggal' => '2019-05-08',
                'view' => 9,
                'tag' => NULL,
                'parent' => 0,
                'created_at' => '2019-05-08 04:10:46',
                'updated_at' => '2019-05-08 04:10:46',
                'instansi_id' => 44,
            ],
            [
                'user_id' => 0,
                'kategori_id' => 94,
                'headlines' => 0,
                'utama' => 1,
                'judul_artikel' => 'SOSIALISASI JPN BINA DESA BIDANG PERDATA DAN TATA USAHA NEGARA DI KABUPATEN TULANG BAWANG',
                'caption' => 'Inspektur Kab Tulang Bawang Menghadiri Sosialisasi JPN Bisa',
                'slug' => 'sosialisasi-jpn-bina-desa-bidang-perdata-dan-tata-usaha-negara-di-kabupaten-tulang-bawang',
                'isi_artikel' => '<p class="MsoNormal" style="text-align:justify"><span style="font-size:12.0pt;
                mso-bidi-font-size:11.0pt;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Tanggal
                03 Juli 2019 Inspektur Kabupaten Tulang Bawang Dr. Pahada Hidayat,S.H.,M.H
                menghadiri kegiatan Sosialisasi Jaksa Pengacara Negara Bina Desa (JPN Bisa)
                Bidang Perdata dan Tata Usaha Negara di Ruang Rapat Utama Setdakab Tulang
                Bawang. Kegiatan ini turut dihadiri oleh Sekda Kabupaten Tulang Bawang, Asisten
                I Bidang Pemerintahan dan Sosial Kabupaten Tulang Bawang serta diikuti oleh
                Camat dan Kepala Kampung se-Kabupaten Tulang Bawang.<o:p></o:p></span></p><p class="MsoNormal" style="text-align:justify"><span style="font-size:12.0pt;
                mso-bidi-font-size:11.0pt;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Kegiatan
                ini&nbsp; diadakan guna meningkatkan
                kepercayaan Pemerintah Daerah, Pemerintah Desa, BUMN/BUMD dan Masyarakat
                tentang tugas dan fungsi Perdata dan Tata Usaha Negara pada Kejaksaan RI. Dalam
                materinya Asisten Perdata dan Tata Usaha Negara Kejaksaan Tinggi Lampung Sugeng
                Hariadi,S.H.,M.H menjelaskan program JPN
                Bisa diharapkan dapat membantu pemerintah desa dalam melaksanakan tata kelola
                pemerintahan desa berupa Bantuan Hukum, Pertimbangan Hukum, Tindakan
                Hukum Lain, Penegakan Hukum dan Pelayanan Hukum dalam batasan perdata dan tata
                usaha negara. Menurut Sugeng, JPN Bisa adalah program suadana dari Datun Kejati
                Lampung. “Program yang kami persembahkan untuk masyarkat Lampung ini sesuai dengan
                Undang-Undang Nomor 16 Pasal 30 Tahun 2004 &nbsp;tentang Kejaksaan RI,” jelasnya<o:p></o:p></span></p><p>
                
                
                
                </p><p class="MsoNormal" style="text-align:justify"><span style="font-size:12.0pt;
                mso-bidi-font-size:11.0pt;line-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Inspektur
                Kabupaten Tulang Bawang dalam sambutannya menerima baik Program JPN Bisa yang
                dilakukan di Kabupaten Tulang Bawang. “Diharapkan momen ini dapat menjadi
                bantuan bagi pemerintah desa dalam mewujudkan peningkatan pelayanan kepada
                masyarakat. Inspektorat Kabupaten Tulang Bawang juga selalu menjadi fasilitator
                dan memberikan konsultasi serta pendampingan kepada aparatur desa dalam
                pengelolaan pemerintahan dan penggunaan dana desa guna mewujudkan pemerintahan
                desa yang akuntabel” jelasnya.<o:p></o:p></span></p>',
                'img' => '1562310193IMG-20190703-WA0012.jpg',
                'metakey' => 'JPN',
                'metadesc' => 'sosialisasi JPN Bina Desa',
                'tanggal' => '2019-07-05',
                'view' => 64,
                'tag' => NULL,
                'parent' => 0,
                'created_at' => '2019-07-05 07:03:13',
                'updated_at' => '2019-07-05 07:03:13',
                'instansi_id' => 49,
            ],
            [
                'user_id' => 0,
                'kategori_id' => 318,
                'headlines' => 0,
                'utama'  => 1,
                'judul_artikel' => 'PSR; SOLUSI MENINGKATKAN PRODUKTIVITAS SAWIT PETANI',
                'caption' => 'sosialisasi',
                'slug' => 'psr-solusi-meningkatkan-produktivitas-sawit-petani',
                'isi_artikel' => '<p><p style="margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-family: Lato, Helvetica, sans-serif; vertical-align: baseline; text-align: justify; color: rgb(64, 64, 64); font-size: 16px;">Sosialisasi Peremajaan Kelapa Sawit Pekebun dilaksanakan di Hotel Le Mann, Kamis 11 April 2019. Acara dibuka oleh Staf Ahli Bidang Ekonomi Firmansyah, S.Sos mewakili Bupati Tulang Bawang yang berhalangan hadir karena ada kegiatan lain. Peserta sosialisasi adalah Kepala Balai Penyuluh Pertanian dan Penyuluh Pertanian se Kabupaten Tulang Bawang. Acara ini juga dihadiri oleh Kepala Kantor Wilayah BRI Bandar Lampung dan Pimpinan Bank Mandiri Business Banking Bandar Lampung</p><p style="margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-family: Lato, Helvetica, sans-serif; vertical-align: baseline; text-align: justify; color: rgb(64, 64, 64); font-size: 16px;">Sosialisasi Peremajaan Kelapa Sawit Pekebun ini sebagai upaya Pemerintah untuk merevitalisasi kebun sawit mengingat banyaknya kebun-kebun kelapa sawit di Kabupaten Tulang Bawang ini yang perlu untuk diremajakan kembali, baik karena secara umur sudah waktunya diremajakan maupun karena produksi yang belum optimal atau kurang dari 10 ton/ha/tahun dan karena benih kelapa sawit yang kurang jelas .</p><p style="margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-family: Lato, Helvetica, sans-serif; vertical-align: baseline; text-align: justify; color: rgb(64, 64, 64); font-size: 16px;">Tanaman kelapa sawit merupakan salah satu komoditi perkebunan yang banyak di usahakan di Kabupaten Tulang Bawang. Perkebunan Sawit di Provinsi Lampung (PR,PBN dan PBS) mencapai 215.488 Ha, dari luasan tersebut, Kabupaten Tulang Bawang menyumbang 14,20 % atau seluas 30.610 Ha.</p><p style="margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-family: Lato, Helvetica, sans-serif; vertical-align: baseline; text-align: justify; color: rgb(64, 64, 64); font-size: 16px;">Luasnya areal perkebunan tersebut belum sebanding dengan jumlah produksi yang dihasilkan, mengingat beberapa permasalahan yang dihadapi oleh masyarakat pekebun itu sendiri, seperti : kurangnya permodalan yang dimiliki petani swadaya untuk mengolah lahannya, kurangnya pengetahuan petani tentang budidaya teknis bertanam kelapa sawit, masih adanya petani yang menggunakan bibit tidak bersertifikat resmi dari Balai benih dan masih kurangnya daya beli sarana dan prasarana di lapangan. Dan permasalahan ini memang seharusnya menjadi pekerjaan rumah bagi pemerintah terutama dinas terkait tapi mengingat keadaan Anggaran Daerah Provinsi Maupun Kabupaten dan di Indonesia Umumnya, membuat kita harus bergiat untuk mencari sumber- sumber dana lain yang bisa membantu berjalannya kegiatan untuk masyarakat. Tidak dipungkiri dengan adanya perkebunan kelapa sawit di Provinsi ini sangat memberi warna pada situasi perekonomian di tengah masyarakat.</p><p style="margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-family: Lato, Helvetica, sans-serif; vertical-align: baseline; text-align: justify; color: rgb(64, 64, 64); font-size: 16px;">BPDP-KS (Badan Pengelola Dana Perkebunan Kelapa Sawit) merupakan unsur lembaga pemerintah pusat yang mengelola sumber pendanaan dari pemotongan pajak penjualan CPO kelapa sawit sebanyak 0,5 % /Ton dan bertugas untuk melakukan perencanaan, penganggaran, penghimpunan, penyaluran dana, penatausahaan dan pertanggungjawaban serta melakukan pengawasan dana peremajaan kelapa sawit, pengembangan sumber daya dan bantuan sarana dan prasarana. BPDP-KS ini berada dibawah Kementrian Keuangan RI, yang dibentuk sebagai wujud kepedulian pemerintah terhadap kondisi perkebunan di Indonesia dengan harapan dapat meningkatkan produksi dan produktifitas secara efektif dan efisian. Target perremajaan kelapa wawit rakyat/pekebun melalui dana ini untuk Kabupaten Tulang Bawang adalahg seluas 1.205 Ha. Kegiatan PSR ini dilaksanakan dengan pola Hibah sebesar Rp. 25 Juta per Ha dengan makimal 4 Ha per Kepala Keluarga.</p><p style="margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-family: Lato, Helvetica, sans-serif; vertical-align: baseline; text-align: justify; color: rgb(64, 64, 64); font-size: 16px;">Melalui pelaksanaan kegiatan peremajaan, Kelapa Sawit Pekebun ini diharapkan pelaksanaannya dapat tepat sasaran, tepat teknis, tepat biaya dan tepat waktu serta memiliki kelembagaan petani yang pontensial dan mampu melakukan kemitraan. Saya berharap dengan adanya dana peremajaan dari BPDP-KS ini dapat menjadi solusi permodalan untuk para petani sehingga tidak ada lagi petani yang menggunakan bibit asal-asalan, tidak membuka kebun secara membakar dan menggunakan sarana prasarana pertanian secara tepat dan benar. Dengan Program Peremajaan Kelapa Sawit Rakyat/pekebun kita harapkan produktivitas kelapa sawit meningkat yang pada akhirnya akan berdampak pada peningkatan pendapatan pekebun dapat meningkat. (Admin)</p></p>',
                'img' => '1557382749psr.jpg',
                'metakey' => 'sawit rakyat',
                'metadesc' => 'sawit rakyat',
                'tanggal' => '2019-05-09',
                'view' => '74',
                'tag' => NULL,
                'parent' => 0,
                'created_at' => '2019-05-09 06:19:10',
                'updated_at' => '2019-05-09 06:19:10',
                'instansi_id' => '5',
            ],
            [
                'user_id' => 0,
                'kategori_id' => 58,
                'headlines' => 0,
                'utama'  => 0,
                'judul_artikel' => 'Dalam Rangka Memperingati Hut Tuba Ke-22, Pemkab Tuba Menggelar Lomba Bercerita Se-Kabupaten Tulang Bawang Tingkat Sekolah Dasar',
                'caption' => '-',
                'slug' => 'dalam-rangka-memperingati-hut-tuba-ke-22-pemkab-tuba-menggelar-lomba-bercerita-se-kabupaten-tulang-b',
                'isi_artikel' => '<section class="entry-content clearfix">
                <p>Tulang Bawang – Dinas
Perpustakaan dan Kearsipan Kabupaten Tulangbawang menggelar lomba 
bercerita, sebagai upaya meningkatkan literasi di kalangan siswa sekolah
dasar sederajat. Lomba bercerita tingkat kabupaten ini selain dalam 
rangka memeriahkan Hari Ulang Tahun Kabupaten Sai Bumi Nengah Nyappur 
yang ke 22, juga bertujuan untuk menanam dan menumbuhkan budaya gemar 
membaca sejak dini kepada anak-anak.</p>
<p>Bupati Tulangbawang Winarti melalui Asisten lll Untung Widodo 
mengapresiasi, lomba tersebut. Menurutnya, melalui lomba bercerita akan 
mudah untuk menumbuhkan budaya membaca kepada anak-anak. Implementasi 
dari membaca, kata dia, tentu akan membuat anak-anak bercerita. 
“Kegiatan ini menjadi upaya kita untuk membangkitkan budaya membaca, 
yang kemudian ditampilkan dalam bentuk bercerita,” tutur Asisten III 
saat membuka lomba bercerita, di GSG Menggala, Selasa (5/3/2019).</p>
<p>Diera kepemimpinan Winarti saat ini, lanjut Untung, ia sangat 
konsisten dalam memantau tumbuh kembang anak, yakni dengan memberikan 
makanan tambahan bagi anak-anak dan beasiswa bagi siswa miskin yang 
diluncurkan melalui 25 program politiknya.</p>
<p>Kepala Dinas Perpustakaan dan Kearsipan Kabupaten Tulangbawang, 
Syarif Ali mengatakan, peserta lomba bercerita tingkat kabupaten ini 
berasal dari siswa kelas lV dan V tingkat sekolah dasar dan madrasah 
iftidaiyah se Tulangbawang dengan jumlah 80 peserta. “Kegiatan ini 
sekaligus seleksi untuk mencari peserta terbaik yang akan kita kirim 
untuk mengikuti lomba bercerita tingkat provinsi maupun nasional,” tutup
Syarif Ali.</p>
</section>',
                'img' => '155798806615-07-24-dinas-perpustakaan-dan-kearsipan-tulangbawang-gelar-lomba-bercerita-650x400.jpg',
                'metakey' => 'Lomba Bercerita Se-Kabupaten Tulang Bawang Tingkat Sekolah Dasar',
                'metadesc' => 'Lomba Bercerita Se-Kabupaten Tulang Bawang Tingkat Sekolah Dasar',
                'tanggal' => '2019-03-05',
                'view' => '3',
                'tag' => 'SOSIALISASI',
                'parent' => 0,
                'created_at' => '2019-05-16 06:27:46',
                'updated_at' => '2019-05-16 06:27:46',
                'instansi_id' => '16',
            ],
            [
                'user_id' => 0,
                'kategori_id' => 96,
                'headlines' => 0,
                'utama'  => 1,
                'judul_artikel' => 'SURAT EDARAN PERMINTAAN DAN PEMBERIAN IZIN CUTI PEGAWAI',
                'caption' => 'SURAT EDARAN PERMINTAAN DAN PEMBERIAN IZIN CUTI PEGAWAI',
                'slug' => 'surat-edaran-permintaan-dan-pemberian-izin-cuti-pegawai',
                'isi_artikel' => '<p><p></p><p></p><p><span style="color: rgb(47, 46, 46); font-family: Arial, Tahoma, Verdana; font-size: 14px;">Berikut disampaikan SURAT EDARAN PERMINTAAN DAN PEMBERIAN IZIN CUTI PEGAWAI DI LINGKUP PEMERINTAH KABUPATEN TULANG BAWANG.</span><br></p><iframe src="https://drive.google.com/file/d/1N2LXiWxLFt_kRBN2H9CWpO2ZREPM4WxI/preview" width="100%" height="480"></iframe><br><a href="https://drive.google.com/file/d/1YRqYoAVIICVLjVjRaKmz-Zs7e5gmtnBc/view?usp=sharing" target="_blank"><span style="font-size: 12px;">Download Surat Edaran</span></a><br><a href="https://drive.google.com/file/d/1xko8QM--NF9-jt4Hm33krCh_E0VpSQVL/view?usp=sharing" target="_blank"><span style="font-size: 12px;">Download Blangko Cuti</span></a><p></p><p></p></p>',
                'img' => '1558327157x-office-document-icon.png',
                'metakey' => 'CUTI',
                'metadesc' => 'CUTI PNS',
                'tanggal' => '2018-02-01',
                'view' => '47',
                'tag' => NULL,
                'parent' => 0,
                'created_at' => '2019-05-20 04:25:03',
                'updated_at' => '2019-05-20 04:25:03',
                'instansi_id' => '30',
            ],
            [
                'user_id' => 0,
                'kategori_id' => 42,
                'headlines' => 0,
                'utama'  => 0,
                'judul_artikel' => 'SOSIALISASI PENYUSUNAN RDKK PUPUK BERSUBSIDI MELALUI e-RDKK',
                'caption' => 'workshop',
                'slug' => 'workshop',
                'isi_artikel' => '<p>Di era digital seperti sekarang ini 
                segala aspek telah memanfaatkan IT, tidak terkecuali sektor pertanian. 
                Alokasi pupuk bersubsidi oleh pemerintah ditetapkan berdasarkan usulan 
                RDKK (Rencana Definitif Kebutuhan Kelompok) yang disusun oleh 
                kelompoktani yang didampingi oleh penyuluh pertanian lapangan. Pupuk 
                bersubsidi ini disalurkan kepada petani yang melakukan Usaha Tani 
                Pertanian Tanaman Pangan, Hortikultura, Perkebunan dan Peternakan.<br>?<br>
                Ketepatan penyusunan RDKK disesuaikan dengan potensi perencanaan tanam 
                di masing-masing kampung dan kecamatan sangat menentukan ketepatan waktu
                 dan jumlah alokasi pupuk subsidi. Ketersediaan pupuk bersubsidi sangat 
                penting bagi suksesnya program pemerintah yaitu swasembada pangan 
                khususnya padi, jagung, kedelai dan beberapa komoditas hortikultura 
                seperti cabai dan bawang merah.<br>?<br>
                Dalam rangka menyamakan persepsi dan mengenalkan aplikasi e-RDKK, maka 
                Dinas Pertanian mengadakan sosialisasi kepada operator e-RDKK yang 
                merupakan Penyuluh Pertanian Lapangan yang memiliki wilayah binaan di 
                setiap kampung yang ada di Kabupaten Tulang Bawang.<br>
                Sebagai tindak lanjut dari sosialisasi tersebut, disepakati bahwa 
                petugas pertanian akan mendampingi kelompoktani untuk menginput data, 
                verifikasi, dan mengoptimalkan input e-RDKK. Berdasarkan informasi bahwa
                 pemberian alokasi pupuk subsidi mulai tahun 2019 akan berbasis e-RDKK. 
                Sehingga optimalisasi input dan verifikasi e-RDKK di Tahun 2019 akan 
                menentukan ketepatan, kecukupan, dan ketersediaan alokasi pupuk subsidi 
                di tahun 2019 sehingga mendukung sukses peningkatan produksi<br>
                RDKK adalah rencana kebutuhan pupuk bersubsidi untuk jangka waktu satu 
                tahun yang disusun berdasarkan musyawarah poktan atau penyalur sarana 
                produksi pertanian. E-RDKK adalah database dengan tambahan atribut 
                berupa Nomor Induk Kependudukan. Alokasi pupuk bersubsidi untuk sektor 
                pertanian ini ditetapkan dengan Peraturan Menteri Pertanian Nomor 67 
                Tahun 2016.</p>',
                'img' => '1557382851erdkk2.jpeg',
                'metakey' => 'e-rdkk',
                'metadesc' => 'e-rdkk',
                'tanggal' => '2019-05-08',
                'view' => '106',
                'tag' => NULL,
                'parent' => 0,
                'created_at' => '2019-05-08 07:41:04',
                'updated_at' => '2019-05-08 07:41:04',
                'instansi_id' => '5',
            ],
            [
                'user_id' => 0,
                'kategori_id' => 32,
                'headlines' => 0,
                'utama'  => 1,
                'judul_artikel' => 'Laju Pertumbuhan penduduk',
                'caption' => 'dua anak cukup bahagia sejahtera',
                'slug' => 'laju-pertumbuhan-penduduk',
                'isi_artikel' => '<p>Laju Pertumbuhan penduduk kabupaten Tulang Bawang 2,68 <br></p>',
                'img' => '1557301432STIKER KB MASTER.jpg',
                'metakey' => 'tuba',
                'metadesc' => 'tuba',
                'tanggal' => '2019-05-04',
                'view' => '185',
                'tag' => 'ayoikutkb',
                'parent' => 0,
                'created_at' => '2019-05-08 07:43:52',
                'updated_at' => '2019-05-08 07:43:52',
                'instansi_id' => '20',
            ],
        ]);
        }
    }