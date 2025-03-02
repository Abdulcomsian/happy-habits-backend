<?php

namespace App\Services;

use App\Enums\ActivityType;
use App\Models\Activity;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class ActivityService
{
    protected $model;

    public function __construct(Activity $model)
    {
        $this->model = $model;

    }

    public function getUserActivities(){
        return $this->model::where('user_id', Auth::user()->id)
            ->where('type', ActivityType::EARNED)
            ->whereBetween('created_at', [Carbon::now()->subWeek(), Carbon::now()])
            ->latest()
            ->get();
    }
}
