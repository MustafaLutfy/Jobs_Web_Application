<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;


   public function userSkills()
   {
       return $this->hasMany(UserSkill::class);
   }
   public function offerSkills()
   {
       return $this->hasMany(OfferSkill::class);
   }
}
