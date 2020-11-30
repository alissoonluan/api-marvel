<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'public'] , function () use ($routes){
    Route::group(['prefix' => 'characters'], function() {
            Route::get('/',                             'ApiMarvelController@index');
            Route::get('/{id}',                         'ApiMarvelController@getHeroById');
            Route::get('/{id}/comics',                  'ApiMarvelController@getHeroByComics');
            Route::get('/{id}/events',                  'ApiMarvelController@getHeroByEvents');
            Route::get('/{id}/series',                  'ApiMarvelController@getHeroBySeries');
            Route::get('/{id}/stories',                 'ApiMarvelController@getHeroByStories');
        });
});
