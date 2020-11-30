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
       $Heroes    = new Heroes();
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
                    $ret,
                    ErrorCodes::COD_SUBMITTED_SUCCESSFULLY ,
                )
            ,200);    


    }

    public function getHeroByComics(Request $Request, $id) {

        $Comics     = new Comics();
        $heroComics = $Comics->findByComics($id);

        if(!$heroComics) {
            return response()->json(
               dataPrepare::errorMessage(
                   "Hero comics not found",
                   ErrorCodes::COD_ERROR_NOT_IDENTIFIED ,
               )
               ,201);
            }

        return response()->json(
                dataPrepare::successMessage(
                    $heroComics,
                    ErrorCodes::COD_SUBMITTED_SUCCESSFULLY ,
                )
            ,200);  

    }

    public function getHeroByEvents(Request $Request, $id) {

        $Events     = new Events();
        $heroEvents = $Events->findByEvents($id);

        if(!$heroEvents) {
            return response()->json(
               dataPrepare::errorMessage(
                   "Hero events not found",
                   ErrorCodes::COD_ERROR_NOT_IDENTIFIED ,
               )
               ,201);
            }

        return response()->json(
                dataPrepare::successMessage(
                    $heroEvents,
                    ErrorCodes::COD_SUBMITTED_SUCCESSFULLY ,
                )
            ,200);  

    }

    public function getHeroBySeries(Request $Request, $id) {

        $Series     = new Series();
        $heroSeries = $Series->findBySeries($id); 

        if(!$heroSeries) {
            return response()->json(
               dataPrepare::errorMessage(
                   "Hero series not found",
                   ErrorCodes::COD_ERROR_NOT_IDENTIFIED ,
               )
               ,201);
            }

        return response()->json(
                dataPrepare::successMessage(
                    $heroSeries,
                    ErrorCodes::COD_SUBMITTED_SUCCESSFULLY ,
                )
            ,200);  
    }

    public function getHeroByStories(Request $Request, $id) {

        $Stories     = new Stories();
        $heroStories = $Stories->findByStories($id);

        if(!$heroStories) {
            return response()->json(
               dataPrepare::errorMessage(
                   "Hero stories not found",
                   ErrorCodes::COD_ERROR_NOT_IDENTIFIED ,
               )
               ,201);
            }

        return response()->json(
                dataPrepare::successMessage(
                    $heroStories,
                    ErrorCodes::COD_SUBMITTED_SUCCESSFULLY ,
                )
            ,200);  

    }
}
