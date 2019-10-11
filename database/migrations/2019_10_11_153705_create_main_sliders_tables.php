<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainSlidersTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_sliders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre')->nullable()->default(null);
            $table->string('src')->nullable()->default(null);
            $table->string('calibres')->nullable()->default(null);
            $table->string('separador')->nullable()->default(null);
            $table->string('foto')->nullable()->default(null);
            $table->integer('tipo')->nullable()->default(1);
            $table->integer('state')->nullable()->default(1);
            
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
        Schema::dropIfExists('main_sliders');
    }
}
