<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        $admins = [
            [
                'name' => 'Admin User 1',
                'email' => 'admin@demo.com',
                'password' => 'admin12456',
            ],
            [
                'name' => 'Admin User 2',
                'email' => 'admin2@example.com',
                'password' => 'password456',
            ],
            // Add more admin users as needed
        ];

        foreach ($admins as $admin) {
            User::firstOrCreate(
                ['email' => $admin['email']],
                [
                    'name' => $admin['name'],
                    'password' => Hash::make($admin['password']),
                    'email_verified_at' => now(),
                    'is_admin' => true,
                ]
            );
        }
    }
}