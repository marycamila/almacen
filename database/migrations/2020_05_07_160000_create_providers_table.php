<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->integer('nit');// NUMERO DE IDENTIFICVACION TRIBUTARIA
            $table->string('provider_name',100);//NOMBRE DEL PROVEEDOR
            $table->string('fhone',50);//TELEFONO
            $table->string('provider_address',100);//DIRECCION DEL PROVEEDOR
            $table->text('observation');//OBSERVACIONES DEL REGISTRO
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
        Schema::dropIfExists('providers');
    }
}
