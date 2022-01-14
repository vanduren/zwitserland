<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HouseFactory extends Factory
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
            'description' =>$this->faker->text(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'photo' => $this->faker->imageUrl(),
        ];
    }
}
