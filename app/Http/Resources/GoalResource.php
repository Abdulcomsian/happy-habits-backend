<?php

namespace App\Http\Resources;

use App\Models\UserGoal;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class GoalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $count = UserGoal::where('user_id', Auth::user()->id)->count();
        if($count > 0){
            $goals = [
                "id" => $this->id,
                "name" => $this->name,
                "image" => asset("storage/images/goals/" . $this->image),
                "minutes" => (int) $this->userGoal->time,
            ];
        }else{
            $goals = [
                "id" => $this->id,
                "name" => $this->name,
                "image" => asset("storage/images/goals/" . $this->image),
                "minutes" => (int) $this->time,
            ];
        }
        

        return $goals;
    }
}
