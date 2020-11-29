
CREATE DATABASE api_marvel;

CREATE TABLE tb_heroes (
	"id" SERIAL NOT NULL,
	"name" VARCHAR(100),
	"description" VARCHAR,
	"modified" DATE,
	PRIMARY KEY ("id")
	);

CREATE TABLE tb_comics (
	"id" SERIAL NOT NULL,
	"name" VARCHAR(100),
	PRIMARY KEY ("id")
	);

CREATE TABLE tb_events (
	"id" SERIAL NOT NULL,
	"name" VARCHAR(100),
	PRIMARY KEY ("id")
	);

CREATE TABLE tb_series (
	"id" SERIAL NOT NULL,
	"name" VARCHAR(100),
	PRIMARY KEY ("id")
	);

CREATE TABLE tb_stories (
	"id" SERIAL NOT NULL,
	"name" VARCHAR(100),
	PRIMARY KEY ("id")
	);

CREATE TABLE tb_heroes_comics (
	"id" SERIAL NOT NULL,
	"idheroes" INTEGER NOT NULL,
	"idcomics" INTEGER NOT NULL,
	PRIMARY KEY ("id"),
	CONSTRAINT "fk_idheroes" FOREIGN KEY ("idheroes") REFERENCES "tb_heroes" ("id"),
	CONSTRAINT "fk_idcomics" FOREIGN KEY ("idcomics") REFERENCES "tb_comics" ("id")
	);

CREATE TABLE tb_heroes_events (
	"id" SERIAL NOT NULL,
	"idheroes" INTEGER NOT NULL,
	"idevents" INTEGER NOT NULL,
	PRIMARY KEY ("id"),
	CONSTRAINT "fk_idheroes" FOREIGN KEY ("idheroes") REFERENCES "tb_heroes" ("id"),
	CONSTRAINT "fk_idevents" FOREIGN KEY ("idevents") REFERENCES "tb_events" ("id")
	);

CREATE TABLE tb_heroes_series (
	"id" SERIAL NOT NULL,
	"idheroes" INTEGER NOT NULL,
	"idseries" INTEGER NOT NULL,
	PRIMARY KEY ("id"),
	CONSTRAINT "fk_idheroes" FOREIGN KEY ("idheroes") REFERENCES "tb_heroes" ("id"),
	CONSTRAINT "fk_idseries" FOREIGN KEY ("idseries") REFERENCES "tb_series" ("id")
	);

CREATE TABLE tb_heroes_stories (
	"id" SERIAL NOT NULL,
	"idheroes" INTEGER NOT NULL,
	"idstories" INTEGER NOT NULL,
	PRIMARY KEY ("id"),
	CONSTRAINT "fk_idheroes" FOREIGN KEY ("idheroes") REFERENCES "tb_heroes" ("id"),
	CONSTRAINT "fk_idstories" FOREIGN KEY ("idstories") REFERENCES "tb_stories" ("id")
	);	
	

--INSERT HEROES

INSERT INTO tb_heroes ( name, description, modified )
	VALUES
		( '3-D Man'                   , '', '2014-04-29T14:18:17-0400' ),
		( 'A-Bomb (HAS)'              , 'Rick Jones has been Hulk''s best bud since day one, but now he''s more than a friend...he''s a teammate! Transformed by a Gamma energy explosion, A-Bomb''s thick, armored skin is just as strong and powerful as it is blue. And when he curls into action, he uses it like a giant bowling ball of destruction!', '2013-09-18T15:54:04-0400' ),
		( 'A.I.M.'					  , 'AIM is a terrorist organization bent on destroying the world.', '2013-10-17T14:41:30-0400' ),
		( 'Aaron Stack'				  , '', '1969-12-31T19:00:00-0500'  ),
		( 'Abomination (Emil Blonsky)', 'Formerly known as Emil Blonsky, a spy of Soviet Yugoslavian origin working for the KGB, the Abomination gained his powers after receiving a dose of gamma radiation similar to that which transformed Bruce Banner into the incredible Hulk.', '2012-03-20T12:32:12-0400' );

	
--INSERT COMICS

