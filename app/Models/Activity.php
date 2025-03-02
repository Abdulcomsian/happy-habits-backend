<?php

namespace App\Models;

use App\Enums\ActivityType;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        "name",
        "activity_relation_id",
        "activity_relation_type",
        "xp_points",
        "coins",
        "type",
        "user_id",
    ];

    protected $casts = [
        'type' => ActivityType::class,
    ];

    public function activityRelation()
    {
        return $this->morphTo();
    }
}
