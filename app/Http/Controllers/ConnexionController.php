<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;
use App\Http\Requests;

class ConnexionController extends Controller
{
    public function index(){
        Auth::logout();
        
        Session::flash('success', 'Vous êtes bien déconnecté');
        return Redirect::back();
    }
}
