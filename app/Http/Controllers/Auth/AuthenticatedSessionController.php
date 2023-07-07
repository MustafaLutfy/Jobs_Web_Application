<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Http\Controllers\CompanyController;


class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function userCreate(): View
    {

        if(Auth::guard('web')->check() || Auth::guard('company')->check()){
            abort(403,"Something went wrong!");
        }
        else{
            return view('auth.login');
        }
        
    }
    public function companyCreate(): View
    {
        if(Auth::guard('web')->check() || Auth::guard('company')->check()){
            abort(403,"You are already logged in!");
        }
        else{
            return view('auth.company-login');
        }
        
    }

    /**
     * Handle an incoming authentication request.
     */
    public function userStore(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::USER_HOME);
    }

  

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
   
}
