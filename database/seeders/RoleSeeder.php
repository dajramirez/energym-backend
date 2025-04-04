<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'super-admin']);
        Role::create(['name' => 'manager']);
        Role::create(['name' => 'trainer']);
        Role::create(['name' => 'reception']);
        Role::create(['name' => 'member']);
    }
}
