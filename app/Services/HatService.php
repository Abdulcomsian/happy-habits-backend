<?php

namespace App\Services;

use App\Models\Hat;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class HatService
{
    protected $model;

    public function __construct(Hat $model)
    {
        $this->model = $model;

    }

    public function index($gender){
        return $this->model::where('gender', $gender)->get();
    }
}
