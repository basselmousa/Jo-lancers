<?php

namespace App\Http\Controllers\ServiceProvider;

use App\Http\Controllers\Controller;
use App\Models\Currency;
use App\Models\ServiceProviderType;
use App\Models\ServiceType;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    //

    public function index()
    {
        $skills = ServiceProviderType::with(["skill"])
            ->where("service_provider_id",auth("provider")->id())
            ->get();
        $ids = ServiceProviderType::where("service_provider_id",auth("provider")->id())
            ->get("service_type_id")->toArray();
        $serviceTypes = ServiceType::whereNotIn("id",$ids)->get();

        $currencies = Currency::all();

        return view("service-provider.profile.index",compact("skills",'serviceTypes','currencies'));
    }

    public function addSkill(Request $request)
    {
        //
        $request->validate([
            "skill" => "required|not_in:0",
            "percentage" => "required|numeric|lte:100",
            "experience_year" => "required|numeric"
        ]);
        ServiceProviderType::create([
            "service_type_id" => $request->skill,
            "percentage" => $request->percentage,
            "service_provider_id" => auth("provider")->id(),
            "experience_years" => $request->experience_year
        ]);
        return back()->with("success","Created Successfully");
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            "first_name" => "required",
            "second_name" => "required",
            "last_name" => "required",
            "password" => "nullable|min:8|confirmed",
            "self_description" => "required",
            "skill_description" => "required",
            "country" => "required",
            "city" => "required|not_in:0",
            "state" => "required",
            "zip_code" => "required",
            "birthdate" => "required",
            "cv" => "nullable|mimes:docx,doc,pdf|max:10000",
            "image" => "nullable|mimes:jpg,jpeg,png|max:10000",
        ]);

        if (isset($request->password)){
            $password = Hash::make($request->password);
        }else{
            $password =  auth("provider")->user()->password;

        }
        if ($request->hasFile("cv")){
            Storage::delete(auth("provider")->user()->cv);
            $cv = $this->getFilePath($request,"cv");
        }else{
            $cv = auth("provider")->user()->cv;
        }
        if ($request->hasFile("image")){
            Storage::delete(auth("provider")->user()->image);
            $image = $this->getFilePath($request,"image");
        }else{
            $image = auth("provider")->user()->image;
        }
        auth("provider")->user()->update([
            "full_name" => $request->first_name . ' ' . $request->second_name . ' ' . $request->last_name,
            "password" =>$password,
            "self_description" => $request->self_description,
            "skill_description" => $request->skill_description,
            "country" => $request->country,
            "city" => $request->city,
            "state" => $request->state,
            "zip_code" => $request->zip_code,
            "birthdate" => Carbon::make($request->birthdate)->toDateString(),
            "cv" => $cv,
            "image" =>$image,
        ]);

        return back()->with("success","Profile Updated Successfully");

    }

    public function setHourlyPrice(Request $request)
    {
        $request->validate([
            "price_for_hour" => "required|numeric",
            "currency" => "required"
        ]);

        auth("provider")->user()->update([
            "price_for_hour" => $request->price_for_hour,
            "currency_id" => $request->currency
        ]);

        return back()->with("success","Data Updated Successfully");
    }
    private function getFilePath(Request $request, string $string)
    {
        if ($request->hasFile($string)){
            return $request->file($string)->storePublicly($string);
        }
        return null;
    }
}
