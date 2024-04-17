<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_apellidos');    
            $table->date('fecha_nacimiento');      
            $table->string('mama');                 
            $table->string('padrino');              
            $table->string('madrina');              
            $table->date('fecha_bautizo');        
            $table->string('abuelo_paterno');       
            $table->string('abuela_paterna');       
            $table->string('abuelo_materno');       
            $table->string('abuela_materna');       
            $table->string('solicitante');          
            $table->string('telefono');            
            $table->string('direccion');           
            $table->string('autenticada'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
