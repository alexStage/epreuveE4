<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Bien;
use App\Informations;

class LocationsController extends Controller
{
    public function index(){
    	$infos = Informations::first();
    	$locations = Bien::where('categorie_id', 2)->with('categorie', 'user', 'classe')->paginate(8);
        $ventes = Bien::where('categorie_id', 1)->with('categorie', 'user', 'classe')->paginate(8);
    	return view('locations',compact('locations','ventes','infos'));
    }
}
