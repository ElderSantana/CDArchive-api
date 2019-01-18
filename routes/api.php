<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/', function (Request $request) {
    echo "CDArchive - api";
});
Route::post('/teste', function (Request $request) { 
    echo "teste";
});
Route::get('/cds', 'CdArchivesController@index');
Route::post('/cd', 'CdArchivesController@store');
Route::post('/cd/{id}', 'CdArchivesController@edit');
Route::delete('cd/{id}', 'CdArchivesController@delete');

Route::get('/genres', 'GenresController@index');
Route::post('/genre', 'GenresController@store');
Route::delete('genre/{id}', 'GenresController@delete');



