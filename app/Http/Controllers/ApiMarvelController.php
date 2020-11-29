<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lib\DataPrepare;
use App\Lib\ErrorCodes;
use App\Models\Comics;
use App\Models\Events;
use App\Models\Heroes;
use App\Models\Series;
use App\Models\Stories;


class ApiMarvelController extends Controller
{
    public function index()
    {    
       $Heroes    = new Heroes('api_marvel');
       $allheroes = $heroes->allHeroes();

       if(!$allheroes) {
           return response()->json(
              dataPrepare::errorMessage(
                  "Heroes não encontrados",
                  ErrorCodes::COD_ERRO_IDENTIFICADO,
              )
              ,201);
           )
       }

       return response()->json(
           dataPrepare::successMessage(
               '',
               ErrorCodes::COD_ENVIADO_SUCESSO,
           )
       ,201);
    }

   

    public function getHeroById(Request $Request) {
        $this->validate($Request, [
            'id' => 'required'
        ]);

        $Heroes = new Heroes();
        $
    }

    public function getHeroByIdComics(Request $Request) {
        $this->validate($Request, [
            'id' => 'required'
        ]);

        $Comics = new Comics();
        $heroComics = $Comics->findByComics($Request->get('id'));

    }

    public function getHeroByIdEvents(Request $Request) {
        $this->validate($Request, [
            'id' => 'required'
        ]);

        $Events     = new Events();
        $heroEvents = $Events->findByEvents($Request->get('id'));

    }

    public function getHeroByIdSeries(Request $Request) {
        $this->validate($Request, [
            'id' => 'required'
        ]);

        $Series     = new Series();
        $heroSeries = $Series->findBySeries($Request->get('id')); 
    }

    public function getHeroByIdStories(Request $Request) {
        $this->validate($Request, [
            'id' => 'required'
        ]);

        $Stories     = new Stories();
        $heroStories = $Stories->findByStories($Request->get('id'));

    }
}
