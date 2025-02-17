<?php

namespace App\Services;

use App\Models\Lip;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class LipService
{
    protected $model;

    public function __construct(Lip $model)
    {
        $this->model = $model;

    }

    public function index(){
        return $this->model::get();
    }
}
