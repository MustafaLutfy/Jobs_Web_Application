<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Skill;
use App\Models\UserSkill;

class SkillsController extends Controller
{
    public function addSkill(Request $request){
      $user_skills = UserSkill::where('user_id' , Auth::user()->id)->get();
      $checker = true;
      $skillId = Skill::where('skill_title',$request->skill)->get()->value('id');

      foreach($user_skills as $user_skill){
          if($user_skill->skill_id == $skillId){
            $checker = false;
            return redirect()->back();
            break;
          }
      }
   

        if(Auth::user() && $checker){
            $skill = UserSkill::create([
                'user_id'=> Auth::user()->id,
                'skill_id' => $skillId,
            ]);
            return redirect()->back()->with('msg','Skill Added');
    }
    }
    public function removeSkill($id){
        UserSkill::where('skill_id', $id)->delete();  
        return redirect()->back();
    }
}
