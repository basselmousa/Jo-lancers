<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = ServiceCategory::all();
        return view("admin.category.index",compact("categories"));
    }

    public function create(Request $request)
    {
        //
        $request->validate([
            "name" => "required",
            "desc" => "required|min:25"
        ]);

        ServiceCategory::create($request->all());
        return back()->with("success" ,"Category Created Successfully");
    }

    public function update(Request $request, ServiceCategory $category)
    {
        //
        $request->validate([
            "name" => "required",
            "desc" => "required|min:25"
        ]);
        $category->update($request->all());
        return back()->with("success" ,"Category Updated Successfully");

    }
    public function delete(Request $request, ServiceCategory $category)
    {
        $category->delete();
        return back()->with("success" ,"Category Deleted Successfully");
    }

}
