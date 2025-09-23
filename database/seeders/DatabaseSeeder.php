<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);

        // Initialize the counters table with a user_code entry
//        DB::table('counters')->insert([
//            'name' => 'user_code',
//            'value' => 0,
//        ],[
//            'name' => 'kyc_code',
//            'value' => 0,
//        ]);
    }
}
