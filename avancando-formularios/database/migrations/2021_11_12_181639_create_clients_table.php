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
            $table->string('document_number')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->boolean('defaulter'); //inadiplete
            $table->date('date_birth')->nullable();
            $table->char('sex', 10)->nullable(); //Armazenamento fixo, quantidade de caracteres aceitos
            $table->string('physical_disability')->nullable(); // Campo não obrigatório
            $table->string('company_name')->nullable();;
            $table->string('client_type')->nullable();;
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
