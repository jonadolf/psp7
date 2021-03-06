<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;
use Session;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed

     */
    public function __construct(Guard $auth){
       $this->auth =$auth;
    }


    public function handle($request, Closure $next)
    {
        if ($this->auth->user()->tipoUsuario == 1) {
            return $next($request);     
        
        } else {
            return redirect ('/home');
             
           
        }

        
    }
}
