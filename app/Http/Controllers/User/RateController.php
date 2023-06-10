<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Rate;
use App\Models\ServiceProvider;
use Illuminate\Http\Request;

class RateController extends Controller
{
    //

    public function create(Request $request,ServiceProvider $provider)
    {
        $request->validate([
            "rate" => "required",
            "comment" => "required",
        ]);

        Rate::create([
            "service_provider_id" => $provider->id,
            "rate" => $request->rate,
            "comment" => $request->comment,
            "user_id" => auth("web")->id()
        ]);
        return back()->with("success","Rated Successfully");
    }
}
