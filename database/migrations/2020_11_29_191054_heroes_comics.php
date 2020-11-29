<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HeroesComics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_heroes_comics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_heroes_comics');
            $table->unsignedBigInteger('id_comics');
            $table->foreign('id_heroes_comics')->references('id')->on('tb_heroes');
            $table->foreign('id_comics')->references('id')->on('tb_comics');
        });

        $data = [
            ['id_heroes_comics'=>1,'id_comics'=>1 ],
            ['id_heroes_comics'=>1,'id_comics'=>2 ],
            ['id_heroes_comics'=>1,'id_comics'=>3 ],
            ['id_heroes_comics'=>1,'id_comics'=>4 ],
            ['id_heroes_comics'=>1,'id_comics'=>5 ],
            ['id_heroes_comics'=>1,'id_comics'=>6 ],
            ['id_heroes_comics'=>1,'id_comics'=>7 ],
            ['id_heroes_comics'=>1,'id_comics'=>8 ],
            ['id_heroes_comics'=>2,'id_comics'=>9 ],
            ['id_heroes_comics'=>2,'id_comics'=>10],
            ['id_heroes_comics'=>2,'id_comics'=>11],
            ['id_heroes_comics'=>2,'id_comics'=>12],
            ['id_heroes_comics'=>2,'id_comics'=>13],
            ['id_heroes_comics'=>2,'id_comics'=>14],
            ['id_heroes_comics'=>2,'id_comics'=>15],
            ['id_heroes_comics'=>2,'id_comics'=>16],
            ['id_heroes_comics'=>3,'id_comics'=>17],
            ['id_heroes_comics'=>3,'id_comics'=>18],
            ['id_heroes_comics'=>3,'id_comics'=>19],
            ['id_heroes_comics'=>3,'id_comics'=>20],
            ['id_heroes_comics'=>3,'id_comics'=>21],
            ['id_heroes_comics'=>3,'id_comics'=>22],
            ['id_heroes_comics'=>3,'id_comics'=>23],
            ['id_heroes_comics'=>3,'id_comics'=>15],
            ['id_heroes_comics'=>4,'id_comics'=>24],
            ['id_heroes_comics'=>4,'id_comics'=>25],
            ['id_heroes_comics'=>4,'id_comics'=>26],
            ['id_heroes_comics'=>4,'id_comics'=>27],
            ['id_heroes_comics'=>4,'id_comics'=>1 ],
            ['id_heroes_comics'=>4,'id_comics'=>20],
            ['id_heroes_comics'=>4,'id_comics'=>28],
            ['id_heroes_comics'=>4,'id_comics'=>29],
            ['id_heroes_comics'=>4,'id_comics'=>30],
            ['id_heroes_comics'=>4,'id_comics'=>31],
            ['id_heroes_comics'=>5,'id_comics'=>32],
            ['id_heroes_comics'=>5,'id_comics'=>15],
            ['id_heroes_comics'=>5,'id_comics'=>8 ],
            ['id_heroes_comics'=>5,'id_comics'=>7 ],
            ['id_heroes_comics'=>5,'id_comics'=>13],
            ['id_heroes_comics'=>5,'id_comics'=>18],
            ['id_heroes_comics'=>5,'id_comics'=>33],
            ['id_heroes_comics'=>5,'id_comics'=>34],
            ['id_heroes_comics'=>5,'id_comics'=>5 ],
            ['id_heroes_comics'=>5,'id_comics'=>4 ],
            ['id_heroes_comics'=>5,'id_comics'=>16],
            ['id_heroes_comics'=>5,'id_comics'=>2 ],
            ['id_heroes_comics'=>5,'id_comics'=>1 ]
        ]; 

        DB::table('tb_heroes_comics')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_heroes_comics');
    }
}
