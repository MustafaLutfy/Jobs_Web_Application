<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'institution_name', 
        'from_date', 
        'to_date', 
    ];

   public function user(): BelongsTo
   {
       return $this->belongsTo(User::class);
   }    

}
