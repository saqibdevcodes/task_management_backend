<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Task;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a test user
        $user = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password123'),
        ]);

        for ($i = 1; $i <= 6; $i++) {
            Task::create([
                'title' => 'Sample Task ' . $i,
                'is_completed' => false,
                'user_id' => $user->id,
            ]);
        }
    }
}
