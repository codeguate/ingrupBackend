<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable()->default(null);
            $table->string('foto')->nullable()->default(null);
            $table->string('descripcion')->nullable()->default(null);
            $table->integer('orden')->nullable()->default(null);
            $table->tinyInteger('estado')->nullable()->default(1);

            $table->integer('padre')->unsigned()->nullable()->default(null);
            $table->foreign('padre')->references('id')->on('categorias')->onDelete('cascade');

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
        Schema::dropIfExists('categorias');
    }
}
