<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    //
    public function showLogin()
    {
        return view("admin.auth.login");
    }

    public function login(Request $request)
    {
        $request->validate([
            "email" => 'required|string',
            'password' => 'required|string',
        ]);


        if ($this->guard()->attempt($this->credentials($request))) {
            if ($request->hasSession()) {
                $request->session()->put('auth.admin.password_confirmed_at', time());
            }

            $request->session()->regenerate();


            return redirect()->route("admin.admins.index");
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



        return redirect()->route("admin.auth.login");
    }
//    public function showRegister()
//    {
//        return view("admin.auth.register");
//    }
//
//    public function register(Request $request)
//    {
//        //
//
//        $request->validate([
//            "" => "required",
//        ]);
//    }
    private function guard()
    {
        return Auth::guard("admin");
    }
}
