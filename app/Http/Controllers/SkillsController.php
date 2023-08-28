<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Skill;
use App\Models\UserSkill;
use App\Models\OfferSkill;

class SkillsController extends Controller
{


    public function addSkill(Request $request, $id){
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




    public function addOfferSkill(Request $request, $id){
        $offer_skills = OfferSkill::where('offer_id' , $id)->get();
        $checker = true;
        $skillId = Skill::where('skill_title',$request->skill)->get()->value('id');
  
        foreach($offer_skills as $offer_skill){
            if($offer_skill->skill_id == $skillId){
              $checker = false;
              return redirect()->back();
              break;
            }
        }
     
  
          if(Auth::guard('company')->check() && $checker){
              $skill = OfferSkill::create([
                  'offer_id'=> $id,
                  'skill_id' => $skillId,
              ]);
              return redirect()->back()->with('msg','Skill Added');
      }
      }
      public function removeOfferSkill($id){
          OfferSkill::where('skill_id', $id)->delete();  
          return redirect()->back();
      }
}
