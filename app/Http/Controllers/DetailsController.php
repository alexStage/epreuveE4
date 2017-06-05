<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Bien;
use App\Informations;

class DetailsController extends Controller
{
    public function index($id){
    	$infos = Informations::first();
    	$details = Bien::where('id', $id)->with('Classe')->first();
    	return view('details', compact('details','infos'));
    }
}
