<?php

namespace App\Services;

use App\Models\Beard;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class BeardService
{
    protected $model;

    public function __construct(Beard $model)
    {
        $this->model = $model;

    }

    public function index(){
        return $this->model::get();
    }
}
