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
       $allheroes = $Heroes->allHeroes();

       return response()->json(
           dataPrepare::successMessage(
               $allheroes,
               ErrorCodes::COD_SUBMITTED_SUCCESSFULLY ,
           )
       ,200);
    }


    public function getHeroById(Request $request, $id) {

        $Heroes = new Heroes();
        $ret    = $Heroes->findById($id);

        if(!$ret) {
            return response()->json(
               dataPrepare::errorMessage(
                   "Hero not found",
                   ErrorCodes::COD_ERROR_NOT_IDENTIFIED ,
               )
               ,201);
            }
            
        return response()->json(
                dataPrepare::successMessage(
                    $allheroes,
                    ErrorCodes::COD_SUBMITTED_SUCCESSFULLY ,
                )
            ,200);    


    }

    public function getHeroByIdComics(Request $Request, $id) {

        $Comics = new Comics();
        $heroComics = $Comics->findByComics($id);

    }

    public function getHeroByIdEvents(Request $Request, $id) {

        $Events     = new Events();
        $heroEvents = $Events->findByEvents($id);

    }

    public function getHeroByIdSeries(Request $Request, $id) {
        $this->validate($Request, [
            'id' => 'required'
        ]);

        $Series     = new Series();
        $heroSeries = $Series->findBySeries($id); 
    }

    public function getHeroByIdStories(Request $Request) {
        $this->validate($Request, [
            'id' => 'required'
        ]);

        $Stories     = new Stories();
        $heroStories = $Stories->findByStories($id);

    }
}
