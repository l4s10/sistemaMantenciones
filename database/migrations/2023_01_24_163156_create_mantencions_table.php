<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mantencions', function (Blueprint $table) {
            $table->id();

            //Campos de la tabla de la BDD
            $table->string('Nombre');
            $table->string('Tipo');
            $table->integer('Costo');
            $table->string('Empresa');
            $table->date('Fecha');
            $table->string('Descripcion');

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
        Schema::dropIfExists('mantencions');
    }
};
