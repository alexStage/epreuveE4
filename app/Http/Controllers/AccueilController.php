<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Informations;

class AccueilController extends Controller
{
    public function infos(){
    	$infos = Informations::first();
    	return view('index', compact('infos'));
    }
}
