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
            $table->string('name',100);
            $table->string('last_name',100);//APELLIDO PATERNO
            $table->string('mother_last_name',100);//APELLIDO DE LA MADRE
            $table->string('code')->nullable();//CODIGO DE CLIENTE
            $table->integer('identity_card');//CARNET DE IDENTIDAD
            $table->enum('department', ['LA PAZ', 'COCHABAMBA','ORURO','POTOSI','TARIJA','BENI','CHUQUISACA','SANTA CRUZ','PANDO'])->nullable();
            $table->string('fhone',50);//TELEFONO
            $table->string('cell_fhone',50);//NUMERO DE CELULAR
            $table->string('provider_address',100);//DIRECCION DEL CLIENTE
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
        Schema::dropIfExists('clients');
    }
}
