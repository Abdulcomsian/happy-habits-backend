<?php

namespace App\Services;

use App\Models\Avatar;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class AvatarService
{
    protected $model;

    public function __construct(Avatar $model)
    {
        $this->model = $model;

    }

    public function index(){
        return $this->model::get();
    }

    public function store($data){
        $save = $this->model::updateOrCreate(
            [
                "user_id" => Auth::user()->id,
            ],
            [
                "is_male" => $data['is_male'] ?? null,
                "color_id" => $data['color_id'] ?? null,
                "hair_id" => $data['hair_id'] ?? null,
                "shirt_id" => $data['shirt_id'] ?? null,
                "glasses_id" => $data['glasses_id'] ?? null,
                "eyes_id" => $data['eyes_id'] ?? null,
                "eyebrows_id" => $data['eyebrows_id'] ?? null,
                "noses_id" => $data['noses_id'] ?? null,
                "lips_id" => $data['lips_id'] ?? null,
                "beards_id" => $data['beards_id'] ?? null,
            ]
        );
        
        return $save;
        
    }
}
