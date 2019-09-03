<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasdetalleTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comprasdetalle', function (Blueprint $table) {
            $table->increments('id');
            $table->double('subtotal',15,2)->nullable()->default(null);
            $table->double('cantidad',15,2)->nullable()->default(null);
            $table->double('costo',17,2)->nullable()->default(null);
            $table->double('precio',17,2)->nullable()->default(null);
            $table->double('precioE',17,2)->nullable()->default(null);
            $table->double('precioM',17,2)->nullable()->default(null);
            $table->double('descuento',17,2)->nullable()->default(null);
            $table->date('vencimiento')->nullable()->default(null);
            $table->string('garantia')->nullable()->default(null);
            $table->tinyInteger('estado')->nullable()->default(1);

            $table->integer('compra')->unsigned()->nullable()->default(null);
            $table->foreign('compra')->references('id')->on('compras')->onDelete('cascade');

            $table->integer('producto')->unsigned()->nullable()->default(null);
            $table->foreign('producto')->references('id')->on('productos')->onDelete('cascade');

            $table->integer('tipo')->unsigned()->nullable()->default(null);
            $table->foreign('tipo')->references('id')->on('tiposdetallecompras')->onDelete('cascade');

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
        Schema::dropIfExists('comprasdetalle');
    }
}
