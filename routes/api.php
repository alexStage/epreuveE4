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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('/vendeur/{id}', [function($id, Request $request){
        if($request->ajax()){
            $biens = Bien::where('user_id', $id)->with('categorie', 'user', 'classe')->get();
            $biens->toJson();
            return response($biens);
    }
},'as'=>'ajax']);

Route::get('/rechercheBien', ['uses'=>'VentesController@requeteAjax', 'as'=>'ajaxVentes']);

Route::get('/supprimerBien/{id}', ['uses'=>'FormulairesController@supprimerBienAjax', 'as'=>'supprimerBien']);