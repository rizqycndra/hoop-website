<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function auth(Request $request)
    {
        $request->validate([
            "username"  => ['required', 'string', 'max:255'],
            "password"  => ['required', 'string', 'max:255']
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
        } else {
            return back()->withErrors([
                "username" => "Username atau Password Salah"
            ])->withInput();
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {

        // dd($request->all());
        $request->validate([
            "name"      => ['required', 'string', 'max:255'],
            "username"  => ['required', 'string', 'max:255', 'unique:users'],
            "email"     => ['required', 'string', 'max:255', 'email:dns', 'unique:users'],
            "password"  => ['required', 'string', 'max:255', 'confirmed', Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols()
                ->uncompromised()],
        ]);

        User::create([
            "name"      => $request->input('name'),
            "username"  => $request->input('username'),
            "email"     => $request->input('email'),
            "password"  => Hash::make($request->input('password')),
        ]);

        return redirect()->route('dashboard')->with('success', 'Berhasil Mendaftarkan Akun');
    }
}
