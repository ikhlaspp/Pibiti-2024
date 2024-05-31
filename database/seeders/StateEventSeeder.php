<?php

namespace Database\Seeders;

use App\Models\StateEvent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StateEvent::create([
            'status' => false
        ]);
    }
}
