<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;


    public function offer(): BelongsTo
    {
        return $this->belongsToMany(Offer::class);
    }
    public function users(): BelongsTo
    {
        return $this->belongsToMany(User::class);
    }
}
