<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSkill extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'skill_id', 
    ];

    
    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
    public function offers(): BelongsTo
    {
        return $this->belongsToMany(Offer::class);
    }
    public function users(): BelongsTo
    {
        return $this->belongsToMany(User::class);
    }
    
}
