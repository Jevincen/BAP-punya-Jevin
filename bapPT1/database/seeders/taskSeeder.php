<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class taskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table ('matakuliahs')->insert( [
            ['kodeMatakuliah' => 'MK001', 
            'namaMatakuliah' => 'Pemrograman Aplikasi Bisnis' ,
            'sks' => 4],
            ['kodeMatakuliah' => 'MK002', 
            'namaMatakuliah' => 'Audit SI' ,
            'sks' => 4],
            ['kodeMatakuliah' => 'MK003', 
            'namaMatakuliah' => 'Pemrograman Aplikasi Bisnis' ,
            'sks' => 4]
        ]
        );
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 50; $i++) {
            DB::table('mahasiswas')->insert([
                'studentID' => '03000811'&$i,
                'nama' =>$faker->name,
                'tahunMasuk' => '2021',
                'jurusan' => $faker->address
            ]);
        }
        DB::table ('khs')->insert( [
            ['kode_khs' => 'MK002', 
            'keterangan' => '2022/2023' ,
            'keterangan_singkat' => '2022/2023'],

            ['kode_khs' => 'MK003', 
            'keterangan' => '2022/2023' ,
            'keterangan_singkat' => '2022/2023'],

            ['kode_khs' => 'MK004', 
            'keterangan' => '2022/2023' ,
            'keterangan_singkat' => '2022/2023'],
        ]
        );
        DB::table ('khs_details')->insert( [
            ['kode_khs_detail' => 'khs001', 
            'kode_khs' => 'khs001' ,
            'nilai' => 70],

            ['kode_khs_detail' => 'khs001', 
            'kode_khs' => 'khs001' ,
            'nilai' => 70],

            ['kode_khs_detail' => 'khs001', 
            'kode_khs' => 'khs001' ,
            'nilai' => 70],
        ]
        );
        DB::table ('programstudis')->insert( [
            ['kodeProgramstudi' => 'PS001', 
            'NamaProgramStudi' => 'Sistem informasi' ,
            'Deskripsi' => 'Belajar mengenai komputer dan Bisnis'],

            ['kodeProgramstudi' => 'PS002', 
            'NamaProgramStudi' => 'Akuntansi' ,
            'Deskripsi' => 'Belajar mengenai Laporan Keuangan Akuntansi'],

            ['kodeProgramstudi' => 'PS003', 
            'NamaProgramStudi' => 'Hukum' ,
            'Deskripsi' => 'Belajar mengenai Pasal pasal'],

            ['kodeProgramstudi' => 'PS004', 
            'NamaProgramStudi' => 'Manajemen' ,
            'Deskripsi' => 'Belajar mengenai manajemen Bisnis'],

            ['kodeProgramstudi' => 'PS005', 
            'NamaProgramStudi' => 'Hospitality' ,
            'Deskripsi' => 'Belajar mengenai perhotelan'],
        ]
        );

        DB::table ('pembayarans')->insert( [
            ['kodePembayaran' => 'KP001', 
            'StudentId' => '03081210037' ,
            'Amount' => 'Rp 10.000.000,-',
            'Payment-date' => '08/10/2020',
            'Payment-method' => 'Cash'],

            ['kodePembayaran' => 'KP002', 
            'StudentId' => '03081210044' ,
            'Amount' => 'Rp 2.000.000,-',
            'Payment-date' => '04/15/2020',
            'Payment-method' => 'Debit'],

            ['kodePembayaran' => 'KP003', 
            'StudentId' => '03081210043' ,
            'Amount' => 'Rp 9.000.000,-',
            'Payment-date' => '04/13/2020',
            'Payment-method' => 'Kredit'],

            ['kodePembayaran' => 'KP004', 
            'StudentId' => '03081210124' ,
            'Amount' => 'Rp 13.000.000,-',
            'Payment-date' => '06/07/2020',
            'Payment-method' => 'Cash'],

            ['kodePembayaran' => 'KP005', 
            'StudentId' => '03081210456' ,
            'Amount' => 'Rp 7.000.000,-',
            'Payment-date' => '04/11/2020',
            'Payment-method' => 'Debit'],
        ]
        );

        DB::table ('transkrip_akademiks')->insert( [
            ['kodeTranskripAkademik' => 'TA001', 
            'StudentId' => '03081210037' ,
            'Kode_matakuliah' => 'KM001',
            'Kode_term' => 'T001',
            'nilai' => 'A',
            'sks' => '4',
            'gpa' => '3.7'],

            ['kodeTranskripAkademik' => 'TA002', 
            'StudentId' => '03081210347' ,
            'Kode_matakuliah' => 'KM002',
            'Kode_term' => 'T002',
            'nilai' => 'B',
            'sks' => '6',
            'gpa' => '3.2'],

            ['kodeTranskripAkademik' => 'TA003', 
            'StudentId' => '0308121343' ,
            'Kode_matakuliah' => 'KM003',
            'Kode_term' => 'T003',
            'nilai' => 'A',
            'sks' => '3',
            'gpa' => '3.1'],

            ['kodeTranskripAkademik' => 'TA004', 
            'StudentId' => '0308123348' ,
            'Kode_matakuliah' => 'KM004',
            'Kode_term' => 'T004',
            'nilai' => 'B',
            'sks' => '5',
            'gpa' => '3.4'],

            ['kodeTranskripAkademik' => 'TA005', 
            'StudentId' => '0308123304' ,
            'Kode_matakuliah' => 'KM005',
            'Kode_term' => 'T005',
            'nilai' => 'A',
            'sks' => '4',
            'gpa' => '3.76'],
        ]
        );
    }

}