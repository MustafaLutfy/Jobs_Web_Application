<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Company extends Authenticatable
{
    use HasFactory;

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    protected $guard = 'company';

    protected $fillable = [
        'cp_name',
        'cp_email',
        'cp_phone',
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

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

}
