<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Resources\EyeBrowResource;
use App\Services\EyeBrowService;
use Illuminate\Http\Request;

class EyeBrowController extends Controller
{
    protected $service;
    public function __construct(EyeBrowService $service)
    {
        $this->service = $service;
    }


    public function index(){
        try{
            $data = $this->service->index();
            return response()->json([
                "status" => true,
                "data" => [
                    "eyebrows" => EyeBrowResource::collection($data)
                ]
            ]);
        }catch(\Exception $e){
            return response()->json(['status' => false, "message" => "Something Went Wrong"], 400);
        }
    }
}
