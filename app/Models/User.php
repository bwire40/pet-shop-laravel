<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'age',
        'gender',
        'userType',
        'image',
        'password',
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
    public function pet_categories()
    {
        return $this->hasMany(PetCategory::class);
    }
    public function accessory_categories()
    {
        return $this->hasMany(AccessoryCategory::class);
    }
    public function pets()
    {
        return $this->hasMany(Pets::class);
    }
    public function accessories()
    {
        return $this->hasMany(Accessory::class);
    }
    public function adorptions()
    {
        return $this->hasMany(Adorption::class);
    }
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
