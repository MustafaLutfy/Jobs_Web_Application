<?php

namespace App\Http\Controllers;
use Auth; 
use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    public function addEducation(Request $request){

        if(Auth::user()){
            $education = Education::create([
                'user_id'=> Auth::user()->id,
                'institution_name' => $request->institution_name,
                'from_date' => $request->from_date,
                'to_date' => $request->to_date,
            ]);
        return redirect('profile')->with('msg','Education Added');
    }
    }
}
