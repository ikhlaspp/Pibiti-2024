<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Token;
use App\Models\TugasUser;
use Illuminate\Database\Seeder;
use Database\Seeders\UsersTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            TokensTableSeeder::class,
            UsersTableSeeder::class,
            TugasAdminTableSeeder::class,
            TugasUsersTableSeeder::class,
            StateEventSeeder::class,
            PostTestTableSeeder::class,
            PostTestUsersTableSeeder::class,
        ]);
        // $this->call([   
        //     TokensTableSeeder::class,
        //     UsersTableSeeder::class,
        //     // TugasAdminTableSeeder::class,
        //     // TugasUsersTableSeeder::class,
        //     StateEventSeeder::class,
        //     // PostTestTableSeeder::class,
        //     // PostTestUsersTableSeeder::class,
        // ]);

        // $this->call([   
        //     TokensTableSeeder::class,
        // ]);

        // $this->call([   
        //     TugasUsersTableSeeder::class,
        // ]);


    }
}
