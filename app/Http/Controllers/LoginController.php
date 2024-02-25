<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username === '123' && $password === '321') {
            return redirect()->route('dasboard');
        } else {
            return redirect()->route('login')->with('error', 'Username atau password salah');
        }
    }
}
