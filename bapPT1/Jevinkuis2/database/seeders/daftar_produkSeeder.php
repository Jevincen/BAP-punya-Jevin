<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class daftar_produkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table ('daftar_produks')->insert( [
            ['nama' => 'Product 1',
            'Harga' => 10000, 
            'quantity' => 5],
            ['nama' => 'Product 2', 
            'Harga' => 5000,
            'quantity' => 10]
        ]
        );
    }
}