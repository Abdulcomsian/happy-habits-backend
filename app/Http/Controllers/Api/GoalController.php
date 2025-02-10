<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Resources\GoalResource;
use App\Services\GoalService;
use Illuminate\Http\Request;

class GoalController extends Controller
{
    protected $service;
    public function __construct(GoalService $service)
    {
        $this->service = $service;
    }


    public function index(){
        try{
            $data = $this->service->index();
            return GoalResource::collection($data)->additional(["status" => true]);
        }catch(\Exception $e){
            return response()->json(['status' => false, "data" => "Something Went Wrong", "error" => $e->getMessage(), "on line" => $e->getLine()], 400);
        }
    }
}
