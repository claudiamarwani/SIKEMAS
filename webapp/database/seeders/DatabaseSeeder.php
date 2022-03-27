<?php

namespace Database\Seeders;

use App\Models\Infokeluhan;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Opd;
use App\Models\Category;
use App\Models\Kuesioner;
use App\Models\Notiff;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    //    \App\Models\User::factory(10)->create();
    User::create([
        'name'=>'Anju Ucok Lubis',
        'role' => 'Masyarakat',
        'email'=>'anju@gmail.com',
        'password' => bcrypt('12345'),
        'address' =>'balige',
        'nik' =>'1209845764814567',
        'phonenumber' => '081256754677',
        'gender' => 'laki-laki',
        
    ]);

    User::create([
        'name'=>'Anugerah Simanjuntak',
        'role' => 'Masyarakat',
        'email'=>'anugerah@gmail.com',
        'password' => bcrypt('abcde'),
        'address' =>'Medan',
        'nik' =>'1353567534566545',
        'phonenumber' => '081264567897',
        'gender' => 'laki-laki',
    ]);

    User::create([
        'name'=>'Marwani Napitupulu',
        'role' => 'Masyarakat',
        'email'=>'marwani@gmail.com',
        'password' => bcrypt('88888'),
        'address' =>'Siantar',
        'nik' =>'123456435675431234',
        'phonenumber' => '081265678976',
        'gender' => 'Perempuan',
        
    ]);

    User::create([
        'name'=>'Agnes Lumbantobing',
        'role' => 'Masyarakat',
        'email'=>'agnes@gmail.com',
        'password' => bcrypt('13131'),
        'address' =>'Dolok Sanggul',
        'nik' =>'1235643564353456',
        'phonenumber' => '081245612345',
        'gender' => 'Perempuan',
        
    ]);
    User::create([
        'name'=>'Agustina Hasibuan',
        'role' => 'Masyarakat',
        'email'=>'agustina@gmail.com',
        'password' => bcrypt('42424'),
        'address' =>'Laguboti',
        'nik' =>'120988765678655677',
        'phonenumber' => '081256787653',
        'gender' => 'Perempuan',
        
    ]);

    User::create([
        'name'=>'Admin Sikemas',
        'role' => 'Admin',
        'email'=>'admin@gmail.com',
        'password' => bcrypt('admin'),
        'address' =>'Laguboti',
        'nik' =>'1216060601231234',
        'phonenumber' => '084567657890',
        'gender' => 'Perempuan',
        'is_admin'=>'1'
        
    ]);

    Opd::create([
        'name' => 'Dinas Kependudukan dan Catatan Sipil',
        'slug' => 'dinas-kependudukan-dan-catatan-sipil'
    ]);

    Opd::create([
        'name' => 'Dinas Perhubungan',
        'slug' => 'dinas-perhubungan'
    ]);
    Opd::create([
        'name' => 'Dinas Komunikasi dan Informatika',
        'slug' => 'dinas-komuikasi-dan-informatika'
    ]);
    Opd::create([
        'name' => 'Dinas Kesehatan',
        'slug' => 'dinas-kesehatan'
    ]);
    Opd::create([
        'name' => 'Dinas Lingkungan Hidup',
        'slug' => 'dinas-lingkungan-hidup'
    ]);
    Opd::create([
        'name' => 'Dinas Pendidikan dan Kebudayaan',
        'slug' => 'dinas-pendidikan-dan-kebudayaan'
    ]);


      //1
      Category::create([
        'name' => 'Biodata Kependudukan',
        'slug' => 'biodata-kependudukan',
        'opd_id' =>'1'
    ]);
    Category::create([
        'name' => 'Pelayanan Cetak Akta Kelahiran',
        'slug' => 'pelayanan-cetak-akta-kelahiran',
        'opd_id' =>'1'
    ]);
    Category::create([
        'name' => 'Pelayanan Cetak Akta Kematian',
        'slug' => 'pelayanan-cetak-akta-kematian',
        'opd_id' =>'1'
    ]);
    Category::create([
        'name' => 'Pelayanan Cetak Akta Perkawinan',
        'slug' => 'pelayanan-cetak-akta-perkawinan',
        'opd_id' =>'1'
    ]);
    Category::create([
        'name' => 'Pelayanan Cetak Akta Perceraian',
        'slug' => 'pelayanan-cetak-akta-perceraian',
        'opd_id' =>'1'
    ]);

    //2
    Category::create([
        'name' => 'Pelayanan Izin Mendirikan Perusahaan Angkutan Umum Orang',
        'slug' => 'pelayanan-izin-mendirikan-perusahaan-angkutan-umum-orang',
        'opd_id'=>'2'
    ]);

    Category::create([
        'name' => 'Pelayanan Izin Trayek Angkutan Kode',
        'slug' => 'pelayanan-izin-trayek',
        'opd_id'=>'2'
    ]);  
    Category::create([
        'name' => 'Pelayanan Pengujian Kendaraan Bermotor',
        'slug' => 'pelayanan-pengujian-kendaraan-bermotor',
        'opd_id'=>'2'
    ]);

    //3
    Category::create([
        'name' => 'Administrasi Surat Keluar',
        'slug' => 'Administrasi Surat Keluar',
        'opd_id'=>'3'
    ]);
Category::create([
        'name' => 'Administrasi Surat Masuk',
        'slug' => 'Administrasi Surat Masuk',
        'opd_id'=>'3'
    ]);
Category::create([
        'name' => 'Baliho/Spanduk',
        'slug' => 'Baliho/Spanduk',
        'opd_id'=>'3'
    ]);
