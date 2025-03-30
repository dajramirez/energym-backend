<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $memberships = [
            [
                'name' => 'Basic',
                'description' => 'Basic access to the gym with standard hours',
                'price' => 39.99,
                'duration_days' => 30,
                'features' => [
                    'Access from Monday to Friday (8:00-22:00)',
                    'Access to lockers',
                    '1 group class per week',
                ],
                'active' => true,
            ],
            [
                'name' => 'Premium',
                'description' => 'Complete access with additional benefits',
                'price' => 59.99,
                'duration_days' => 30,
                'features' => [
                    '24/7 access',
                    'Unlimited group classes',
                    'Access to sauna and steam room',
                    '1 personal training session per month',
                ],
                'active' => true,
            ],
            [
                'name' => 'Student',
                'description' => 'Special membership for students',
                'price' => 29.99,
                'duration_days' => 30,
                'features' => [
                    'Standard access (6:00-23:00)',
                    'Special classes discounts',
                    'Valid student ID required',
                ],
                'active' => true,
            ]
        ]
    }
}
