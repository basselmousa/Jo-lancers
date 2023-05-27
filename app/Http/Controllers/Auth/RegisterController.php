<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            "first_name" => "required",
            "second_name" => "required",
            "last_name" => "required",
            "username" => "required|unique:users,username",
            "email" => "required|email|unique:users,email",
            "password" => "required|min:8|confirmed",
            "country" => "required",
            "city" => "required|not_in:0",
            "state" => "required",
            "zip_code" => "required",
            "birthdate" => "required",
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            "full_name" => $data["first_name"] . ' ' . $data["second_name"] . ' ' . $data["last_name"],
            "username" => $data["username"],
            "email" => $data["email"],
            "password" => Hash::make($data["password"]),
            "country" => $data["country"],
            "city" => $data["city"],
            "state" => $data["state"],
            "zip_code" => $data["zip_code"],
            "birthdate" => Carbon::make($data["birthdate"])->toDateString(),

        ]);
    }
}
