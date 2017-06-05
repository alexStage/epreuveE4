<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Informations;
use App\Http\Requests;
use App\Classe;
use App\Categorie;
use Auth;
use DB;
use Illuminate\Contracts\Auth\Guard;
use View;
use Session;
use App\User;
use Redirect;
use App\Http\Controllers\Image;

class FormulairesController extends Controller
{
    public function ajoutBien(){
    	$infos = Informations::first();
    	$categories = Categorie::pluck('name','id');
    	$classes = Classe::pluck('lettre', 'id');
    	$users = User::pluck('name', 'id');
    	return View::make('ajoutBienForm', compact('categories', 'classes', 'users'));
    }

    public function update(Request $request, Guard $auth){
    	$secteur = $request->input('secteur');
    	$surface = $request->input('surface');
    	$surfaceTerrain = $request->input('surfaceTerrain');
    	$chambres = $request->input('chambres');
    	$pieces = $request->input('pieces');
    	$types = $request->input('types');
    	$prix = $request->input('prix');
    	$categorie = $request->input('categorie_id');
    	$classe = $request->input('classe_id');
    	$user = $request->input('user_id');

        if($request->hasFile('photo')){
            $imageName = time().'.'.$request->photo->getClientOriginalExtension();
            $request->photo->move(public_path('/photos/'), $imageName);

    	   DB::table('biens')->insert(['secteur'=>$secteur, 'photo'=>$imageName, 'surface'=>$surface, 'surfaceTerrain'=>$surfaceTerrain, 'chambres'=>$chambres, 
    								'pieces'=>$pieces, 'types'=>$types, 'prix'=>$prix, 'user_id'=>$user, 'categorie_id'=>$categorie, 
    								'classe_id'=>$classe]);
        }else{
            DB::table('biens')->insert(['secteur'=>$secteur, 'surface'=>$surface, 'surfaceTerrain'=>$surfaceTerrain, 'chambres'=>$chambres, 
                                    'pieces'=>$pieces, 'types'=>$types, 'prix'=>$prix, 'user_id'=>$user, 'categorie_id'=>$categorie, 
                                    'classe_id'=>$classe]);
        }

    	return Redirect::back();
    }

    public function supprimerBien($id){
        DB::table('biens')->where('id', $id)->delete();
        return Redirect::back();
    }
    
    public function formulaireSupprimerBienAjax($id, Request $request){
        if($request->ajax()){
            DB::table('biens')->where('id', $id)->delete();
            return response("bien supprimé");
        }
    }
}
