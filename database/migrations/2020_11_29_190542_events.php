<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Events extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        $data = [
            ['name'=>'Secret Invasion' 	    ],
            ['name'=>'Chaos War' 			],
            ['name'=>'Age of Apocalypse' 	],
            ['name'=>'Annihilation' 		],
            ['name'=>'Dark Reign' 			]
        ]; 

        DB::table('tb_events')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_events');
    }
    
}
