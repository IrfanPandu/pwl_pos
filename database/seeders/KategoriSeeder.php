<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
    [    'kategori_kode' => 'KT01',
        'nama_kategori' => 'Makanan'
    ],
    [
        'kategori_kode' => 'KT02',
        'nama_kategori' => 'Minuman'
    ],
    [
        'kategori_kode' => 'KT03',
        'nama_kategori' => 'Snack'
    ],
    [
        'kategori_kode' => 'KT04',
        'nama_kategori' => 'Sembako'
    ],
    [
        'kategori_kode' => 'KT05',
        'nama_kategori' => 'Elektronik'
    ]
        ];

        DB::table('m_kategori')->insert($data);
    }
}