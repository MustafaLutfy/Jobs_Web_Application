<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'org_name', 
        'from_date', 
        'to_date', 
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }   
    
}
