<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function login() {
        return view('login');
    }



    public function validateLogin(Request $request): RedirectResponse {
        $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        $acc_info = [
            'username' => $request['username'],
            'password' => $request['password']
        ];

        if (Auth::attempt($acc_info)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->onlyInput('username',);
    }
}

