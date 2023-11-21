<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class informasi_perusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table ('informasi_perusahaans')->insert( [
            ['nama' => 'Claude Company', 
            'Alamat' => 'Jln. Muara Takus'],

        ]
        );
    }
    }
