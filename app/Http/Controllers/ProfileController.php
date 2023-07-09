<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Skill;
use App\Models\Language;
use App\Models\User;
use App\Models\UserSkill;
use App\Models\Education;
use App\Models\Experience;

class ProfileController extends Controller
{

    public function isSearching(Request $request)
    {


        $user = User::find(Auth::user()->id);

        $current = $user->job_searching;
        
         if($user){
             $user->job_searching = $request->is_searching;
            $user->save();
           
         }

        return redirect('profile');
    
    }
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $skills = Skill::get('skill_title');
        $languages = Language::get('language');
        $userSkills = UserSkill::where('user_id', Auth::user()->id)->get('skill_id');
        $userEdus = Education::where('user_id', Auth::user()->id)->get();
        $userExps = Experience::where('user_id', Auth::user()->id)->get();
        $user = User::find(Auth::user()->id);
        $current = $user->job_searching == 1 ? 'checked' : '';
        
        return view('profile.edit', [
            'user' => $request->user(),
        ])->with([
            'userExps' => $userExps,
            'skills' => $skills,
            'languages' =>  $languages,
            'current' => $current,
            'userSkills' => $userSkills,
            'userEdus' => $userEdus,
    ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
