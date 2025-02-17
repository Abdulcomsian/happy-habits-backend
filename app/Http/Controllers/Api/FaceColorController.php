<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Resources\ColorResource;
use App\Services\ColorService;
use Illuminate\Http\Request;

class FaceColorController extends Controller
{
    protected $service;
    public function __construct(ColorService $service)
    {
        $this->service = $service;
    }


    public function index(){
        try{
            $data = $this->service->index();
            return response()->json([
                "status" => true,
                "data" => [
                    "colors" => ColorResource::collection($data)
                ]
            ]);
        }catch(\Exception $e){
            return response()->json(['status' => false, "message" => "Something Went Wrong"], 400);
        }
    }
}
