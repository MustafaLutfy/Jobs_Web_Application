<?php

namespace App\Http\Controllers;
use App\Models\Offer;
use App\Models\Job;
use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function getOffers(){
        $job_titles = Job::get('job_title');
        $offers = Offer::get();
        return view('offers')->with([
            'offers'=> $offers,
            'job_titles'=> $job_titles,
        ]);
    }
    
}
