<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'name' => 'MyINK',
            'description' => $this->faker->text(),
            'email' => 'myink@contact.com',
            'adress' => $this->faker->name(),
            'phone_number' => $this->faker->numberBetween(600000000,699999999),
            'city' => 'Gijón',
            'location' => 'Asturias',
            'country' => 'Spain'
    
        ];
    }
}
