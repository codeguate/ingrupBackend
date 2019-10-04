<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre')->nullable()->default(null);
            $table->string('src')->nullable()->default(null);
            $table->string('calibres')->nullable()->default(null);
            $table->string('separador')->nullable()->default(null);
            $table->string('foto')->nullable()->default(null);
            
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
        Schema::dropIfExists('slides');
    }
}
