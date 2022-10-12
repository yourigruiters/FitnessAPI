<?php

namespace Database\Factories;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Program>
 */
class ProgramFactory extends Factory
{
    private $workoutRoutines = ['full-body', 'bro-split', 'split', 'bodyweight']; 
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'program_title' => fake()->unique()->word,
            'program_description' => fake()->sentence(30),
            'program_type' => Arr::random($this->workoutRoutines)
        ];
    }
}
