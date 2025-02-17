<?php

namespace App\Services;

use App\Models\Goal;
use App\Models\UserGoal;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class GoalService
{
    protected $model;
    protected $userModel;

    public function __construct(Goal $model, UserGoal $userModel)
    {
        $this->model = $model;
        $this->userModel = $userModel;
    }

    public function index(){
        return $this->model::get();
    }

    public function store($data){
        UserGoal::where('user_id', Auth::user()->id)->delete();
        $goals = [];
        foreach($data['goals'] as $key => $goal){
            $goals[] = [
                "user_id" => Auth::user()->id,
                "goal_id" => $key,
                "time" => $goal,
                "created_at" => now(),
                "updated_at" => now(),
            ];
        }
        $save = $this->userModel::insert($goals);
        return $save;
    }

    public function edit($id){
        return $this->model::findOrFail($id);
    }

    public function update($data){
        $update = $this->model::find($data['id']);
        $update->name = $data['name'];
        $update->email = $data['email'];
        $update->save();
        return $update;
    }

    public function delete($data){
        $destroy = $this->model::findOrFail($data['id']);
        $destroy->delete();
    }
}
