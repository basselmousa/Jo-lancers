<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceType;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    //
    public function index()
    {
        $skills = ServiceType::all();
        return view("admin.category.index",compact("skills"));
    }
}
