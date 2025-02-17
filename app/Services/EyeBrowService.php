<?php

namespace App\Services;

use App\Models\Eyebrow;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class EyeBrowService
{
    protected $model;

    public function __construct(Eyebrow $model)
    {
        $this->model = $model;

    }

    public function index(){
        return $this->model::get();
    }
}
