<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pets extends Model
{
    use HasFactory;

    protected $fillable = [
        "name", "category", "breed", "description", "age", "color", "weight", "adorption_fee",
        "gender", "image", "adoption_status", "breed_id", "pet_category_id"
    ];
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function adorptions()
    {
        return $this->hasMany(Adorption::class);
    }
}
