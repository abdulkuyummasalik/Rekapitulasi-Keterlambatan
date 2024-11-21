<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Menangani proses login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard'); // Ganti dengan rute yang diinginkan setelah login
        }

        return back()->with('error', 'Email atau password salah.');
    }

    // Menampilkan halaman register
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Menangani proses register
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'id' => (string) \Illuminate\Support\Str::uuid(),
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'ps', // Atur role default, bisa disesuaikan
        ]);

        Auth::login($user); // Login otomatis setelah registrasi

        return redirect()->route('login'); // Ganti dengan rute yang diinginkan setelah register
    }

    // Menangani logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login'); // Ganti dengan rute yang diinginkan setelah logout
    }
}
