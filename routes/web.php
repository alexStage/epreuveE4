<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/',['uses'=>'AccueilController@infos', 'as'=>'accueil']);

Route::get('/auth/logout', ['uses'=> 'ConnexionController@index', 'as'=> 'deconnexion']);

Route::get('/ventes', ['uses'=>'VentesController@index', 'as'=>'ventes']);
Route::get('/locations', ['uses'=>'LocationsController@index', 'as'=>'locations']);
Route::get('/contacts', ['uses'=>'ContactController@index', 'as'=>'contacts']);
Route::post('/contacts', ['uses'=>'ContactController@mail', 'as'=>'envoie']);
Route::get('/gestionVendeur', ['uses'=>'GestionVendeur@index', 'as'=>'gestionVendeur'])->middleware('admin');

Route::get('/ajoutBien', ['uses'=>'FormulairesController@ajoutBien', 'as'=>'ajoutBien'])->middleware('vendeur');
Route::post('/ajoutBien', ['uses'=>'FormulairesController@update', 'as'=>'ajouteBienForm']);

Route::get('/details/{id}', ['uses'=>'DetailsController@index', 'as'=>'details']);
Route::get('/supprimerBien/{id}', ['uses'=>'FormulairesController@supprimerBien', 'as'=>'supprimerBien']);

Route::post('/recherche', ['uses'=>'RechercheController@recherche', 'as'=>'recherche']);




Auth::routes();


