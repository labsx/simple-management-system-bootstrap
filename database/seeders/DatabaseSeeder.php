<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Student;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    
    {
        \App\Models\Student::factory(100)->create();
        $user = User::create([
            'first_name' => 'admin',
            'middle_name' => 'admin',
            'last_name' => 'Admin',
            'email' => 'admin@gmail.com', 
            'password' => 'password'
        ]);
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
    
}
