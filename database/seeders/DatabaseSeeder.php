<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin user - verified, known credentials
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => 'password', // Will be hashed automatically
        ]);

        // Test user - verified, known credentials
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
        ]);

        // Additional test users with known credentials
        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => 'password',
        ]);

        User::factory()->create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'password' => 'password',
        ]);

        User::factory()->create([
            'name' => 'Alice Johnson',
            'email' => 'alice@example.com',
            'password' => 'password',
        ]);

        User::factory()->create([
            'name' => 'Bob Wilson',
            'email' => 'bob@example.com',
            'password' => 'password',
        ]);

        User::factory()->create([
            'name' => 'Charlie Brown',
            'email' => 'charlie@example.com',
            'password' => 'password',
        ]);

        // 10 additional verified users with random data
        User::factory(10)->create();

        // 5 unverified users to test email verification flow
        User::factory(5)->unverified()->create();
    }
}
