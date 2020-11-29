<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Stories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_stories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        $data = [
            ['name'=>'Cover #19951' 				 								],
            ['name'=>'Code-Name:  The Cold Warrior!' 								],
            ['name'=>'AVENGERS: THE INITIATIVE (2007) #16' 							],
            ['name'=>'Avengers: The Initiative (2007) #14, Spotlight Variant - Int' ],
            ['name'=>'Hulk (2008) #54'												],
            ['name'=>'Interior #92087'												],
            ['name'=>'Revenge'														],
            ['name'=>'Incredible Hulk (1962) #366'									],
            ['name'=>'The Fearful Secret of Bucky Barnes'							],
            ['name'=>'Interior #25650'												],
            ['name'=>'Hulk (2008) #43'												],
            ['name'=>'Dark Avengers (2012) #180'									],
            ['name'=>'Whosoever Harms the Hulk..!'									]
        ]; 

        DB::table('tb_stories')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_stories');
    }
}
