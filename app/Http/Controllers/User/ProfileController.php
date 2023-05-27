<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    //
    public function index()
    {
        return view("users.profile.index");
    }

    public function update_profile(Request $request)
    {
        $request->validate([
            "first_name" => "required",
            "second_name" => "required",
            "last_name" => "required",
            "password" => "nullable|min:8|confirmed",
            "country" => "required",
            "city" => "required|not_in:0",
            "state" => "required",
            "zip_code" => "required",
            "birthdate" => "required",
        ]);

        if (isset($request->password)){
            $password = Hash::make($request->password);
        }else{
            $password =  auth("web")->user()->password;

        }

        auth("web")->user()->update([
            "full_name" => $request->first_name . ' ' . $request->second_name . ' ' . $request->last_name,
            "password" =>$password,
            "country" => $request->country,
            "city" => $request->city,
            "state" => $request->state,
            "zip_code" => $request->zip_code,
            "birthdate" => Carbon::make($request->birthdate)->toDateString(),
        ]);

        return back()->with("success","Profile Updated Successfully");

    }
}
