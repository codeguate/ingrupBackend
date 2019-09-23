<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion')->nullable()->default(null);
            $table->string('nombre')->nullable();
            $table->string('codigo')->nullable();
            $table->string('foto')->nullable();
            $table->string('marcaDes')->nullable()->default(null);
            $table->tinyInteger('estado')->nullable()->default(1);
            $table->string('marcado')->nullable()->default(null);
            $table->string('hasModel')->nullable()->default(null);
            $table->string('fov')->nullable()->default(null);
            $table->string('near')->nullable()->default(null);
            $table->string('far')->nullable()->default(null);
            $table->string('pX')->nullable()->default(null);
            $table->string('pY')->nullable()->default(null);
            $table->string('pZ')->nullable()->default(null);
            $table->string('model')->nullable()->default(null);
            $table->string('tX')->nullable()->default(null);
            $table->string('tY')->nullable()->default(null);
            $table->string('tZ')->nullable()->default(null);
            $table->string('rX')->nullable()->default(null);
            $table->string('rY')->nullable()->default(null);
            $table->string('rZ')->nullable()->default(null);
            $table->integer('tipo')->unsigned()->nullable()->default(null);
            $table->foreign('tipo')->references('id')->on('tiposproducto')->onDelete('cascade');
            $table->integer('marca')->unsigned()->nullable()->default(null);
            $table->foreign('marca')->references('id')->on('marcas')->onDelete('cascade');
            $table->integer('categoria')->unsigned()->nullable()->default(null);
            $table->foreign('categoria')->references('id')->on('categorias')->onDelete('cascade');
            
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
        Schema::dropIfExists('productos');
    }
}
