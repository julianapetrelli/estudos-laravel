<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
require_once __DIR__.'/../faker_data/document_number.php';
require_once __DIR__.'/../faker_data/status.php';
require_once __DIR__.'/../faker_data/sexo.php';

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $cpfs = cpfs();
        $cnpjs = cnpjs();
        $status = status();
        $sexo = sexo();

        Client::factory()
        ->state(\App\Models\Client::class);
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'phone' => $this->faker->phoneNumber(),
            'defaulter' => rand(0,1)
        ];

        Client::factory()
        ->state(\App\Models\Client::class, \App\Models\Client::TYPE_INDIVIDUAL);
        return [
            'date_birth' => $this->faker->dateTime(),
            'document_number' => $cpfs[array_rand($cpfs,1)],
            'sex' => $sexo[array_rand($sexo,1)],
            'material_status' => $status[array_rand($status,1)],
            'physical_disability' => rand(1, 10) % 2 == 0 ? $this->faker->word : null,
            'client_type' => \App\Models\Client::TYPE_INDIVIDUAL
        ];

        Client::factory()
        ->state(\App\Models\Client::class, \App\Models\Client::TYPE_LEGAL);
        return [
            'document_number' => $cnpjs[array_rand($cnpjs,1)],
            'company_name' => $this->faker->company,
            'client_type' => \App\Models\Client::TYPE_LEGAL
        ];
    }
}
