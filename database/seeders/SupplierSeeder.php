<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['supplier_id' => 1, 'supplier_nama' => 'PT Elektronik Jaya', 'supplier_alamat' => 'Jakarta', 'supplier_telepon' => '08123456789'],
            ['supplier_id' => 2, 'supplier_nama' => 'CV Maju Jaya', 'supplier_alamat' => 'Bandung', 'supplier_telepon' => '08129876543'],
            ['supplier_id' => 3, 'supplier_nama' => 'UD Sukses Makmur', 'supplier_alamat' => 'Surabaya', 'supplier_telepon' => '08567891234'],
        ];
        DB::table('m_supplier')->insert($data);
    }
}