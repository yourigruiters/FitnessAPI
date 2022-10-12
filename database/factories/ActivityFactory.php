<?php

namespace Database\Factories;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    private $date = "2023-01-01";
    private $activityTypes = ['gym'];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'program_id' => fake()->numberBetween(1, 2),
            'activity_type' => Arr::random($this->activityTypes),
            'activity_date' => $this->getIntervalDate(),
            'minutes' => fake()->numberBetween(45, 105),
        ];
    }

    private function getIntervalDate() {
        $this->date = date('Y-m-d', strtotime($this->date. ' + 1 days'));
        return $this->date;
    }
}
