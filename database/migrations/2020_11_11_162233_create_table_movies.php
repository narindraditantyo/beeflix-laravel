<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMovies extends Migration
{
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('genre_id');
            $table->foreign('genre_id')->references('id')->on('genres');
            $table->string('title');
            $table->string('photo');
            $table->string('description');
            $table->integer('rating');
        });
    }

    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
