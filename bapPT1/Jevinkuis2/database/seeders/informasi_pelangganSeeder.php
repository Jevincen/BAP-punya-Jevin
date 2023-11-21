<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class informasi_pelangganSeeder extends Seeder
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
            'Notelp' => 'Jln. Muara Takus',
            'Alamat' => 'Jln krakatau'],
        ],
         );
    }
}
