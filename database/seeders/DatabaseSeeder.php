<?php

namespace Database\Seeders;

use App\Models\GymClass;
use App\Models\Membership;
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
        $this->call([
            RoleSeeder::class,
            AdminSeeder::class,
            MembershipSeeder::class,
            UserSeeder::class,
            GymClassSeeder::class,
        ]);
    }
}
