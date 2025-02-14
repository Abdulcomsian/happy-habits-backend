<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Requests\GoalRequest;
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
            return response()->json(['status' => false, "message" => "Something Went Wrong"], 400);
        }
    }

    public function store(GoalRequest $request){
        try{
            $this->service->store($request->validated());
            return response()->json(['status' => true, "message" => "Goals Saved Successfully"], 200);
        }catch(\Exception $e){
            return response()->json(['status' => false, "message" => "Something Went Wrong"], 400);
        }
    }
}
