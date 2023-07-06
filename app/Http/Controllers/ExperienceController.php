<?php

namespace App\Http\Controllers;
use Auth; 
use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\Experience;

class ExperienceController extends Controller
{
    public function addExperience(Request $request){

        if(Auth::user()){
            $experience = Experience::create([
                'user_id'=> Auth::user()->id,
                'org_name' => $request->org_name,
                'from_date' => $request->from_date,
                'to_date' => $request->to_date,
            ]);
        return redirect('profile')->with('msg','Education Added');
    }
    }
}
