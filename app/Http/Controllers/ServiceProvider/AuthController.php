<?php

namespace App\Http\Controllers\ServiceProvider;

use App\Http\Controllers\Controller;
use App\Models\ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    //

    public function showLogin()
    {
        return view("service-provider.auth.login");
    }

    public function login(Request $request)
    {
        $request->validate([
            "email" => 'required|string',
            'password' => 'required|string',
        ]);


        if ($this->guard()->attempt($this->credentials($request))) {
            if ($request->hasSession()) {
                $request->session()->put('auth.provider.password_confirmed_at', time());
            }

            $request->session()->regenerate();


            return redirect()->route("provider.profile.index");
        }

        return throw ValidationException::withMessages([
            "email" => [trans('auth.failed')],
        ]);

    }

    protected function credentials(Request $request)
    {
        return $request->only("email", 'password');
    }


    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();


        return redirect()->route("provider.auth.login");
    }


    public function showRegister()
    {
        return view("service-provider.auth.register");
    }


    public function register(Request $request)
    {
        //
        $request->validate([
            "first_name" => "required",
            "second_name" => "required",
            "last_name" => "required",
            "username" => "required|unique:service_providers,username",
            "email" => "required|email|unique:service_providers,email",
            "password" => "required|min:8|confirmed",
            "self_description" => "required",
            "skill_description" => "required",
            "country" => "required",
            "city" => "required|not_in:0",
            "state" => "required",
            "zip_code" => "required",
            "birthdate" => "required",
            "cv" => "required|mimes:docx,doc,pdf|max:10000",
            "image" => "nullable|mimes:jpg,jpeg,png|max:10000",
        ]);

        $user = ServiceProvider::create([
            "full_name" => $request->first_name . ' ' . $request->second_name . ' ' . $request->last_name,
            "username" => $request->username,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "self_description" => $request->self_description,
            "skill_description" => $request->skill_description,
            "country" => $request->country,
            "city" => $request->city,
            "state" => $request->state,
            "zip_code" => $request->zip_code,
            "birthdate" => Carbon::make($request->birthdate)->toDateString(),
            "cv" => $this->getFilePath($request, "cv"),
            "image" =>$this-> getFilePath ($request,"image"),
        ]);

        $this->guard()->login($user);

        return redirect()->route("provider.profile.index");
    }

    private function guard()
    {
        return Auth::guard("provider");
    }



    private function getFilePath(Request $request, string $string)
    {
        if ($request->hasFile($string)){
            return $request->file($string)->storePublicly($string);
        }
        return null;
    }
}
