<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableGenres extends Migration
{
    public function up()
    {
        Schema::create('genres', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name');
        });
    }

    public function down()
    {
        Schema::dropIfExists('genres');
    }
}
