<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Membership;

class MembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

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
            ],
            [
                'name' => 'Annual Gold',
                'description' => 'Annual membership with maximun benefits',
                'price' => 499.99,
                'duration_days' => 365,
                'features' => [
                    '24/7 access',
                    'Unlimited group classes',
                    '2 personal training sessions per month',
                    'Towel and locker included',
                    'Supplements discounts',
                ],
                'active' => true,
            ],
            [
                'name' => 'Couple',
                'description' => 'Membership for couples',
                'price' => 89.99,
                'duration_days' => 30,
                'features' => [
                    'Standard access (6:00-23:00) for both members',
                    '1 group class per week for each member',
                    'Special activities discounts',
                ],
                'active' => true,
            ]
        ];

        foreach ($memberships as $m) {
            Membership::create([
                'name' => $m['name'],
                'description' => $m['description'],
                'price' => $m['price'],
                'duration_days' => $m['duration_days'],
                'features' => json_encode($m['features']),
                'active' => $m['active'],
            ]);
        }

        Membership::factory()
            ->count(2)
            ->inactive()
            ->create();
    }
}
