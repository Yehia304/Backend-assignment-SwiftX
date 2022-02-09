<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JoggingTimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'distance' => rand(0,199),
            'date' => date('y-m-d'),
            'time' => now()
        ];
    }
}
