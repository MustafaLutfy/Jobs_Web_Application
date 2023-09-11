<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Company;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Carbon\Carbon;

class RegisteredCompanyController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.company-register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        
        $request->validate([
            'cp_name' => ['required', 'string', 'max:30'],
            'cp_phone' => ['required','numeric'],
            'cp_email' => ['required', 'string', 'email', 'max:255', 'unique:companies'],
            'country' => ['required', 'string', 'max:30'], 
            'city' => ['required', 'string', 'max:30'],
            'address' => ['required', 'string', 'max:60'],
            'zip_code' => ['required','numeric'],
            'description' => ['nullable', 'string'],
            'website' => ['nullable', 'string','url'],
            'establishing_date' => ['required', 'date'],
            'current_pos' => ['nullable', 'string'],
            'job_searching' => ['nullable', 'boolean'],
            'cp_logo_path' => ['nullable', 'string'],
            'cp_image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('users_images'), $imageName);
        $company = Company::create([
            'cp_name' => $request->cp_name,
            'cp_email' => $request->cp_email,
            'cp_phone' => $request->cp_phone,
            'country' => $request->country,
            'city' => $request->city,
            'Address' => $request->address,
            'zip_code' => $request->zip_code,
            'cp_logo_path' => $imageName,
            'establishing_date' => Carbon::parse($request->establishing_date),
            'employees_number' => $request->employees_number,
            'password' => Hash::make($request['password']),
            'description' => $request->description,
            'website' => $request->website,
            
         ]);



         return redirect()->route('company.dashboard');
       
    }
}
