<?php

namespace Database\Factories;
use Faker\Generator as Faker;

use Illuminate\Database\Eloquent\Factories\Factory;
require_once __DIR__.'/../faker_data/document_number.php';

class ClientFactory extends Factory
{

    public function definition()
    {

        $cpfs = cpfs();
        return [
            'name' => $this->faker->name(),
            'document_number' => $cpfs[array_rand($cpfs, 1)],
            'email' => $this->faker->email(),
            'phone' => $this->faker->phoneNumber(),
            'defaulter' => rand(0,1),
            'date_birth' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'sex' => rand(1,10) % 2 == 0 ? 'm' : 'f',
            'marital_status' => rand(1,3),
            'physical_disability' => rand(1,10) % 2 == 0 ?  $this->faker->word() : null
        ];
    }
}
