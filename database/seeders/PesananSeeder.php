<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PesananSeeder extends Seeder
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
            ['nama_pelanggan' => 'winaf', 'nama_barang' => 'roko', 'qty' => 3, 'tgl_pesan' => '2021-07-12'],
            ['nama_pelanggan' => 'bambang', 'nama_barang' => 'ciki', 'qty' => 1, 'tgl_pesan' => '2021-07-12'],
            ['nama_pelanggan' => 'komar', 'nama_barang' => 'bedak', 'qty' => 5, 'tgl_pesan' => '2021-07-15'],
            ['nama_pelanggan' => 'usman', 'nama_barang' => 'coklat', 'qty' => 2, 'tgl_pesan' => '2021-07-01'],
            ['nama_pelanggan' => 'moncel', 'nama_barang' => 'susu', 'qty' => 10, 'tgl_pesan' => '2021-07-07']
        ];
        DB::table('pesanan')->insert($data);
    }
}
