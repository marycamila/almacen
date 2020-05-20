<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_entries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('batch_entry_id')->unsigned();
            $table->foreign('batch_entry_id')->references('id')->on('batch_entries');
            $table->unsignedBigInteger('mark_product_id')->unsigned();
            $table->foreign('mark_product_id')->references('id')->on('mark_product');
            $table->integer('product_quantity');//CANTIDAD DE PRODUCTO INGRESADO A ALMACEN
            $table->float('unit_price_buy',10,2)->default(0);//PRECIO UNITARIO COMPRA
            $table->float('unit_price_sale',10,2)->default(0);//PRECIO UNITARIO VENTA
            $table->float('unit_price',10,2)->default(0);//PRECIO UNITARIO 
            $table->integer('existing_quantity');//CANTIDAD DE PRODUCTO EN EXISTENCIA
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
        Schema::dropIfExists('product_entries');
    }
}
