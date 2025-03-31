<?php

namespace Database\Seeders;

use App\Models\GymClass;
use App\Models\Trainer;
use Illuminate\Database\Seeder;

class GymClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trainers = Trainer::all();
        $class_types = ['Yoga', 'CrossFit', 'Spinning', 'Zumba', 'Boxing'];
        $faker = \Faker\Factory::create();

        foreach ($class_types as $type) {
            GymClass::create([
                'trainer_id' => $trainers->random()->id,
                'name' => $type,
                'description' => $faker->sentence(),
                'schedule' => 'Monday and Wednesday at ' . rand(9, 19) . ':00',
                'duration' => 60,
                'max_capacity' => 15,
                'status' => 'active',
            ]);
        }
    }
}
