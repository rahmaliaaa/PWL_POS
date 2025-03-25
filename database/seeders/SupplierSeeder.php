<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        $data_supplier = [
            [
                'supplier_kode' => 'SP001',
                'supplier_nama' => 'PT Mencari Cinta Sejati',
                'supplier_alamat' => 'Jl. Industri No. 10, Jawa Barat',
                'created_at' => Carbon::now()
            ],
            [
                'supplier_kode' => 'SP002',
                'supplier_nama' => 'PT Ajinomoto',
                'supplier_alamat' => 'Jl. Pahlawan No. 25, Surabaya',
                'created_at' => Carbon::now()
            ],
            [
                'supplier_kode' => 'SP003',
                'supplier_nama' => 'PT Astra',
                'supplier_alamat' => 'Jl. Gatot Subroto No. 27, Bandung',
                'created_at' => Carbon::now()
            ],
        ];

        DB::table('m_supplier')->insert($data_supplier);
    }
}