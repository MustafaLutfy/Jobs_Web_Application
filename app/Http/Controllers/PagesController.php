<?php

namespace App\Http\Controllers;
use App\Models\Offer;
use App\Models\Job;
use App\Models\Apply;
use Illuminate\Http\Request;
use Auth;

class PagesController extends Controller
{
    public function getOffers(){
        if(Auth::user())
        { $job_titles = Job::get('job_title');
            $offers = Offer::get();
            return view('offers')->with([
                'offers'=> $offers,
                'job_titles'=> $job_titles,
            ]);
        }

        else{
            return "error 404";
        }
       
    }
    public function getCompanyOffers(){
        $company_id = Auth::guard('company')->user()->id;
        $offers = Offer::where('company_id', $company_id)->get();
        return view('company-offers')->with([
            'offers'=> $offers,
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

    public function getOffer($id){
        $offer = Offer::where('id', $id)->get()->first();
        return view('offer-show')->with([
            'offer'=> $offer,
        ]);
    }
    
}
