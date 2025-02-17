<?php

namespace App\Services;

use App\Models\Nose;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class NoseService
{
    protected $model;

    public function __construct(Nose $model)
    {
        $this->model = $model;

    }

    public function index(){
        return $this->model::get();
    }
}
