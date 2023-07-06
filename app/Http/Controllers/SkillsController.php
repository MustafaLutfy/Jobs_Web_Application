<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Skill;
use App\Models\UserSkill;

class SkillsController extends Controller
{
    public function addSkill(Request $request){

        $skillId = Skill::where('skill_title',$request->skill)->get()->value('id');
        if(Auth::user()){
            $skill = UserSkill::create([
                'user_id'=> Auth::user()->id,
                'skill_id' => $skillId,
            ]);
        return redirect('profile')->with('msg','Skill Added');
    }
    }
}
