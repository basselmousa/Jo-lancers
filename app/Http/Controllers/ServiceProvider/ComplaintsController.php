<?php

namespace App\Http\Controllers\ServiceProvider;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintsController extends Controller
{
    //
    public function index()
    {
        $complaints = Complaint::where("service_provider_id", auth("provider")->id())->get();
        return view("service-provider.complaints.index", compact("complaints"));
    }
}
