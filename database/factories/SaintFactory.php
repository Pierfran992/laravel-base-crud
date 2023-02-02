<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SaintFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake() ->  firstNameMale(),
            'luogo_di_nascita' => fake() ->  city(),
            'data_denedizione' => fake() ->  date(),
            'numero_miracoli' => fake() ->  numberBetween(1, 10000),
        ];
    }
}
