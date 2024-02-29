<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    use HasFactory;
    protected $fillable = [
        "name", "category", "pet_category_id"
    ];


    public function pet_categories()
    {
        return $this->belongsTo(PetCategory::class);
    }
}
