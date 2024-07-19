<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Testing\Fakes\Fake;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $data = [
                'name'=>Fake()->text(20),
                'tieude'=> Fake()->text(50),
                'noidung'=>Fake()->text(200),
                'idcate'=>rand(1,5),
            ];
            echo $i . PHP_EOL;
            DB::table('posts')->insert($data);
        }

       
    }
}
