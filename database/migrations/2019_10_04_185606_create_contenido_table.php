<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContenidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contenido', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre')->nullable()->default(null);
            $table->string('src')->nullable()->default(null);
            $table->string('text')->nullable()->default(null);
            $table->text('code')->nullable()->default(null);
            $table->string('foto')->nullable()->default(null);
            $table->string('etiqueta')->nullable()->default(null);
            $table->string('padding')->nullable()->default(null);
            $table->string('margin')->nullable()->default(null);
            $table->string('color')->nullable()->default(null);
            $table->string('background')->nullable()->default(null);
            $table->string('font-family')->nullable()->default(null);
            $table->string('font-size')->nullable()->default(null);
            
            $table->integer('orden')->nullable()->default(null);
            $table->double('ubicacion')->nullable()->default(null);
            $table->integer('pagina')->nullable()->default(null);
            $table->integer('banner')->nullable()->default(null);
            $table->string('tipo')->nullable()->default(null);
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
        Schema::dropIfExists('contenido');
    }
}
