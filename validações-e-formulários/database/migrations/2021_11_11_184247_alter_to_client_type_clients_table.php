<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class AlterToClientTypeClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->string('document_number')->unique()->change();
            $table->date('date_birth')->nullable()->change();
            $table->string('sex')->nullable()->change();
            $table->string('marital_status', array_keys(\App\Models\Client::MARITAL_STATUS))->nullable()->change();
            $maritalStatus = array_keys(\App\Models\Client::MARITAL_STATUS);
            $maritalStatusString = array_map(function($value){
                return "'$value'";
            },$maritalStatus);
            $maritalStatusEnum = implode(',',$maritalStatusString);
            $table->string('company_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->dropUnique('clients_document_number_unique');
            $table->date('date_birth')->change();
            $table->char('sex', 10);
            $table->enum('marital_status', array_keys(\App\Models\Client::MARITAL_STATUS));
            $table->dropColumn('company_name');
        });
    }
}
