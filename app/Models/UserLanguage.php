<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLanguage extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'lang_id', 
        'level', 
    ];

    public function language(): BelongsTo
    {
        return $this->belongsToMany(Language::class);
    }

    public function users(): BelongsTo
    {
        return $this->belongsToMany(User::class);
    }
    
}
