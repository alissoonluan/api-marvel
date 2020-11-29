<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Heroes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('tb_heroes', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('description');
                $table->date('modified');
            });
            $data = [
                ['name'=>'3-D Man', 'description'=> '', 'modified' => '2014-04-29'],
                ['name'=>'A-Bomb (HAS)', 'description'=> 'Rick Jones has been Hulks best bud since day one, but now he s more than a friend...he a teammate', 'modified' => '2013-09-18'],
                ['name'=>'A.I.M.', 'description'=> 'AIM is a terrorist organization bent on destroying the world.', 'modified' => '2013-10-17'],
                ['name'=>'Aaron Stack', 'description'=> '', 'modified' => '1969-12-31'],
                ['name'=>'Abomination (Emil Blonsky', 'description'=> 'Formerly known as Emil Blonsky, a spy of Soviet Yugoslavian origin working for the KGB', 'modified' => '2012-03-20']
            ]; 

            DB::table('tb_heroes')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_heroes');
    }
}
