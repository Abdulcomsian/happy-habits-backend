<?php

namespace App\Models;

use App\Enums\FriendStatus;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected $casts = [
        'type' => FriendStatus::class,
    ];
}
