<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    protected $fillable = [
        "is_male",
        "color_id",
        "hair_id",
        "shirt_id",
        "glasses_id",
        "eyes_id",
        "eyebrows_id",
        "noses_id",
        "lips_id",
        "beards_id",
    ];
    
}