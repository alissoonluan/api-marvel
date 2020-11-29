<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HeroesStories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_heroes_stories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('id_heroes_stories');
            $table->unsignedBigInteger('id_stories');
            $table->foreign('id_heroes_stories')->references('id')->on('tb_heroes');
            $table->foreign('tb_stories')->references('id')->on('id_stories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_heroes_stories');
    }
}