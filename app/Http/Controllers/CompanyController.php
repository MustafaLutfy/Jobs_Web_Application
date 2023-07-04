<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Company;


class CompanyController extends Controller
{
   

    public function login(Request $request)
    {
        
        $request->validate([
            'cp_email' => ['required', 'email', 'max:60'],
            'password' => ['required', 'min:8'],
        ]);
        $login = $request->only('cp_email', 'password');

        if(Auth::guard('company')->attempt($login)){

            return redirect()->route('company.dashboard');

        }
        else{
            return redirect()->route('company.login');
            
        }

    }
    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('company')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
