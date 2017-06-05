<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use Redirect;
use Session;

class ContactController extends Controller
{
    public function index(){
    	return view('contacts');
    }
    
    public function mail(Request $request){
        
        $email = $request->input('email');
        $contenu = $request->input('message');
        Mail::send('email.email',['email'=>$email ,'contenu'=>$contenu],function($message){
            $message->to('dhaene.alexandre@gmail.com');
        });
        Session::flash('success', 'Votre email à bien été envoyé.');
        return Redirect::back();
    }
}
