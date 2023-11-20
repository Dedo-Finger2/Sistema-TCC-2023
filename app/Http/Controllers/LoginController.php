<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view("login");
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "email" => ["required", "email",],
            "password" => ["required"],
        ]);

        if (Auth::guard('web')->attempt($data)) {
            $request->session()->regenerate();
            return redirect()->intended(route("users.index"));
        } elseif (Auth::guard('admin')->attempt($data)) {
            $request->session()->regenerate();
            return redirect()->intended(route("companies.dashboard"));
        } else {
            return redirect()->back()->with("error", "Email ou senha incorretos!");
        }
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
