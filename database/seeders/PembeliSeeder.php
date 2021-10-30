<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PembeliSeeder extends Seeder
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
            ['nama' => 'irfan', 'jns_kelamin' => 'laki-laki', 'alamat' => 'jl.cikoneng', 'kode_pos' => 'b023jk', 'kota' => 'bandung', 'tgl_lahir' => '1998-09-30'],
            ['nama' => 'indah', 'jns_kelamin' => 'perempuan', 'alamat' => 'jl.cisirung', 'kode_pos' => 'b024pk', 'kota' => 'bandung', 'tgl_lahir' => '2000-03-05'],
            ['nama' => 'yola', 'jns_kelamin' => 'perempuan', 'alamat' => 'jl.malioboro', 'kode_pos' => 'c932ie', 'kota' => 'jogja', 'tgl_lahir' => '1994-12-19'],
            ['nama' => 'usep', 'jns_kelamin' => 'laki-laki', 'alamat' => 'jl.cibiru', 'kode_pos' => 'j283ih', 'kota' => 'bandung', 'tgl_lahir' => '2002-09-24'],
            ['nama' => 'reza', 'jns_kelamin' => 'laki-laki', 'alamat' => 'jl.ambon', 'kode_pos' => 'a232ea', 'kota' => 'bandung', 'tgl_lahir' => '1999-11-12']
        ];
        DB::table('pembeli')->insert($data);
    }
}
