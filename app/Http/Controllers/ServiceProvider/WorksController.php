<?php

namespace App\Http\Controllers\ServiceProvider;

use App\Http\Controllers\Controller;
use App\Models\ServiceProviderWork;
use App\Models\ServiceType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorksController extends Controller
{
    //
    public function index()
    {
        $works = ServiceProviderWork::where("service_provider_id",auth("provider")->id())->get();
        $skills = ServiceType::all();
        return view("service-provider.works.index",compact("works","skills"));
    }

    public function create(Request $request)
    {
        //
        $request->validate([
            "title" => "required",
            "description" => "required",
            "image" => "required|mimes:jpg,jpeg,png|max:10000",
            "type" => "required|not_in:0"
        ]);
        ServiceProviderWork::create([
            "service_provider_id" => auth("provider")->id(),
            "title" => $request->title,
            "description" => $request->description,
            "image" => $this->getFilePath($request,"image"),
            "service_type_id" => $request->type
        ]);
        return back()->with("success","Created Successfully");
    }

    public function delete(Request $request,ServiceProviderWork $work)
    {
        //
        Storage::delete($work->image);
        $work->delete();
        return back()->with("success","Deleted Successfully");
    }

    private function getFilePath(Request $request, string $string)
    {
        if ($request->hasFile($string)){
            return $request->file($string)->storePublicly($string);
        }
        return null;
    }
}
