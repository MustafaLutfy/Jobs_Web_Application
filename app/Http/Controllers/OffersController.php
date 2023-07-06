<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Offer;

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
    public function create()
    {
        $jobs = Job::get('job_title');
    
        return view('company.make-offer')->with('jobs',$jobs);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request);
        $request->validate([
            // 'company_id' => ['required', 'numeric'],
            // 'job_id' => ['required', 'numeric'],
            'requirments' => ['required','string'],
            'responsibilities' => ['required','string'],
            'salary' => ['required', 'string', 'max:30'], 
        //  'work_time' => ['required', 'string', 'max:30'],

        ]);

        if(Auth::guard('company')->check()){
            $offer = Offer::create([
                'company_id' => Auth::guard('company')->id(),
                'job_id' => Job::where('job_title',$request->job_title)->value('id'),
                'requirments' => $request->requirments,
                'responsibilities' => $request->responsibilities,
                'salary' => $request->salary,
            ]);
            
            return redirect()->back()->with('msg','Job Offer Published');

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}