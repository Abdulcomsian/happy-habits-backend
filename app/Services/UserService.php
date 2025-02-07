<?php

namespace App\Services;

use App\Models\User;
use Notification;
use App\Notifications\{
    RegisterNotification,
    NotifyUserOtp,
};
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class UserService
{
    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function store($data)
    {
        $save = new $this->model;
        $save->name = $data['name'];
        $save->email = $data['email'];
        $save->password = Hash::make($data['password']);
        $save->otp = rand(0000, 9999);
        $save->tc_status = $data['tc_status'];
        if($save->save()){
            $save->assignRole("user");
            try{
                Notification::route('mail', $save->email)->notify(new RegisterNotification($save->id, $save->otp, $save->name));
                return [
                    'status' => 'success',
                    'message' => 'OTP sent successfully to ' . $save->email,
                    'data' => $save,
                ];
            }catch(\Exception $e){
                return [
                    'status' => 'error',
                    'message' => 'Failed to OTP email to ' . $save->email,
                    'error' => $e->getMessage(),
                ];
            }
        }else{
            return [
                'status' => 'error',
                'message' => 'Failed to save user data',
                'data' => null
            ];
        }
    }

    public function login($data){
        $user = $this->model::where('email', $data->email)->first();
        if(!$user || !Auth::attempt(['email' => $data->email, 'password' => $data->password])){
            return [
                "status" => "error",
                "message" => "Invalid Cradentials",
            ];
        }

        if($user->email_verified_at == null){
            return [
                "status" => "error",
                "message" => "Email is not verified",
            ];
        }

        // creating a login token
        $token = $user->createToken($user->name.'-AuthToken')->plainTextToken;

        return [
            "status" => "success",
            "access_token" => $token,
            "type" => "Bearer",
            "message" => "User Login Successfully",
        ];
    }

    public function logout(){
        Auth::user()->tokens()->delete();
        return [
            "status" => "success",
            "message" => "User Logout Successfully",
        ];
    }

    public function sendEmail($email){
        $user = $this->model::where('email', $email)->first();
        if($user && $user != null){
            $otp = rand(0000, 9999);
            $user->update(['otp' => $otp]);
            try{
                Notification::route('mail', $email)->notify(new NotifyUserOtp($otp));
                return [
                    "status" => "success",
                    "message" => "An OTP has been sent to your email",
                    "user_id" => $user->id,
                ];
            }catch(\Exception $e){
                return [
                    "status" => "error", 
                    "message" => "Email couldn`t delivered",
                ];
            }
        }else{
            return [
                "status" => "error",
                "message" => "No record found against this email",
            ];
        }
    }

    public function verifyOtp($data){
        $user = $this->model::findOrFail($data->user_id);
        if($user && $user != null){
            if($user->otp == $data->otp){
                $user->otp = null;
                $user->email_verified_at = Carbon::now();
                if($user->update()){
                    return [
                        "status" => "success",
                        "message" => "OTP has been verified",
                        "user_id" => $user->id,
                    ];
                }
            }else{
                return [
                    "status" => "error",
                    "message" => "OTP verification failed",
                ];
            }
        }else{
            return [
                "status" => "error",
                "message" => "No user found against this id",
            ];
        }
    }

    public function updatePassword($data){
        $user = $this->model::findOrFail($data->user_id);
        if($user && $user != null){
            $user->password = Hash::make($data->password);
            if($user->update()){
                return [
                    "status" => "success",
                    "message" => "Password has been updated Successfully",
                ];
            }else{
                return [
                    "status" => "error",
                    "message" => "Password cannot be updated at this time. Please try again in a while",
                ];
            }
        }else{
            return [
                "status" => "error",
                "message" => "No user found against this id",
            ];
        }
    }

    public function resendOtp($data){
        $user = $this->model::findOrFail($data->user_id);
        if($user && $user != null){
            $otp = rand(0000, 9999);
            $user->otp = $otp;
            $user->update();
            try{
                Notification::route('mail', $user->email)->notify(new NotifyUserOtp($otp));
                return [
                    "status" => "success",
                    "message" => "An otp has been sent to your email",
                    "user_id" => $user->id,
                ];
            }catch(\Exception $e){
                return [
                    "status" => "error",
                    "message" => "Email couldn`t delivered",
                ];
            }
        }else{
            return [
                "status" => "error",
                "message" => "No record found against this id",
            ];
        }
    }

    public function edit($id){
        return $this->model::findOrFail($id);
    }

    public function update($data){
        $update = $this->model::find($data['id']);
        $update->name = $data['name'];
        $update->email = $data['email'];
        $update->save();
        return $update;
    }

    public function delete($data){
        $destroy = $this->model::findOrFail($data['id']);
        $destroy->delete();
    }
}
