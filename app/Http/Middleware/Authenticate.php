<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use App\Http\Controllers\CompanyController;
use Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        
        // return $request->expectsJson() ? null : route('user.login');
        if(!Auth::guard('web')->check()){
            return route('user.login');
        }
        else{
            abort(403, 'Something went wrong!');
        }
    }
}
