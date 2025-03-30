<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Membership>
 */
class MembershipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $types = ['Basic', 'Premium', 'Gold', 'Student', 'Corporate'];

        return [
            'name' => $this->faker->randomElement($types),
            'description' => $this->faker->sentence,
            'price' => $this->faker->numberBetween(30, 150),
            'duration_days' => $this->faker->randomElement([30, 90, 180, 365]),
            'features' => json_encode([
                '24/7 Access',
                'Free Classes',
                'Personal Trainer Discount',
                'Locker',
            ]),
            'active' => true,
        ];
    }
}
