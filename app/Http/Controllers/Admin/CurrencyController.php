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
        return view("admin.category.index",compact("currencies"));
    }
}
