<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File; 

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Company;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;

class CompanyController extends Controller
{
   
    public function profile($id){
        $company = Company::where('id', $id)->get()->first();
        return view('company.profile', ['id' => $id])->with([
            'company' => $company,
        ]);
    }

    public function showProfileForUser($id){
        $company = Company::where('id', $id)->get()->first();
        return view('company-profile', ['id' => $id])->with([
            'company' => $company,
        ]);
    }
    public function settings(){
        $id = Auth::guard('company')->user()->id;
        $company = Company::where('id', $id)->get()->first();
        return view('company.edit')->with([
            'company' => $company,
        ]);
    }


    public function detailsUpdate(Request $request)
    {
        if($request->employees_number == 'default')
        {
            $employees_number = Auth::guard('company')->user()->employees_number;
        }
        else{
            $employees_number = $request->employees_number;
        }

        if($request->image){
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('companies_logos'), $imageName);
            $oldImage = Auth::guard('company')->user()->cp_logo_path;
            File::delete(public_path("companies_logos/".$oldImage));
            $company = Company::where('id', Auth::guard('company')->user()->id)->update([
                'cp_name' => $request->cp_name,
                'cp_email' => $request->cp_email,
                'cp_phone' => $request->cp_phone,
                // 'country' => $request->country,
                // 'city' => $request->city,
                // 'address' => $request->address,
                // 'zip_code' => $request->zip_code,
                // 'description' => $request->description,
                'website' => $request->website,
                'employees_number' => $employees_number,
                // 'establishing_date' => Carbon::parse($request->establishing_date),
                'cp_logo_path' => $imageName,
            ]);

        }

        $company = Company::where('id', Auth::guard('company')->user()->id)->update([
            'cp_name' => $request->cp_name,
            'cp_email' => $request->cp_email,
            'cp_phone' => $request->cp_phone,
            'website' => $request->website,
            'employees_number' => $employees_number,
        ]);
     

        return redirect()->back()->with('status', 'Company Information Updated');
    }

    public function locationUpdate(Request $request)
    {
        $company = Company::where('id', Auth::guard('company')->user()->id)->update([

            'country' => $request->country,
            'city' => $request->city,
            'address' => $request->address,
            'zip_code' => $request->zip_code,
            // 'description' => $request->description,
            // 'establishing_date' => Carbon::parse($request->establishing_date),
        ]);
     

        return redirect()->back()->with('status', 'Location Information Updated');
    }
    public function aboutUpdate(Request $request)
    {
        $company = Company::where('id', Auth::guard('company')->user()->id)->update([

            'description' => $request->description,
            // 'establishing_date' => Carbon::parse($request->establishing_date),
        ]);
     

        return redirect()->back()->with('status', 'About Text Updated');
    }

    public function login(Request $request)
    {
        $company = Company::where('cp_email', $request->cp_email)->first();
        if($company->isActivated == true){
            $request->validate([
                'cp_email' => ['required', 'email', 'max:60'],
                'password' => ['required', 'min:8'],
            ]);
            $login = $request->only('cp_email', 'password');
    
            if(Auth::guard('company')->attempt($login)){
    
                return redirect()->intended(RouteServiceProvider::COMPANY_HOME);
    
            }
            else{
                return redirect()->route('company.login')->with('message', 'Email or password is incorrect');
            }
        }
        else{
            return redirect()->route('company.login')->with('message', 'Please wait while admins activate you account');
    }
        
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('company')->logout();
        
        $request->session()->regenerateToken();

        return redirect('/');
    }

}
