<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventarioTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario', function (Blueprint $table) {
            $table->increments('id');
            $table->double('precioCosto',50,2)->nullable()->default(null);
            $table->double('precioVenta',50,2)->nullable()->default(null);
            $table->double('precioClienteEs',70,2)->nullable()->default(null);
            $table->double('precioDistribuidor',70,2)->nullable()->default(null);
            $table->double('cantidad',70,2)->nullable()->default(0);
            $table->double('minimo',70,2)->nullable()->default(0);
            $table->double('descuento',70,2)->nullable()->default(null);
            $table->tinyInteger('estado')->nullable()->default(1);

            $table->integer('sucursal')->unsigned()->nullable()->default(null);
            $table->foreign('sucursal')->references('id')->on('sucursales')->onDelete('cascade');

            $table->integer('producto')->unsigned()->nullable()->default(null);
            $table->foreign('producto')->references('id')->on('productos')->onDelete('cascade');

            $table->softDeletes();
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
        Schema::dropIfExists('inventario');
    }
}
