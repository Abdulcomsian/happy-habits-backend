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

    public function __construct(Goal $model)
    {
        $this->model = $model;
    }

    public function index(){
        return $this->model::get();
    }

    public function store($data){
        UserGoal::where('user_id', Auth::user()->id)->delete();
        foreach($data['goals'] as $goal){
            $save = new UserGoal();
            $save->user_id = Auth::user()->id;
            $save->goal_id = $goal;
            $save->save();
        }
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
