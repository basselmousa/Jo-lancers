<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintsController extends Controller
{
    //
    public function index()
    {
        $complaints = Complaint::where("user_id", auth("web")->id())->get();
        return view("users.complaints.index", compact("complaints"));
    }
}
