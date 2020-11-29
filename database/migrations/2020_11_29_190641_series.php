<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Series extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_series', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        $data = [
            ['name'=> 'Avengers: The Initiative (2007 - 2010)'                                  ],  								  
            ['name'=> 'Marvel Premiere (1972 - 1981)' 										    ],
            ['name'=> 'FREE COMIC BOOK DAY 2013 1 (2013)' 									    ],
            ['name'=> 'Hulk (2008 - 2012)' 													    ],
            ['name'=> 'Ant-Man & the Wasp (2010 - 2011)'										],
            ['name'=> 'Avengers by Brian Michael Bendis: The Complete Collection Vol. 2 (2017)' ],
            ['name'=> 'Iron Man Epic Collection: Doom (2018)'								    ],
            ['name'=> 'Dark Avengers (2012 - 2013)'											    ],
            ['name'=> 'Universe X (2000 - 2001)'												],
            ['name'=> 'EARTH X TPB (2006)'													    ]
        ]; 

        DB::table('tb_series')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_series');
    }
}
