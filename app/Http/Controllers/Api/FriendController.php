<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Resources\FriendResource;
use App\Services\FriendService;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    protected $service;
    public function __construct(FriendService $service)
    {
        $this->service = $service;
    }


    public function getFriends(){
        try{
            $data = $this->service->getFriends();
            return response()->json([
                "status" => true,
                "data" => [
                    "friends" => $data->count() > 0 ? FriendResource::collection($data) : null,
                ]
            ]);
        }catch(\Exception $e){
            return response()->json(['status' => false, "message" => "Something Went Wrong"], 400);
        }
    }

    public function getRequests(){

        try{
            $data = $this->service->getRequests();
            return response()->json([
                "status" => true,
                "data" => [
                    "requests" => $data->count() > 0 ? FriendResource::collection($data) : null,
                ]
            ]);
        }catch(\Exception $e){
            return response()->json(['status' => false, "message" => "Something Went Wrong"], 400);
        }
    }

    public function sendRequest(Request $request){
        try{
            $this->service->sendRequest($request->all());
            return response()->json([
                "status" => true,
                "message" => "Request sent successfully",
            ]);
        }catch(\Exception $e){
            return response()->json(['status' => false, "message" => "Something Went Wrong"], 400);
        }
    }
}
