<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSoldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_solds', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity_sold');//CANTIDAD DE PRODUCTO VENDIDO
            $table->unsignedBigInteger('form_client_id')->unsigned();
            $table->foreign('form_client_id')->references('id')->on('form_clients');
            $table->unsignedBigInteger('product_entrie_id')->unsigned();
            $table->foreign('product_entrie_id')->references('id')->on('product_entries');
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
        Schema::dropIfExists('product_solds');
    }
}
