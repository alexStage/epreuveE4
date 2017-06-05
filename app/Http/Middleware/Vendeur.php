<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;
use Redirect;

class Vendeur
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ( Auth::check() && ((Auth::user()->isVendeur()!=0) || (Auth::user()->isAdmin()!=0) ))
        {
            return $next($request);
            
        }else{
            Session::flash('warning', "Vous devez etre un vendeur ou un administrateur pour accéder à cette page.");
            return Redirect::back();
        }
    }
}
