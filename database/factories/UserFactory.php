<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // password
            'remember_token' => Str::random(10),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function ($user) {
            // Asign role according to user type
            if ($this->faker->boolean(20)) {
                $user->assignRole('trainer');
                \App\Models\Trainer::factory()->create(['user_id' => $user->id]);
            } else {
                $user->assignRole('member');
                \App\Models\Member::factory()->create(['user_id' => $user->id]);
            }
        });
    }
}
