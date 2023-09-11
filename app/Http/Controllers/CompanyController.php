<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Company;
use App\Providers\RouteServiceProvider;


class CompanyController extends Controller
{
   
    public function profile($id){
        $company = Company::where('id', $id)->get()->first();
        return view('company.profile', ['id' => $id])->with([
            'company' => $company,
        ]);
    }
    public function settings(){
        $company = Company::where('id', $id)->get()->first();
        return view('company.profile', ['id' => $id])->with([
            'company' => $company,
        ]);
    }

    public function login(Request $request)
    {

        $request->validate([
            'cp_email' => ['required', 'email', 'max:60'],
            'password' => ['required', 'min:8'],
        ]);
        $login = $request->only('cp_email', 'password');

        if(Auth::guard('company')->attempt($login)){

            return redirect()->intended(RouteServiceProvider::COMPANY_HOME);

        }
        else{
            return redirect()->route('company.login');
        }
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('company')->logout();
        
        $request->session()->regenerateToken();

        return redirect('/');
    }

}
