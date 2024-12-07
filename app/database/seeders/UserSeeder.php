<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'membre',
                'email' => 'membre@gmail.com',
                'password' => 'membre',
                'role' => User::MEMBRE,
            ],
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => 'admin',
                'role' => User::ADMIN,
            ],
        ];

        foreach ($users as $user) {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make($user['password']),
            ])->assignRole($user['role']);
        }
    }
}
