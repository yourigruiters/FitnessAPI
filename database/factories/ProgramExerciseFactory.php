<?php

namespace Database\Factories;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProgramExercise>
 */
class ProgramExerciseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'program_id' => fake()->numberBetween(1, 2),
            'exercise_id' => fake()->numberBetween(1, 40),
            'details' => fake()->sentence(30),
            'data' => json_encode([
                "warmup" => [
                    "amount" => fake()->numberBetween(0, 2),
                    "repetition" => fake()->numberBetween(2, 15),
                    "weight" => fake()->numberBetween(10, 30),
                ],
                "set" => [
                    "amount" => fake()->numberBetween(1, 4),
                    "repetition" => fake()->numberBetween(2, 15),
                    "weight" => fake()->numberBetween(10, 30),
                ]
            ]),
            'program_day' => fake()->numberBetween(1, 5),
        ];
    }
}
