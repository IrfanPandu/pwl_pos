<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 15; $i++) {
            DB::table('m_barang')->insert([
                'kategori_id' => rand(1,5),
                'barang_kode' => 'BRG'.str_pad($i,3,'0',STR_PAD_LEFT),
                'barang_nama' => 'Barang '.$i,
                'harga_beli' => rand(3000,10000),
                'harga_jual' => rand(10000,20000),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}