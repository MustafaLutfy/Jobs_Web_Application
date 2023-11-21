<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Offer;
use App\Models\UserOffer;
use App\Models\Apply;
use App\Models\OfferSkill;
use App\Models\Skill;

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function skills($id)
    {
        $offer = Offer::where('id', $id)->get()->first();
        $skills = Skill::get();
        $offerSkills = OfferSkill::where('offer_id',$id)->get();
    
        return view('add-offer-skills')->with([
            'skills' => $skills,
            'offer' => $offer,
            'offerSkills' => $offerSkills,
        ]);
    }


    public function create()
    {
        $jobs = Job::get('job_title');
    
        return view('company.make-offer')->with('jobs',$jobs);
    }



    public function createApply($id){
        return view('job-apply')->with([
            'id'=> $id,
        ]);
    }
    public function Apply(Request $request, $id){
        // $request->validate([
            
        //     'description' => ['nullable','string'],

        // ]);
     
         
        if(Auth::user()){
            $apply = Apply::create([
                'offer_id' => $id,
                'user_id' => Auth::user()->id,
                'description' => $request->description,
            ]);
            
            return redirect('offers')->with('msg','Job Offer Published');

        }
    }
    
    public function store(Request $request)
    {

        // return $request;
        // $request->validate([
        //     // 'company_id' => ['required', 'numeric'],
        //     // 'job_id' => ['required', 'numeric'],
        //     // 'requirments' => ['required','string'],
        //     // 'responsibilities' => ['required','string'],
        //     // 'salary' => ['required', 'string', 'max:30'], 
        // //  'work_time' => ['required', 'string', 'max:30'],

        // ]);
        
        $salary = $request->minSalary .'$-'.$request->maxSalary.'$';

        if(Auth::guard('company')->check()){
            $offer = Offer::create([
                'company_id' => Auth::guard('company')->id(),
                'job_id' => Job::where('job_title',$request->job_title)->value('id'),
                'requirments' => $request->requirments,
                'responsibilities' => $request->responsibilities,
                'work_time' => $request->work_time,
                'address' => $request->address,
                'salary' => $salary,
            ]);
            
            return view('company.offer-show');

        }
        else{
            return redirect()->back()->with('msg','Pls loging first');
        }
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $offerSkills = OfferSkill::where('offer_id',$id)->get();
        $offer =  Offer::where('id', $id)->get()->first();
        return view('offer-show')->with([
            'offer' => $offer,
            'offer_skills' => $offerSkills,
        ]); 
    } 

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jobs = Job::get('job_title');
        $offer = Offer::where('id', $id)->get()->first();
        return view('company.edit-offer')->with([
            'jobs' =>$jobs, 
            'offer' =>$offer, 
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $salary = $request->minSalary .'$-'.$request->maxSalary.'$';

        if(Auth::guard('company')->check()){
            $offer = Offer::where('id', $id)->update([
                'requirments' => $request->requirments,
                'responsibilities' => $request->responsibilities,
                'work_time' => $request->work_time,
                'salary' => $salary,
            ]);
            
            return redirect('offer.skills.page');

        }
        else{
            return redirect()->back()->with('msg','Pls loging first');
        }
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function removeOffer(string $id)
    {
        if(Auth::guard('company')){
            Offer::where('id', $id)->delete();  
        }
        return redirect('offers');
        
    }



    public function skillFilter(Request $request)
    {
        $skill_id = $request->skill_id;
        $offers = OfferSkill::where('skill_id', $skill_id)->get();
        $skills = Skill::get();
            return view('filtered-offers')->with([
                'offers'=> $offers,
                'skills'=> $skills,
            ]);
    }
}
