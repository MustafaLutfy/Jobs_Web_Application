<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Company
{
  
    
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);

        if(Auth::guard('company')->check()){
            return redirect()->route('company.main');
        };
    }
}
