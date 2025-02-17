<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Goal extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'image',
        'time',
    ];

    public function userGoal(){
        return $this->hasOne(UserGoal::class, 'goal_id');
    }
}
