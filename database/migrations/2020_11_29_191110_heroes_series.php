<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HeroesSeries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_heroes_series', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('id_heroes_series');
            $table->unsignedBigInteger('id_series');
            $table->foreign('id_heroes_series')->references('id')->on('tb_heroes');
            $table->foreign('id_series')->references('id')->on('tb_series');
        });
        $data = [
            ['id_heroes_series'=>1,'id_series'=>1 ],
            ['id_heroes_series'=>2,'id_series'=>2 ],
            ['id_heroes_series'=>3,'id_series'=>3 ],
            ['id_heroes_series'=>4,'id_series'=>4 ],
            ['id_heroes_series'=>5,'id_series'=>5 ],
            ['id_heroes_series'=>3,'id_series'=>6 ],
            ['id_heroes_series'=>4,'id_series'=>7 ],
            ['id_heroes_series'=>1,'id_series'=>8 ],
            ['id_heroes_series'=>2,'id_series'=>9 ],
            ['id_heroes_series'=>4,'id_series'=>10],
            ['id_heroes_series'=>2,'id_series'=>3 ],
            ['id_heroes_series'=>3,'id_series'=>2 ],
            ['id_heroes_series'=>5,'id_series'=>10]
        ]; 

        DB::table('tb_heroes_series')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_heroes_series');
    }
}
