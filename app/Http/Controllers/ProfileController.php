<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index()
    {
        $adminDetail = User::whereHas('roles', function($query){
            $query->where('name', "admin");
        })->first();
        return view('profile', compact('adminDetail'));
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request)
    {
        try{
            $admin = User::find($request->admin_id);
            if($admin){
                $admin->name = $request->full_name;
                $admin->email = $request->email;
                if($admin->update()){
                    return redirect()->back()->with('success', "Profile Updated Successfully");
                }
            }else{
                return redirect()->back()->with('error', "No admin found");
            }
        }catch(\Exception $e){
            return redirect()->back()->with('error', "Something went wrong");
        }
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }


    /**
     * Updates the admin account password
     */
    public function updatePassword(Request $request){
        $request->validate([
            'new_password' => "required|required_with:confim_password|same:confim_password",
            'confim_password' => "required",
        ]);

        try{
            $admin = User::find($request->admin_id);
            if($admin){
                $admin->password = Hash::make($request->new_password);
                if($admin->update()){
                    return redirect()->back()->with('success', "Password updated successfully");
                }
            }else{
                return redirect()->back()->with('error', "No user found");
            }
        }catch(\Exception $e){
            return redirect()->back()->with('error', "Something went wrong");
        }
    }
}
