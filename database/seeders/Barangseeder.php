<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Barangseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang')->insert([
            'Nama_barang' => 'ppp',
            'stok' => '20',
            'harga' => '11.000',
            'id_jenis_barang' => '1212',

        ]);
    }
}