INSERT INTO tb_comics ( name )
	VALUES
		('Avengers: The Initiative (2007) #14' 												  ),
		('Avengers: The Initiative (2007) #14 (SPOTLIGHT VARIANT)' 							  ),
		('Avengers: The Initiative (2007) #15' 												  ),
		('Avengers: The Initiative (2007) #16' 												  ),
		('Avengers: The Initiative (2007) #17' 												  ),
		('Avengers: The Initiative (2007) #18' 												  ),
		('Avengers: The Initiative (2007) #18 (ZOMBIE VARIANT)' 							  ),
		('Avengers: The Initiative (2007) #19' 												  ),
		('Deadpool (1997) #44)' 															  ),
		('Marvel Premiere (1972) #35' 														  ),
		('Marvel Premiere (1972) #36' 														  ),
		('Marvel Premiere (1972) #37' 														  ),
		('Hulk (2008) #53)'																	  ),
		('Hulk (2008) #54)'																	  ),
		('Hulk (2008) #55)'																	  ),
		('Ant-Man & the Wasp (2010) #3' 													  ),
		('Avengers (1998) #67' 															      ),
		('Avengers (1963) #87' 																  ),
		('Avengers and Power Pack Assemble! (2006) #2' 										  ),
		('Avengers and Power Pack (2017) #3' 												  ),
		('Avengers and Power Pack (2017) #4' 												  ),
		('Avengers and Power Pack (2017) #5' 												  ),
		('Avengers by Brian Michael Bendis: The Complete Collection Vol. 2 (Trade Paperback)' ),
		('Avengers Vol. 2: Red Zone (Trade Paperback)' 										  ),
		('Incredible Hulks (2010) #606 (VARIANT)' 											  ),
		('Dark Avengers (2012) #177'                                                          ),
		('Dark Avengers (2012) #183'                                                          ),
		('Universe X (2000) #10'                                                              ),
		('Incredible Hulk (1962) #171' 														  ),
		('Avengers Vol. 1: World Trust (Trade Paperback)'                                     ),
		('Hulk (1999) #25' 																	  ),
		('EARTH X TPB (Trade Paperback)' 													  ),
		('Hulk (1999) #53'																	  ),
		('Hulk: Destruction (2005) #4' 														  );

		

--INSERT EVENTS

INSERT INTO tb_events ( name )
	VALUES
		('Secret Invasion' 	 ),
		('Chaos War' 		 ),
		('Age of Apocalypse' ),
		('Annihilation' 	 ),
		('Dark Reign'		 );
	
--INSERT SERIES

INSERT INTO tb_series ( name )
	VALUES
		('Avengers: The Initiative (2007 - 2010)' 								  ),
		('Marvel Premiere (1972 - 1981)' 										  ),
		('FREE COMIC BOOK DAY 2013 1 (2013)' 									  ),
		('Hulk (2008 - 2012)' 													  ),
		('Ant-Man & the Wasp (2010 - 2011)'										  ),
		('Avengers by Brian Michael Bendis: The Complete Collection Vol. 2 (2017)'),
		('Iron Man Epic Collection: Doom (2018)'								  ),
		('Dark Avengers (2012 - 2013)'											  ),
		('Universe X (2000 - 2001)'												  ),
		('EARTH X TPB (2006)'													  );

--INSERT STORIES

INSERT INTO tb_stories ( name )
	VALUES
		('Cover #19951' 				 								),
		('Code-Name:  The Cold Warrior!' 								),
		('AVENGERS: THE INITIATIVE (2007) #16' 							),
		('Avengers: The Initiative (2007) #14, Spotlight Variant - Int' ),
		('Hulk (2008) #54'												),
		('Interior #92087'												),
		('Revenge'														),
		('Incredible Hulk (1962) #366'									),
		('The Fearful Secret of Bucky Barnes'							),
		('Interior #25650'												),
		('Hulk (2008) #43'												),
		('Dark Avengers (2012) #180'									),
		('Whosoever Harms the Hulk..!'									);

--INSERT HEROES_COMICS

INSERT INTO tb_heroes_comics ( idheroes, idcomics )
	VALUES
		(1,1 ),
		(1,2 ),
		(1,3 ),
		(1,4 ),
		(1,5 ),
		(1,6 ),
		(1,7 ),
		(1,8 ),
		(2,9 ),
		(2,10),
		(2,11),
		(2,12),
		(2,13),
		(2,14),
		(2,15),
		(2,16),
		(3,17),
		(3,18),
		(3,19),
		(3,20),
		(3,21),
		(3,22),
		(3,23),
		(3,15),
		(4,24),
		(4,25),
		(4,26),
		(4,27),
		(4,1 ),
		(4,20),
		(4,28),
		(4,29),
		(4,30),
		(4,31),
		(5,32),
		(5,15),
		(5,8 ),
		(5,7 ),
		(5,13),
		(5,18),
		(5,33),
		(5,34),
		(5,5 ),
		(5,4 ),
		(5,16),
		(5,2 ),
		(5,1 );
	
--INSERT HEROES_EVENTS
INSERT INTO tb_heroes_events ( idheroes, idevents )
	VALUES
		(1,1 ),
		(2,2 ),
		(3,3 ),
		(4,4 ),
		(5,5 ),
		(3,2 ),
		(4,5 ),
		(5,1 );

--INSERT HEROES_SERIES

INSERT INTO tb_heroes_series ( idheroes, idseries )
	VALUES
		(1,1 ),
		(2,2 ),
		(3,3 ),
		(4,4 ),
		(5,5 ),
		(3,6 ),
		(4,7 ),
		(1,8 ),
		(2,9 ),
		(4,10),
		(2,3 ),
		(3,2 ),
		(5,10);

-- INSERT HEROES_STORIES
INSERT INTO tb_heroes_stories ( idheroes, idstories )
	VALUES
		(1,1 ),
		(1,2 ),
		(1,3 ),
		(2,4 ),
		(2,5 ),
		(2,6 ),
		(2,7 ),
		(2,8 ),
		(3,9 ),
		(3,10),
		(4,11),
		(4,12),
		(5,13),
		(5,2 ),
		(1,10),
		(2,9 );