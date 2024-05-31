<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TokensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tokens')->insert([
            'hari' => '1',
            'token' => '9862',
            'status' => false,
        ]);
        DB::table('tokens')->insert([
            'hari' => '2',
            'token' => '1952',
            'status' => false,
        ]);
        DB::table('tokens')->insert([
            'hari' => '3',
            'token' => '5346',
            'status' => false,
        ]);
        DB::table('tokens')->insert([
            'hari' => '4',
            'token' => '2346',
            'status' => false,
        ]);
        DB::table('tokens')->insert([
            'hari' => '5',
            'token' => '9064',
            'status' => false,
        ]);
        DB::table('tokens')->insert([
            'hari' => '6',
            'token' => '3319',
            'status' => false,
        ]);
        // DB::table('tokens')->insert([
        //     'hari' => '4',
        //     'token' => '2078',
        // ]);
    }
}
