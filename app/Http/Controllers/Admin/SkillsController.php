<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use App\Models\ServiceType;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    //
    public function index()
    {
        $skills = ServiceType::all();
        $categories = ServiceCategory::all();
        return view("admin.skill.index", compact("skills",'categories'));
    }

    public function create(Request $request)
    {
        //
        $request->validate([
            "name" => "required",
            "alt_code" => "required",
            "category_id" => "required"
        ]);
        ServiceType::create($request->all());
        return back()->with("success" ,"Skill Created Successfully");

    }

    public function update(Request $request, ServiceType $type)
    {
        //

        $request->validate([
            "name" => "required",
            "alt_code" => "required",
            "category_id" => "required"
        ]);
        $type->update($request->all());
        return back()->with("success" ,"Skill Updated Successfully");

    }

    public function delete(Request $request, ServiceType $type)
    {
        //

        $type->delete();
        return back()->with("success" ,"Skill Deleted Successfully");

    }
}
