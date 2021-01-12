<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class User

{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //check connexion
        if(!Auth::check()){
            return redirect()->route('auth.login');
        }
        //role =3 Admin
        if(Auth::user()->role==3){
            return redirect()->route('admin');
        }
         //role =2 Manager
        if(Auth::user()->role==2){
            return redirect()->route('manager');
         //role =2 Manager
         }
        if(Auth::user()->role==1){
            return $next($request);
        //role 1 =Simple User
      }
  }
}
