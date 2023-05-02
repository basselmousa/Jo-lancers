<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    //
    public function index()
    {
        $currencies = Currency::all();
        return view("admin.currency.index",compact("currencies"));
    }

    public function create(Request $request)
    {
        //
        $request->validate([
            "cur_name" => "required",
            "iso_code" => "required",
            "sign" => "required",
        ]);

        Currency::create($request->all());
        return back()->with("success" ,"Currency Created Successfully");

    }

    public function update(Request $request,Currency $currency)
    {
        //

        $request->validate([
            "cur_name" => "required",
            "iso_code" => "required",
            "sign" => "required",
        ]);

        $currency->update($request->all());
        return back()->with("success" ,"Currency Updated Successfully");

    }

    public function delete(Request $request,Currency $currency)
    {
        //

        $currency->delete();
        return back()->with("success" ,"Currency Deleted Successfully");

    }


}
