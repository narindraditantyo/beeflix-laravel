<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEpisodes extends Migration
{
    public function up()
    {
        Schema::create('episodes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('movie_id');
            $table->foreign('movie_id')->references('id')->on('movies');
            $table->string('episode');
            $table->string('title');
        });
    }

    public function down()
    {
        Schema::dropIfExists('episodes');
    }
}
