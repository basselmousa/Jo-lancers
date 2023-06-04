<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintsController extends Controller
{
    //

    public function index()
    {
        $complaints = Complaint::with(["user","provider"])->get();
        return view("admin.complaints.index",compact("complaints"));
    }

    public function create(Request $request, Complaint $complaint)
    {
        $complaint->update([
            "actioned" => true,
        ]);

        return back()->with("success","Complaint Actioned Successfully");
    }
}
