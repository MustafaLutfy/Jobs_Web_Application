<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

   public function applies(): HasMany
   {
       return $this->hasMany(Apply::class);
   }
   

   protected $fillable = [
            'company_id',
            'job_id',
            'last_name' ,
            'requirments', 
            'responsibilities',
            'salary',
        //  'work_time'
   ];
}
