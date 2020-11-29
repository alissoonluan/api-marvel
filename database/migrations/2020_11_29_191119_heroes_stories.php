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
            $table->unsignedBigInteger('id_heroes_stories');
            $table->unsignedBigInteger('id_stories');
            $table->foreign('id_heroes_stories')->references('id')->on('tb_heroes');
            $table->foreign('id_stories')->references('id')->on('tb_stories');
        });
        $data = [
            ['id_heroes_stories'=>1,'id_stories'=>1 ],
            ['id_heroes_stories'=>1,'id_stories'=>2 ],
            ['id_heroes_stories'=>1,'id_stories'=>3 ],
            ['id_heroes_stories'=>2,'id_stories'=>4 ],
            ['id_heroes_stories'=>2,'id_stories'=>5 ],
            ['id_heroes_stories'=>2,'id_stories'=>6 ],
            ['id_heroes_stories'=>2,'id_stories'=>7 ],
            ['id_heroes_stories'=>2,'id_stories'=>8 ],
            ['id_heroes_stories'=>3,'id_stories'=>9 ],
            ['id_heroes_stories'=>3,'id_stories'=>10],
            ['id_heroes_stories'=>4,'id_stories'=>11],
            ['id_heroes_stories'=>4,'id_stories'=>12],
            ['id_heroes_stories'=>5,'id_stories'=>13],
            ['id_heroes_stories'=>5,'id_stories'=>2 ],
            ['id_heroes_stories'=>1,'id_stories'=>10],
            ['id_heroes_stories'=>2,'id_stories'=>9 ]
        ]; 

        DB::table('tb_heroes_stories')->insert($data);
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
