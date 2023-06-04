<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use App\Models\ServiceProvider;
use Illuminate\Http\Request;

class ComplaintsController extends Controller
{
    //
    public function index()
    {
        $complaints = Complaint::where("user_id", auth("web")->id())->get();
        return view("users.complaints.index", compact("complaints"));
    }

    public function create(Request $request,ServiceProvider $provider)
    {
        $request->validate([
            "text" => "required"
        ]);
        Complaint::create([
            "text" => $request->text,
            "service_provider_id" => $provider->id,
            "user_id" => auth("web")->id(),
            "complaint_type" => "User"
        ]);

        return  redirect()->route("user.post.accepted-bids")->with("success","Complaint Created Successfully");
    }
}
