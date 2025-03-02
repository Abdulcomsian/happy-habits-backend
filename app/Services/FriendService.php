<?php

namespace App\Services;

use App\Enums\FriendStatus;
use App\Models\Activity;
use App\Models\Friend;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class FriendService
{
    protected $model;

    public function __construct(Friend $model)
    {
        $this->model = $model;

    }

    public function getFriends(){
        return $this->model::where('user_id', Auth::user()->id)
            ->where('status', FriendStatus::ACCEPTED)
            ->latest()
            ->get();
    }

    public function getRequests(){
        return $this->model::where('friend_id', Auth::user()->id)
            ->where('status', FriendStatus::PENDING)
            ->latest()
            ->get();
    }

    public function sendRequest($data){
        $save = new Friend();
        $save->user_id = Auth::user()->id;
        $save->friend_id = $data['friend_id'];
        return $save->save();
    }
}
