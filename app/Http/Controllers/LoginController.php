<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session; 

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Hardcoded credentials
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username === 'pikniksyahdu' && $password === 'syahdu') {
            // Store user information in session
            $request->session()->put('username', $username);
            return redirect()->intended('/tambahProduk');
        }

        return back()->withErrors([
            'username' => 'Krendensial yang diberikan tidak cocok.',
        ]);
    }

    public function logout(Request $request)
    {
        Session::forget('username');

        return redirect()->route('login');
    }
}
