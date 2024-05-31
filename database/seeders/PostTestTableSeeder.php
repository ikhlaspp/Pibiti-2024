<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostTestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('post_tests')->insert([
            'id' => '1',
            'urlpost' => 'http://postest1.com',
            'hari' => '2023-10-25',
        ]);
    }
}
