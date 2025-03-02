<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Resources\ActivityResource;
use App\Services\ActivityService;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    protected $service;
    public function __construct(ActivityService $service)
    {
        $this->service = $service;
    }


    public function getUserActivities(){
        try{
            $data = $this->service->getUserActivities();
            return response()->json([
                "status" => true,
                "data" => [
                    "activities" => $data->count() > 0 ? ActivityResource::collection($data) : null,
                ]
            ]);
        }catch(\Exception $e){
            return response()->json(['status' => false, "message" => "Something Went Wrong"], 400);
        }
    }

    public function storeUserAcitivity(Request $request){
        dd($request->all());
    }
}
