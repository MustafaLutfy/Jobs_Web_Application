<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Auth;
class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function userUpdate(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        return back()->with('status', 'password-updated');
    }
    public function companyUpdate(Request $request)
    {
      
        $validated = $request->validate([
            'current_password' => ['required'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);
        
        if(Hash::check($request->current_password,Auth::guard('company')->user()->password)){
            Auth::guard('company')->user()->update([
                'password' => Hash::make($validated['password']),
            ]);
        }
        
        return back()->with('status', 'Password Updated');
    }
}
