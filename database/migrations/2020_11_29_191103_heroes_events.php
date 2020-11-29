<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HeroesEvents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_heroes_events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('id_heroes_events');
            $table->unsignedBigInteger('id_events');
            $table->foreign('id_heroes_events')->references('id')->on('tb_heroes');
            $table->foreign('id_events')->references('id')->on('tb_events');
        });
        $data = [
            ['id_heroes_events'=>1,'id_events'=>1 ],
            ['id_heroes_events'=>2,'id_events'=>2 ],
            ['id_heroes_events'=>3,'id_events'=>3 ],
            ['id_heroes_events'=>4,'id_events'=>4 ],
            ['id_heroes_events'=>5,'id_events'=>5 ],
            ['id_heroes_events'=>3,'id_events'=>2 ],
            ['id_heroes_events'=>4,'id_events'=>5 ],
            ['id_heroes_events'=>5,'id_events'=>1 ]
        ]; 

        DB::table('tb_heroes_events')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_heroes_events');
    }
}
