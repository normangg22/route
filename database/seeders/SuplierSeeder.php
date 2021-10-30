<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class SuplierSeeder extends Seeder
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
            ['nama' => 'rio', 'alamat' => 'jl.kopo', 'kode_pos' => 'ba32ks', 'kota' => 'bandung'],
            ['nama' => 'rehan', 'alamat' => 'jl.cikutra', 'kode_pos' => 'ba42ks', 'kota' => 'bandung'],
            ['nama' => 'zulfan', 'alamat' => 'jl.ciguriang', 'kode_pos' => 'kd34s', 'kota' => 'bandung'],
            ['nama' => 'ruslan', 'alamat' => 'jl.cibedug', 'kode_pos' => 'dsw343', 'kota' => 'bandung'],
            ['nama' => 'resta', 'alamat' => 'jl.poek', 'kode_pos' => 'ds232', 'kota' => 'bandung']
        ];
        DB::table('suplier')->insert($data);
    }
}
