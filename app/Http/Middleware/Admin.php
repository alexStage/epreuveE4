<?php 
namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;
use Redirect;

class Admin {

    public function handle($request, Closure $next)
    {

        if ( Auth::check() && (Auth::user()->isAdmin()!=0))
        {
            return $next($request);
        }
        Session::flash('warning', "Vous devez etre admin pour accéder à cette page.");
        return Redirect::back();

    }

}