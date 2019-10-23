<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarcasTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable()->default(null);
            $table->string('foto')->nullable()->default(null);
            $table->string('descripcion')->nullable()->default(null);
            $table->string('fotoDefault')->nullable()->default(null);
            $table->string('icono')->nullable()->default(null);
            $table->tinyInteger('estado')->nullable()->default(1);

            $table->integer('padre')->unsigned()->nullable()->default(null);
            $table->foreign('padre')->references('id')->on('marcas')->onDelete('cascade');

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
        Schema::dropIfExists('marcas');
    }
}
