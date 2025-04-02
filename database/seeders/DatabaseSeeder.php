<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Question;
use App\Models\User;
use App\Models\Vote;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       // User::factory(10)->create();
       // Question::factory(20)->create();
       // Answer::factory(150)->create();  
       // Vote::factory(300)->create();

       User::create([
        'username' => 'admin',
        'name' => 'admin',
        'email' => 'admin123@gmail.com',
        'email_verified_at' => now(),
        'password' => Hash::make('admin2025'),
        'remember_token' => "0123456789",
        'isadmin' => true,
       ]);

    }
}
