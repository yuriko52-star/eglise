<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CakeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name'=>$this->faker->name,
            'email'=>$this->faker->safeEmail,
            'tel'=>$this->faker->randomNumber(9,true),
            'number'=>$this->faker->numberBetween(1,10),
        ];
    }
}
