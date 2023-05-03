<?php

namespace App\Http\Controllers\ServiceProvider;

use App\Http\Controllers\Controller;
use App\Models\ServiceProviderType;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    //

    public function index()
    {
        $skills = ServiceProviderType::with(["skill"])->where("service_provider_id",auth("provider")->id())->get();
        return view("service-provider.skills.index",compact("skills"));
    }

    public function delete(Request $request, ServiceProviderType $type)
    {
        $type->delete();
        return back()->with("success","Deleted Successfully");
    }
}
