<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 2 trainers
        User::factory()
            ->count(2)
            ->create()
            ->each(fn($user) => $user->assignRole('trainer'));

        // Create 20 members
        User::factory()
            ->count(20)
            ->create()
            ->each(fn($user) => $user->assignRole('member'));
    }
}
