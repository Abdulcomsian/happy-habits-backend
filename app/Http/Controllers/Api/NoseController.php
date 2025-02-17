<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Resources\NoseResource;
use App\Services\NoseService;
use Illuminate\Http\Request;

class NoseController extends Controller
{
    protected $service;
    public function __construct(NoseService $service)
    {
        $this->service = $service;
    }


    public function index(){
        try{
            $data = $this->service->index();
            return response()->json([
                "status" => true,
                "data" => [
                    "noses" => NoseResource::collection($data)
                ]
            ]);
        }catch(\Exception $e){
            return response()->json(['status' => false, "message" => "Something Went Wrong"], 400);
        }
    }
}
