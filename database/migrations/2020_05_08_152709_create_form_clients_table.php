<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_clients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->string('code_form')->nullable();//CODIGO DEL FORMULARIO
            $table->enum('state', ['sold', 'pending','quotation'])->nullable();//SOLD =VENDIDO,PENDING=PENDIENTE,QUOTATION=COTIZACION
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
        Schema::dropIfExists('form_clients');
    }
}
