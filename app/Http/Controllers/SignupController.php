<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function showSignupForm()
    {
        return view('signup.index');
    }

    public function signup(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6'
        ]);


        $formFields['password'] = bcrypt($formFields['password']);


        $user = User::create($formFields);

        return redirect()->route('login')->with('success', 'Account created successfully!');
    }
}
