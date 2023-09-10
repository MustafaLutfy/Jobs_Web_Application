<?php

namespace App\Http\Controllers;
use App\Models\Offer;
use App\Models\Job;
use App\Models\Apply;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Language;
use App\Models\UserSkill;
use App\Models\UserLanguage;
use App\Models\Education;
use App\Models\Experience;
use Auth;

class PagesController extends Controller
{
    public function getOffers(){
        $job_titles = Job::get('job_title');
        $offers = Offer::get();
        $skills = Skill::get();
            return view('offers')->with([
                'offers'=> $offers,
                'job_titles'=> $job_titles,
                'skills'=> $skills,
            ]);
    }
    
    public function getCompanyOffers(){
        $company_id = Auth::guard('company')->user()->id;
        $offers = Offer::where('company_id', $company_id)->get();
        return view('company/offers')->with([
            'offers'=> $offers,
        ]);
    }


    public function getTalentsPage(){
        $talents = User::where('job_searching', '1')->get();
        return view('company.hire-talent')->with([
            'talents'=> $talents,
        ]);
    }
    public function getApplies(){
        if(Auth::user())
        { $job_applies = Apply::where('user_id' , Auth::user()->id)->get();
            $offers = Offer::get();
            return view('applies')->with([
                'job_applies'=> $job_applies,
                'offers'=> $offers,
            ]); 
        }
        else{
            return "error 404";
        }
        
    }
    
    public function getUserHome(){
        $offers = Offer::get();
        return view('dashboard')->with([
            'offers'=> $offers,
        ]);
    }

   
    public function getTalentCv(Request $request,$id)
    {
        $skills = Skill::get('skill_title');
        $languages = Language::get('language');
        $userSkills = UserSkill::where('user_id', $id)->get('skill_id');
        $userEdus = Education::where('user_id', $id)->get();
        $userExps = Experience::where('user_id', $id)->get();
        $userLanguages = UserLanguage::where('user_id', $id)->get();
        $user = User::find($id);
        $current = $user->job_searching == 1 ? 'checked' : '';
        
        return view('company.user-cv')->with([
            'userExps' => $userExps,
            'skills' => $skills,
            'languages' =>  $languages,
            'current' => $current,
            'userSkills' => $userSkills,
            'userEdus' => $userEdus,
            'user' => $user,
            'userLanguages' => $userLanguages,
    ]);
    }
}
