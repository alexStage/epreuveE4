<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Bien;

class GestionVendeur extends Controller
{
    public function index(){
        $users = User::with('biens')->get();
        return view('vendeurs',compact('users'));
}

public function ajax($id, Request $request){

    if($request->ajax()){
            $biens = Bien::where('user_id', $id)->with('categorie', 'user', 'classe')->get();
            $biens->toJson();
            return response($biens);
    }
}
}
