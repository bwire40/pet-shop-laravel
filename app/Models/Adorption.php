<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adorption extends Model
{
    use HasFactory;


    protected $fillable = [
        "username",
        "email",
        "address",
        "number",
        "petname",
        "adorption_fee",
        "category",
        "breed",
        "age",
        "color",
        "gender",
        "weight",
        "description",
        "experience",
        "pets",
        "vetenary",
        "house_type",
        "house_ownership",
        "house_agreement",
        "allergies",
        "training_type",
        "care",
        "followup",
        "terms",
        "pets_id",
        "adorption_status"

    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function pets()
    {
        return $this->belongsTo(Pets::class);
    }
}
