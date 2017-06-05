<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bien;
use View;
use App\Http\Requests;

class RechercheController extends Controller
{
    public function recherche(Request $request){
    	$q= $request->input('search');
    	$tab = explode(" ", $q);
    	$tabLength = count($tab);
    	for ($i=0;$i<$tabLength;$i++){
    	$results[$i] = Bien::where('id','like', '%'.$tab[$i].'%')
    							  ->orWhere('secteur','like', '%'.$tab[$i].'%')
    							  ->orWhere('surface','like', '%'.$tab[$i].'%')
    							  ->orWhere('surfaceTerrain','like', '%'.$tab[$i].'%')
                                                          ->orWhere('chambres','like', '%'.$tab[$i].'%')
                                                          ->orWhere('pieces','like', '%'.$tab[$i].'%')
                                                          ->orWhere('types','like', '%'.$tab[$i].'%')
                                                          ->orWhere('prix','like', '%'.$tab[$i].'%')
    							  ->get();
    	}
    	

    	
        return View::make('rechercheResultat', compact('results','tabLength'));
		
    }
}
