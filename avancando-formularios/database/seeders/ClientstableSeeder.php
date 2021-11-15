<?php

namespace Database\Seeders;

use App\Models\Client;
use Carbon\Factory;
use Illuminate\Database\Seeder;

class ClientstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::factory()->count(10)->state(\App\Models\Client::TYPE_INDIVIDUAL)->create();
        Client::factory()->count(10)->state(\App\Models\Client::TYPE_LEGAL)->create();
    }
}
