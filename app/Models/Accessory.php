<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    use HasFactory;
    protected $fillable = [
        "name", "category", "price", "image", "accessory_category_id", "description"
    ];


    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
