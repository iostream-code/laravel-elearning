<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            if (Auth::user()->status == 'dosen') {
                if (Auth::user()->dosen->is_admin == true)
                    return redirect()->route('admin_index');
            } else
                return redirect()->route('welcome');
        } else
            return redirect()->route('welcome');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
