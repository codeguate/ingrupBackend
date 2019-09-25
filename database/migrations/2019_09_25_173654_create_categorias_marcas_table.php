<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasMarcasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias_marcas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('foto1')->nullable()->default(null);
            $table->string('foto2')->nullable()->default(null);
            $table->string('foto3')->nullable()->default(null);
            $table->string('foto4')->nullable()->default(null);
            $table->string('foto5')->nullable()->default(null);
            $table->tinyInteger('agregar')->default(0);
            $table->tinyInteger('modificar')->default(0);
            $table->tinyInteger('mostrar')->default(0);
            $table->tinyInteger('eliminar')->default(0);
            
            $table->integer('categoria')->unsigned();
            $table->foreign('categoria')->references('id')->on('categorias')->onDelete('cascade');
            $table->integer('marca')->unsigned();
            $table->foreign('marca')->references('id')->on('marcas')->onDelete('cascade');
            
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
        Schema::dropIfExists('categorias_marcas');
    }
}
