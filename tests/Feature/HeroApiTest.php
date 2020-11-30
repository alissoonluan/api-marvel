<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HeroApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
  public function testAllHeroes()
    {
        $response = $this->get('v1/public/characters');

        $response->assertStatus(200);
    }

    public function testByHero()
    {
        $response = $this->get('v1/public/characters/1');

        $response->assertStatus(200);
    }

    public function testHeroByComics()
    {
        $response = $this->get('v1/public/characters/3/comics') ;

        $response->assertStatus(200);
    }

    public function testHeroByEvents()
    {
        $response = $this->get('v1/public/characters/2/events') ;

        $response->assertStatus(200);
    }

    public function testHeroBySeries()
    {
        $response = $this->get('v1/public/characters/5/series') ;

        $response->assertStatus(200);
    }

    public function testHeroByStories()
    {
        $response = $this->get('v1/public/characters/4/stories') ;

        $response->assertStatus(200);
    }
}
