<?php

namespace App\Services;

use App\Models\Video;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class VideoService
{
    protected $model;

    public function __construct(Video $model)
    {
        $this->model = $model;

    }

    public function index(){
        return $this->model::get();
    }
}
