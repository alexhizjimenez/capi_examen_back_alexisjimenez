<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

class UserDomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'user_id' => rand(1, 100),
            'domicilio' => $this->faker->sentence(10),
            'numero_exterior' => rand(200, 800),
            'colonia' => $this->faker->sentence(10),
            'cp' => rand(10000, 70000),
            'ciudad' => $this->faker->sentence(10),
        ];
    }
}