Category::create([
        'name' => 'Data dan Informasi Akses Publik',
        'slug' => 'Data dan Informasi Akses Publik',
        'opd_id'=>'3'
    ]);
Category::create([
        'name' => 'Peliputan Berita',
        'slug' => 'Peliputan Berita',
        'opd_id'=>'3'
    ]);

//4
Category::create([
'name' => 'Informasi Kinerja Pengelolaan Lingkungan Hidup Daerah (KPLHD)',
'slug' => 'Informasi Kinerja Pengelolaan Lingkungan Hidup Daerah (KPLHD)',
'opd_id'=>'4'
]);
Category::create([
'name' => 'Pengaduan dan Penyelesaian Sengketa Lingkungan Hidup',
'slug' => 'Pengaduan dan Penyelesaian Sengketa Lingkungan Hidup',
'opd_id'=>'4'
]);
Category::create([
'name' => 'Rekomendasi Izin Lingkungan',
'slug' => 'Rekomendasi Izin Lingkungan',
'opd_id'=>'4'
]);
Category::create([
'name' => 'Rekomendasi Izin Pembuangan Limbah Cair',
'slug' => 'Rekomendasi Izin Pembuangan Limbah Cair',
'opd_id'=>'4'
]);
Category::create([
'name' => 'Rekomendasi Izin Tempat Penyimpanan Sementara Limbah Berbahaya dan Beracun',
'slug' => 'Rekomendasi Izin Tempat Penyimpanan Sementara Limbah Berbahaya dan Beracun',
'opd_id'=>'4'
]);

    //5
    Category::create([
        'name' => 'Bus Sekolah',
        'slug' => 'bus-sekolah',
        'opd_id'=>'5'
    ]);
    Category::create([
        'name' => 'DAPODIK',
        'slug' => 'dapodik',
        'opd_id'=>'5'
    ]);

    Category::create([
        'name' => 'Pensiun',
        'slug' => 'pensiun',
        'opd_id'=>'5'
    ]);
    
    Category::create([
        'name' => 'Kenaikan Pangkat',
        'slug' => 'kenaikan-pangkat',
        'opd_id'=>'5'
    ]);
    
    Category::create([
        'name' => 'Pengesahan Potocopy Izasah',
        'slug' => 'pengesahan-potocopy-izasah',
        'opd_id'=>'5'
    ]);
        Infokeluhan::create([
            'subject' => 'Perihal Biodata',
            'slug' => 'perihal-biodata',
            'body' => 'Saya mengalami keluhan pada perihal biodata yang bermasalah..........',
            'category_id' =>1,
            'user_id' =>1,
            'opd_id' =>1
        ]);

        Infokeluhan::create([
            'subject' => 'Perihal akta lahir',
            'slug' => 'perihal-aktalahor',
            'body' => 'Saya mengalami keluhan pada perihal akta kelahir yang bermasalah..........',
            'category_id' =>2,
            'user_id' =>2,
            'opd_id' =>1
        ]);

        Infokeluhan::create([
            'subject' => 'Perihal akta kematian',
            'slug' => 'perihal-akta-lematian',
            'body' => 'Saya mengalami keluhan pada perihal akta kematian yang bermasalah..........',
            'category_id' =>3,
            'user_id' =>1,
            'opd_id' =>1
        ]);

        Infokeluhan::create([
            'subject' => 'Perihal akta Perkawaninan',
            'slug' => 'perihal-akta-perkawinan',
            'body' => 'Saya mengalami keluhan pada perihal akta perkawinan yang bermasalah..........',
            'category_id' =>4,
            'user_id' =>2,
            'opd_id' =>1
        ]);


        Infokeluhan::create([
            'subject' => 'Perihal akta lahir',
            'slug' => 'perihala-akta-perceraian',
            'body' => 'Saya mengalami keluhan pada perihal akta perceraian yang bermasalah..........',
            'category_id' =>5,
            'user_id' =>1,
            'opd_id' =>1
        ]);
    
        Infokeluhan::create([
            'subject' => 'Perihal Cetak kk',
            'slug' => 'perihal-cetak-KK',
            'body' => 'Saya mengalami keluhan pada perihal kartu keluarga yang bermasalah..........',
            'category_id' =>6,
            'user_id' =>2,
            'opd_id' =>1
        ]);

        Infokeluhan::create([
            'subject' => 'Perihal cetak ktp',
            'slug' => 'perihal-cetak-ktp',
            'body' => 'Saya mengalami keluhan pada perihal ktp yang bermasalah..........',
            'category_id' =>7,
            'user_id' =>1,
            'opd_id' =>1
        ]);
        
        Notiff::create([
            'subject' => 'Pemerintah Desa Sangkar Ni Huta telah menggunakan Aplikasi Sikemas dalam mempermudah pelaksanaan Survei Kepuasan Masyarakat. Sikemas telah digunakan pada 49 Unit Kerja/Unit Pelayanan dan pada Triwulan III Tahun 2020 diperoleh Rata-rata Indeks Kepuasan Masyarakat sebesar 86,5  dengan jumlah responden 8895 orang.',
            
        ]);
        Notiff::create([
            'subject' => 'Dalam Kegiatan Monitoring dan Evaluasi Pelaksanaan melalui Sikemas pada Triwulan III, diberikan Penghargaan dari Wali Kota Tebing Tinggi kepada Puskesmas Teluk Karang, Bagian Pengadaan Barang dan Jasa Setdako, dan Dinas Kependudukan dan Pencatatan Sipil sebagai Unit Kerja/Unit Pelayanan Terbaik I-III dalam Pelaksanaan Evaluasi melalui Aplikasi Sikemas.',
            
        ]);
    }
}
