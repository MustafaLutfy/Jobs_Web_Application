<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.user-register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // $request->validate([
        //     'first_name' => ['required', 'string', 'max:30'],
        //     'last_name' => ['required', 'string', 'max:30'],
        //     'phone' => ['required','numeric'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'country' => ['required', 'string', 'max:30'], 
        //     'city' => ['required', 'string', 'max:30'],
        //     'exp' => ['nullable', 'string', 'max:30'],
        //     'birth_date' => ['required', 'date'],
        //     'current_pos' => ['nullable', 'string'],
        //     'job_searching' => ['nullable', 'boolean'],
        //     'profile_photo_path' => ['nullable', 'string'],
        //     'user_image' => 'image|mimes:jpeg,png,jpg|max:2048',
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);

        // $imageName = time().'.'.$request->image->extension();  
        // $request->image->move(public_path('users_images'), $imageName);
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'country' => $request->country,
            'city' => $request->city,
            'exp' => $request->exp,
            // 'profile_photo_path' => $imageName,
            'birth_date' => $request['birth_date'],
            'password' => Hash::make($request['password']),
            
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::USER_HOME);
    }
}
