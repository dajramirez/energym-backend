<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'membership_id' => \App\Models\Membership::factory(),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'dni' => $this->faker->unique()->numerify('########'),
            'phone' => $this->faker->phoneNumber,
            'emergency_phone' => $this->faker->phoneNumber,
            'birthdate' => $this->faker->dateTimeBetween('-60 years', '-18 years')->format('Y-m-d'),
            'gender' => $this->faker->randomElement(['male', 'female', 'other']),
            'address' => $this->faker->address,
            'health_notes' => $this->faker->sentence,
            'start_date' => $this->faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
            'end_date' => $this->faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
            'status' => $this->faker->randomElement(['active', 'suspended', 'expired']),
        ];
    }
}
