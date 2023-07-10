<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Skill;
use App\Models\UserSkill;
use App\Models\Language;
use App\Models\UserLanguage;

class LanguagesController extends Controller
{
    public function addLanguage(Request $request){

        $langId = Language::where('language',$request->language)->get()->value('id');
        if(Auth::user()){
            $language = UserLanguage::create([
                'user_id'=> Auth::user()->id,
                'lang_id' => $langId,
                'level' => $request->level,
            ]);
        return redirect('profile')->with('msg','Language Added');
       }
    }

    public function removeLanguage($id){
        UserLanguage::where('lang_id', $id)->delete();  
        return redirect('profile');
    }
}
