<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceProviderProfileController extends Controller
{
    //

    public function index()
    {

        return view("service-provider.profile.index");
    }
}
