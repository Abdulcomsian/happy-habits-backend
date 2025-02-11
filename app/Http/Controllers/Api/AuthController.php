<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\LoginRequest;
use App\Services\UserService;
use App\Http\Requests\Api\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Sanctum\PersonalAccessToken;

class AuthController extends Controller
{
    protected $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function registerUser(RegisterRequest $request){
        try{
            $response = $this->userService->store($request->validated());
            if($response['status'] == "success"){
                return response()->json(['status' => true, "msg" => $response['message'], "user_id" => $response['user_id']], 200);
            }else{
                return response()->json(['status' => false, "msg" => $response['message']], 400);
            }
        }catch(\Exception $e){
            return response()->json(['status' => false, "data" => "Something Went Wrong", "error" => $e->getMessage(), "on line" => $e->getLine()], 400); 
        }
    }

    public function loginUser(LoginRequest $request){
        try{
            $response = $this->userService->login($request);
            if($response['status'] == "success"){
                return response()->json([
                    "msg" => $response['message'],
                    "data" => [
                        "access_token" => $response['access_token'],
                        "user" => new UserResource($response['user']),
                    ],
                ], 200);
            }else{
                return response()->json(['status' => false, "msg" => $response['message']], 400);
            }
        }catch(\Exception $e){
            return response()->json(['status' => false, "data" => "Something Went Wrong", "error" => $e->getMessage(), "on line" => $e->getLine()], 400);
        }
    }

    public function logoutUser(){
        try{
            $response = $this->userService->logout();
            if($response['status'] == "success"){
                return response()->json(['status' => true, "msg" => $response['message']], 200);
            }else{
                return response()->json(['status' => false, "msg" => $response['message']], 400);
            }
        }catch(\Exception $e){
            return response()->json(['status' => false, "data" => "Something Went Wrong", "error" => $e->getMessage(), "on line" => $e->getLine()], 400);
        }
    }

    public function sendEmailForgotPassword(Request $request){
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        try{
            $email = $request->email;
            $response = $this->userService->sendEmail($email);
            if($response['status'] == "success"){
                return response()->json(['status' => true, "msg" => $response['message'], "user_id" => $response['user_id']], 200);
            }else{
                return response()->json(['status' => false, "msg" => $response['message']], 400);
            }
        }catch(\Exception $e){
            return response()->json(['status' => false, "data" => "Something Went Wrong", "error" => $e->getMessage(), "on line" => $e->getLine()], 400);
        }
    }

    public function verifyOtp(Request $request){
        $request->validate([
            "otp" => ['required', 'integer'],
            "user_id" => ["required"],
        ]);
        try{
            $response = $this->userService->verifyOtp($request);
            if($response['status'] == "success"){
                return response()->json(['status' => true, "msg" => $response['message'], "user_id" => $response['user_id']], 200);
            }else{
                return response()->json(['status' => false, "msg" => $response['message']], 400);
            }
        }catch(\Exception $e){
            return response()->json(['status' => false, "data" => "Something Went Wrong", "error" => $e->getMessage(), "on line" => $e->getLine()], 400);
        }
    }

    public function checkUserName(Request $request){
        $request->validate([
            "username" => "required",
        ]);

        try{
            $data = $this->userService->checkUserName($request->all());
            if(count($data) > 0){ // means username is already taken
                return response()->json(['status' => false, "msg" => "Username is already taken"], 400);
            }else{
                return response()->json(['status' => true, "msg" => "Username is valid"], 200);
            }
        }catch(\Exception $e){
            return response()->json(['status' => false, "data" => "Something Went Wrong", "error" => $e->getMessage(), "on line" => $e->getLine()], 400);
        }
    }

    public function setUserName(Request $request){
        $request->validate([
            "user_id" => "required",
            "username" => "required|unique:users",
        ]);

        try{
            $this->userService->setUserName($request->all());
            return response()->json(['status' => false, "msg" => "Username saved successfully"], 400);
        }catch(\Exception $e){
            return response()->json(['status' => false, "data" => "Something Went Wrong", "error" => $e->getMessage(), "on line" => $e->getLine()], 400);
        }
    }

    public function refreshToken(Request $request){
        $request->validate([
            "token" => 'required',
        ]);

        try{
            $accessToken = PersonalAccessToken::findToken($request->token);
            if (!$accessToken) {
                return response()->json(['message' => 'Invalid token'], 401);
            }
            $user = $accessToken->tokenable;
            $accessToken->delete();
            $newToken = $user->createToken('API Token')->plainTextToken;
            return response()->json([
                "msg" => "Token refreshed successfully",
                "data" => [
                    "access_token" => $newToken,
                    "user" => new UserResource($user),
                ],
            ], 200);
        }catch(\Exception $e){
            return response()->json(['status' => false, "data" => "Something Went Wrong", "error" => $e->getMessage(), "on line" => $e->getLine()], 400);
        }
    }

    public function updatePassword(Request $request){
        $request->validate([
            "user_id" => ['required'],
            "password" => ['required'],
        ]);

        try{
            $response = $this->userService->updatePassword($request);
            if($response['status'] == "success"){
                return response()->json(['status' => true, "msg" => $response['message']], 200);
            }else{
                return response()->json(['status' => false, "msg" => $response['message']], 400);
            }
        }catch(\Exception $e){
            return response()->json(['status' => false, "data" => "Something Went Wrong", "error" => $e->getMessage(), "on line" => $e->getLine()], 400);
        }
    }

    public function resendOtp(Request $request){
        $request->validate([
            "user_id" => "required",
        ]);

        try{
            $response = $this->userService->resendOtp($request);
            if($response['status'] == "success"){
                return response()->json(['status' => true, "msg" => $response['message'], "user_id" => $response['user_id']], 200);
            }else{
                return response()->json(['status' => false, "msg" => $response['message']], 400);
            }
        }catch(\Exception $e){
            return response()->json(['status' => false, "data" => "Something Went Wrong", "error" => $e->getMessage(), "on line" => $e->getLine()], 400);
        }
    }
}
