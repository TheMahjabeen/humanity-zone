<?php

namespace App\Http\Controllers;

use App\Models\Hospitals;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RootController extends Controller
{
    public function homepage() {
        return view("homepage");
    }

    public function login(Request $request) {
        if ($request->isMethod('post')) {
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return 'Login was successful';
            }
            return 'incorrect credentials';
        }

        return view("login");
    }

    public function register(Request $request) {
        if ($request->isMethod('post')) {
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
                'c_password' => ['required'],
                'phone' => ['required'],
                'address' => ['required'],
                'name' => ['required'],
            ]);

            if ($credentials['password'] != $credentials['c_password']) {
                return "Passwords don't match";
            }

            $user = new User();
            $user->name = $credentials['name'];
            $user->email = $credentials['email'];
            $user->phone_no = $credentials['phone'];
            $user->address = $credentials['address'];
            $user->password = Hash::make($credentials['password']);
            if ($user->save()) {
                return "Registration was successful";
            }
            return "Something went seriously wrong";
        }

        return view("register");
    }

    public function protected_rote() {
        return 'It\'s protected route';
    }
}

