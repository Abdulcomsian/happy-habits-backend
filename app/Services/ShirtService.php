<?php

namespace App\Services;

use App\Models\Shirt;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class ShirtService
{
    protected $model;

    public function __construct(Shirt $model)
    {
        $this->model = $model;

    }

    public function index(){
        return $this->model::get();
    }
}
