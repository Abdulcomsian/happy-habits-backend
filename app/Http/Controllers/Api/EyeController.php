<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Resources\EyeResource;
use App\Services\EyeService;
use Illuminate\Http\Request;

class EyeController extends Controller
{
    protected $service;
    public function __construct(EyeService $service)
    {
        $this->service = $service;
    }


    public function index(){
        try{
            $data = $this->service->index();
            return response()->json([
                "status" => true,
                "data" => [
                    "eyes" => EyeResource::collection($data)
                ]
            ]);
        }catch(\Exception $e){
            return response()->json(['status' => false, "message" => "Something Went Wrong"], 400);
        }
    }
}
