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
        if(Auth::guard('company') || Auth::user()->is_admin == 1){
            Apply::where('offer_id', $id)->delete();
            Offer::where('id', $id)->delete();  
        }

        if(Auth::user()->is_admin == 0){
            return redirect('offers');
        }
        elseif(Auth::user()->is_admin == 1){
            return redirect()->back();
        }
        
    }



    public function skillFilter(Request $request)
    {
        $skill_id = $request->skill_id;
        $offers = OfferSkill::where('skill_id', $skill_id)->get();
        $skills = Skill::get();
        if($offers){
            return view('offers')->with([
                'offers'=> $offers,
                'skills'=> $skills,
                'isFiltered'=> true,
            ]);
        }
            
    }
    public function orderBy(Request $request)
    {
        $skill_id = $request->skill_id;       
        $skills = Skill::get(); 
        if($request->orderby == 'newer_first' || $request->orderby == null){
            $offers = Offer::get()->orderBy('created_at', 'desc');
        }
        switch($request->orderby){
            case 'older_first':
                $offers = Offer::orderBy('created_at')->get();
                break;
            case 'work_time':
                $offers = Offer::orderBy('work_time', 'desc')->get();
                break;
           
        }
            return view('offers')->with([
                'offers'=> $offers,
                'skills'=> $skills,
                'isFiltered'=> false,

            ]);
        
    }
}
