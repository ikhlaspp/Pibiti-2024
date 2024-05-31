<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;

class TugasUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('tugas_users')->insert([
            'users_id' => '1',
            'url' => 'https://www.youtube.com/watch?v=ZGJAjRDdyb8&t=136s',
            'hari' => '2',
            'status' => '0',
            'tugas_id' => '2',
        ]);  

        DB::table('tugas_users')->insert([
            'users_id' => '2',
            'url' => 'https://www.youtube.com/watch?v=ZGJAjRDdyb8&t=136s',
            'hari' => '1',
            'status' => '1',
            'tugas_id' => '1',
            'nilai' => '30',
        ]);

        DB::table('tugas_users')->insert([
            'users_id' => '1',
            'url' => 'https://www.youtube.com/watch?v=ZGJAjRDdyb8&t=136s',
            'hari' => '2',
            'status' => '0',
            'tugas_id' => '3',
        ]);        
        
    }
}
