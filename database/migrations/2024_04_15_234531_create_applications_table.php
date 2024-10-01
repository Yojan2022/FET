<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class createApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('name'); /* Nombre */
            $table->string('last_name'); /* Apellidos */
            $table->date('date_of_birth'); /* Fecha de nacimiento */
            $table->string('father'); /* Padre */
            $table->string('mom'); /* Madre */
            $table->string('godfather'); /* Padrino */
            $table->string('godmother'); /* Madrina */
            $table->string('christening'); /* bautizo */
            $table->string('paternal_grandfather'); /* abuelo por parte de papa */
            $table->string('paternal_grandmother'); /* abuela por parte de papa */
            $table->string('maternal_grandfather'); /* Abuelo por parte de mama */
            $table->string('maternal_grandmother'); /* Abuela por parte de mama */
            $table->string('solicitante');
            $table->string('telephone_1'); /* Numero de telefono 1 */
            $table->string('telephone_2')->nullable(); /* Numero de telefono 2 */
            $table->string('address'); /* Direccion */
            $table->string('authenticated'); /* Autenticada */
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
        Schema::dropIfExists('applications');
    }
};
