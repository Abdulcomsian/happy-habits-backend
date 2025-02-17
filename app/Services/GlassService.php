<?php

namespace App\Services;

use App\Models\Glass;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class GlassService
{
    protected $model;

    public function __construct(Glass $model)
    {
        $this->model = $model;

    }

    public function index(){
        return $this->model::get();
    }
}
