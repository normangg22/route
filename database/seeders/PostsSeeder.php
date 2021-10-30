<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
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
            ['title' => 'Karina Oper Power',
                'content' => 'loren ipsum'],
            ['title' => 'Belajar Laravel',
                'content' => 'loren ipsum'],
            ['title' => '5 langkah tidak jadi beban keluarga', 'content' => 'loren ipsum']
        ];
        DB::table('posts')->insert($data);
    }
}
