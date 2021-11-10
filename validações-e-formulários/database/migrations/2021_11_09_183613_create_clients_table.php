<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('document_number');
            $table->string('email');
            $table->string('phone');
            $table->boolean('defaulter'); //inadiplete
            $table->date('date_birth');
            $table->char('sex', 10); // Armazenamento fixo, quantidade de caracteres aceitos
            $table->enum('marital_status', array_keys(\App\Models\Client::MARITAL_STATUS)); // Acessando a key do meu array
            $table->string('physical_disability')->nullable(); // Campo não obrigatório
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
