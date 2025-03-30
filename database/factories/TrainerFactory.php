<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trainer>
 */
class TrainerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $specializations = [
            'Crossfit',
            'Yoga',
            'Pilates',
            'Bodybuilding',
            'Functional Training',
            'Boxing',
            'Nutrition'
        ];

        return [
            'user_id' => \App\Models\User::factory(),
            'specialization' => $this->faker->randomElement($specializations),
            'certification' => $this->faker->randomElement(['NSCA-CPT', 'ISSA', 'CEP', 'SICCED-CONADE', 'CPE', 'TSAF']),
            'years_experience' => $this->faker->numberBetween(1, 20),
            'bio' => $this->faker->paragraph,
            'availability' => json_encode([
                'days' => ['Monday', 'Wednesday', 'Friday'],
                'hours' => ['09:00-12:00', '16:00-20:00'],
            ])
        ];
    }
}
