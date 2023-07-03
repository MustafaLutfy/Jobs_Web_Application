<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    protected $fillable = [
        'cp_name',
        'cp__email',
        'cp__phone',
        'password',
        'country',
        'city',
        'Address',
        'zip_code',
        'employees_number',
        'profile_photo_path',
        'website',
        'cp_logo_path',
        'description',

    ];

}
