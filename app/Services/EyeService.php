<?php

namespace App\Services;

use App\Models\Eye;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class EyeService
{
    protected $model;

    public function __construct(Eye $model)
    {
        $this->model = $model;

    }

    public function index($gender){
        return $this->model::where('gender', $gender)->get();
    }
}
