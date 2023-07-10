<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;


    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

  
}
