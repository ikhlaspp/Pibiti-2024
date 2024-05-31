<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TugasAdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tugas_admins')->insert([
            'id' => '1',
            'urltugas' => 'https://www.youtube.com/watch?v=l4SMFhRi6dw',
            'hari' => '2023-10-05',
            'judul' => 'tes',

        ]);

        DB::table('tugas_admins')->insert([
            'id' => '2',
            'urltugas' => 'https://www.youtube.com/watch?v=l4SMFhRi6dw',
            'hari' => '2023-10-05',
            'judul' => 'tes',

        ]);

        DB::table('tugas_admins')->insert([
            'id' => '3',
            'urltugas' => 'https://www.youtube.com/watch?v=l4SMFhRi6dw',
            'hari' => '2023-11-25',
            'judul' => 'tes',

        ]);
    }
}
