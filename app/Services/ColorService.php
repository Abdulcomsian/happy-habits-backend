<?php

namespace App\Services;

use App\Models\FaceColor;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class ColorService
{
    protected $model;

    public function __construct(FaceColor $model)
    {
        $this->model = $model;

    }

    public function index(){
        return $this->model::get();
    }
}
