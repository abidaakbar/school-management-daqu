<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Pastikan role admin dan user ada
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $userRole = Role::firstOrCreate(['name' => 'user']);

        // Admin
        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password'), // ganti dengan password aman
            ]
        );
        $admin->syncRoles([$adminRole]);

        // User 1
        $user1 = User::firstOrCreate(
            ['email' => 'user1@example.com'],
            [
                'name' => 'User One',
                'password' => Hash::make('password'),
            ]
        );
        $user1->syncRoles([$userRole]);

        // User 2
        $user2 = User::firstOrCreate(
            ['email' => 'user2@example.com'],
            [
                'name' => 'User Two',
                'password' => Hash::make('password'),
            ]
        );
        $user2->syncRoles([$userRole]);

        $this->command->info('✅ Admin dan 2 User berhasil disiapkan.');
    }
}
