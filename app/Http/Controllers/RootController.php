<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

            if ($credentials['email'] == 'abcd@gmail.com' && $credentials['password'] == '12345') {
                $request->session()->regenerate();
                return 'Login was successful';
            }
            return 'incorrect credentials';
        }

        return view("login");
    }


    public function protected_rote() {
        return 'It\'s protected route';
    }
}

