<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresentacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presentaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre')->nullable()->default(null);
            $table->string('descripcion')->nullable()->default(null);
            $table->string('calibres')->nullable()->default(null);
            $table->string('separador')->nullable()->default(null);
            $table->string('foto1')->nullable()->default(null);
            $table->string('material')->nullable()->default(null);
            $table->double('peso')->nullable()->default(0);
            $table->integer('cuello')->nullable()->default(0);
            $table->double('altura')->nullable()->default(0);
            $table->double('largo')->nullable()->default(0);
            $table->double('unidades')->nullable()->default(0);
            
            $table->integer('producto')->unsigned();
            $table->foreign('producto')->references('id')->on('productos')->onDelete('cascade');
            
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
        Schema::dropIfExists('presentaciones');
    }
}
