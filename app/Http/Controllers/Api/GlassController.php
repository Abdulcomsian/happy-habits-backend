<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Resources\GlassResource;
use App\Services\GlassService;
use Illuminate\Http\Request;

class GlassController extends Controller
{
    protected $service;
    public function __construct(GlassService $service)
    {
        $this->service = $service;
    }


    public function index(){
        try{
            $data = $this->service->index();
            return response()->json([
                "status" => true,
                "data" => [
                    "glasses" => GlassResource::collection($data)
                ]
            ]);
        }catch(\Exception $e){
            return response()->json(['status' => false, "message" => "Something Went Wrong"], 400);
        }
    }
}
