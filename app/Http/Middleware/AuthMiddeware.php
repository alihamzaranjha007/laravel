<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddeware
{
    public function handle(Request $request, Closure $next): Response
    {
    


        // condition ? true : false


        return (Auth::check() && Auth::user()->is_admin == 1) ?  $next($request) : abort($request);


        // dd($request->all());
        
    }
}
