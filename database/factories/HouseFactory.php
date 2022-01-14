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
        $first = "The ";
        $second = $this->faker->colorName() . " ";
        $third = $this->faker->randomElement(['house', 'mansion', 'villa', 'apartment']);
        return [
            'name' => $first . $second . $third,
            'description' =>$this->faker->text(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'photo' => $this->faker->imageUrl(),
        ];
    }
}
