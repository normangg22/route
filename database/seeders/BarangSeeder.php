<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            ['nama' => 'bedak', 'varian' => 'cair', 'harga_beli' => 1000, 'harga_jual' => 1500],
            ['nama' => 'susu', 'varian' => 'bubuk', 'harga_beli' => 1500, 'harga_jual' => 2500],
            ['nama' => 'roko', 'varian' => 'filter', 'harga_beli' => 15000, 'harga_jual' => 21000],
            ['nama' => 'ciki', 'varian' => 'keju', 'harga_beli' => 500, 'harga_jual' => 1000],
            ['nama' => 'coklat', 'varian' => 'kacang', 'harga_beli' => 10000, 'harga_jual' => 15000]
        ];
        DB::table('barang')->insert($data);
    }
}
