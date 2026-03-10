<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'supplier_kode' => 'SP01',
                'supplier_nama' => 'PT Sumber Jaya',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'supplier_kode' => 'SP02',
                'supplier_nama' => 'CV Makmur',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'supplier_kode' => 'SP03',
                'supplier_nama' => 'PT Berkah',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('m_supplier')->insert($data);
    }
}