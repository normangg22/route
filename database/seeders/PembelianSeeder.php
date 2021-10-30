<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PembelianSeeder extends Seeder
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
            ['nama_barang' => 'bedak', 'nama_suplier' => 'wawan', 'qty' => 10, 'tanggal' => '2021-06-17'],
            ['nama_barang' => 'susu', 'nama_suplier' => 'idan', 'qty' => 15, 'tanggal' => '2021-06-17'],
            ['nama_barang' => 'roko', 'nama_suplier' => 'dadang', 'qty' => 15, 'tanggal' => '2021-06-15'],
            ['nama_barang' => 'ciki', 'nama_suplier' => 'iwan', 'qty' => 10, 'tanggal' => '2021-06-18'],
            ['nama_barang' => 'coklat', 'nama_suplier' => 'adul', 'qty' => 10, 'tanggal' => '2021-06-14']
        ];
        DB::table('pembelian')->insert($data);
    }
}
