<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function index(  )
    {
        $admins = Admin::all();
        return view("admin.admins.index",compact("admins"));
    }

    public function create(Request $request)
    {
        //
        $request->validate([
            "full_name" => "required",
            "email" => "required",
            "password" => "required|min:8"
        ]);

        Admin::create([
            "full_name" => $request->full_name,
            "email" => $request->email,
            "password" => Hash::make($request->passowrd)
        ]);

        return back()->with("success" , "Added Successfully");
    }

    public function update(Request $request,Admin $admin)
    {
        $request->validate([
            "password" => "nullable|min:8",
            "full_name" => "required"
        ]);
//        dd($admin);

        if (isset($request->password)){
            $password = Hash::make($request->password);

        }else{
            $password = $admin->password;
        }
        $admin->update([
            "full_name" => $request->full_name,
            "password" => $password
        ]);
        return back()->with("success" , "Updated Successfully");

    }

    public function delete(Request $request, Admin $admin)
    {
//        dd($admin);
        $admin->delete();
        return back()->with("success" , "Deleted Successfully");

    }
}
