<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostTestUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('post_test_users')->insert([
            'user_id' => '1',
            'postTest_id' => '1',
            'hari' => '2023-11-25',
            'foto' => 'ini foto',
            'status' => '0'
        ]);
    }
}
