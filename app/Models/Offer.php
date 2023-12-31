<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Offer extends Model
{
    use HasFactory;

    public function company(): BelongsTo
   {
       return $this->belongsTo(Company::class);
   }

   public function skills(): belongsTo
   {
       return $this->belongsToMany(Skill::class);
   }
   public function job(): belongsTo
   {
       return $this->belongsTo(Job::class);
   }

   public function applies(): HasMany
   {
       return $this->hasMany(Apply::class);
   }
   public function offerSkills(): HasMany
   {
       return $this->hasMany(OfferSkill::class);
   }
   

   protected $fillable = [
            'company_id',
            'job_id',
            'last_name' ,
            'requirments', 
            'responsibilities',
            'salary',
            'work_time'
   ];
}
