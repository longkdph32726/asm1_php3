<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 5; $i++) {
            $data = [
                'name'=>Fake()->text(rand(10,20)),
            ];
            echo $i . PHP_EOL;
            DB::table('categories')->insert($data);
        }
    }
}
