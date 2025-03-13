<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // Barang dari supplier 1
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'TV01', 'barang_nama' => 'TV LED 32"', 'harga_beli' => 2000000, 'harga_jual' => 2500000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'HP01', 'barang_nama' => 'Smartphone 6GB RAM', 'harga_beli' => 3000000, 'harga_jual' => 3500000],
            ['barang_id' => 3, 'kategori_id' => 1, 'barang_kode' => 'LAP01', 'barang_nama' => 'Laptop Core i5', 'harga_beli' => 7000000, 'harga_jual' => 8000000],
            ['barang_id' => 4, 'kategori_id' => 1, 'barang_kode' => 'HP02', 'barang_nama' => 'Smartphone 8GB RAM', 'harga_beli' => 4000000, 'harga_jual' => 4500000],
            ['barang_id' => 5, 'kategori_id' => 1, 'barang_kode' => 'TV02', 'barang_nama' => 'TV OLED 50"', 'harga_beli' => 6000000, 'harga_jual' => 7000000],

            // Barang dari supplier 2
            ['barang_id' => 6, 'kategori_id' => 2, 'barang_kode' => 'MEJ01', 'barang_nama' => 'Meja Kayu', 'harga_beli' => 500000, 'harga_jual' => 700000],
            ['barang_id' => 7, 'kategori_id' => 2, 'barang_kode' => 'LEM01', 'barang_nama' => 'Lemari Pakaian', 'harga_beli' => 1500000, 'harga_jual' => 1800000],
            ['barang_id' => 8, 'kategori_id' => 2, 'barang_kode' => 'RAK01', 'barang_nama' => 'Rak Buku', 'harga_beli' => 750000, 'harga_jual' => 900000],
            ['barang_id' => 9, 'kategori_id' => 2, 'barang_kode' => 'KRS01', 'barang_nama' => 'Kursi Sofa', 'harga_beli' => 1200000, 'harga_jual' => 1500000],
            ['barang_id' => 10, 'kategori_id' => 2, 'barang_kode' => 'MEJ02', 'barang_nama' => 'Meja Kantor', 'harga_beli' => 1000000, 'harga_jual' => 1300000],

            // Barang dari supplier 3
            ['barang_id' => 11, 'kategori_id' => 3, 'barang_kode' => 'MIE01', 'barang_nama' => 'Mie Instan', 'harga_beli' => 2000, 'harga_jual' => 2500],
            ['barang_id' => 12, 'kategori_id' => 3, 'barang_kode' => 'SUSU01', 'barang_nama' => 'Susu Kotak', 'harga_beli' => 4000, 'harga_jual' => 5000],
            ['barang_id' => 13, 'kategori_id' => 3, 'barang_kode' => 'KOPI01', 'barang_nama' => 'Kopi Bubuk', 'harga_beli' => 15000, 'harga_jual' => 18000],
            ['barang_id' => 14, 'kategori_id' => 3, 'barang_kode' => 'GULA01', 'barang_nama' => 'Gula Pasir 1kg', 'harga_beli' => 12000, 'harga_jual' => 15000],
            ['barang_id' => 15, 'kategori_id' => 3, 'barang_kode' => 'TEH01', 'barang_nama' => 'Teh Celup', 'harga_beli' => 5000, 'harga_jual' => 6000],
        ];
        DB::table('m_barang')->insert($data);
    }
}
