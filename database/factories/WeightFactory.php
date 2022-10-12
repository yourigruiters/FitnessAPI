<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Weight>
 */
class WeightFactory extends Factory
{
    private $date = "2023-01-01";

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'weight' => fake()->randomFloat(1, 84, 86),
            'date' => $this->getIntervalDate(),
        ];
    }

    private function getIntervalDate() {
        $this->date = date('Y-m-d', strtotime($this->date. ' + 1 days'));
        return $this->date;
    }
}
