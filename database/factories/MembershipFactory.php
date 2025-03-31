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
        return [
            'name' => $this->faker->word() . ' Membership',
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 50, 200),
            'duration_days' => 30,
            'features' => json_encode(['Basic access']),
            'active' => true,
        ];
    }

    public function inactive(): static
    {
        return $this->state([
            'active' => false,
            'name' => 'Old ' . $this->faker->word() . ' Membership',
            'features' => json_encode(['Legacy access']),
        ]);
    }
}
