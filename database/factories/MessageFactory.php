<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'message' => $this->faker->paragraph(),
        ];
    }
}
