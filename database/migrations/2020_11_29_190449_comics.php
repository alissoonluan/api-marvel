<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Comics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_comics', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        $data = [
            ['name'=>'Avengers: The Initiative (2007) #14' 												  ],
            ['name'=>'Avengers: The Initiative (2007) #14 (SPOTLIGHT VARIANT)' 							  ],
            ['name'=>'Avengers: The Initiative (2007) #15' 												  ],
            ['name'=>'Avengers: The Initiative (2007) #16' 												  ],
            ['name'=>'Avengers: The Initiative (2007) #17' 												  ],
            ['name'=>'Avengers: The Initiative (2007) #18' 												  ],
            ['name'=>'Avengers: The Initiative (2007) #18 (ZOMBIE VARIANT)' 							  ],
            ['name'=>'Avengers: The Initiative (2007) #19' 												  ],
            ['name'=>'Deadpool (1997) #44)' 															  ],
            ['name'=>'Marvel Premiere (1972) #35' 														  ],
            ['name'=>'Marvel Premiere (1972) #36' 														  ],
            ['name'=>'Marvel Premiere (1972) #37' 														  ],
            ['name'=>'Hulk (2008) #53)'																	  ],
            ['name'=>'Hulk (2008) #54)'																	  ],
            ['name'=>'Hulk (2008) #55)'																	  ],
            ['name'=>'Ant-Man & the Wasp (2010) #3' 													  ],
            ['name'=>'Avengers (1998) #67' 															      ],
            ['name'=>'Avengers (1963) #87' 																  ],
            ['name'=>'Avengers and Power Pack Assemble! (2006) #2' 										  ],
            ['name'=>'Avengers and Power Pack (2017) #3' 												  ],
            ['name'=>'Avengers and Power Pack (2017) #4' 												  ],
            ['name'=>'Avengers and Power Pack (2017) #5' 												  ],
            ['name'=>'Avengers by Brian Michael Bendis: The Complete Collection Vol. 2 (Trade Paperback)' ],
            ['name'=>'Avengers Vol. 2: Red Zone (Trade Paperback)' 										  ],
            ['name'=>'Incredible Hulks (2010) #606 (VARIANT)' 											  ],
            ['name'=>'Dark Avengers (2012) #177'                                                          ],
            ['name'=>'Dark Avengers (2012) #183'                                                          ],
            ['name'=>'Universe X (2000) #10'                                                              ],
            ['name'=>'Incredible Hulk (1962) #171' 														  ],
            ['name'=>'Avengers Vol. 1: World Trust (Trade Paperback)'                                     ],
            ['name'=>'Hulk (1999) #25' 																	  ],
            ['name'=>'EARTH X TPB (Trade Paperback)' 													  ],
            ['name'=>'Hulk (1999) #53'																	  ],
            ['name'=>'Hulk: Destruction (2005) #4' 														  ]
        ]; 

        DB::table('tb_comics')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_comics');
    }
}
