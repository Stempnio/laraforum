<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login.index');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt($validated)) {
            $request->session()->regenerate();

            return redirect()->route('home')->with('success', 'You are now logged in');
        }

        return back()->withErrors([
            'error' => 'Invalid credentials',
        ])->onlyInput('email');
    }
}
