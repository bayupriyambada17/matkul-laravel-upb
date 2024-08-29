<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $cred = $request->only('email', 'password');
        if (Auth::attempt($cred)) {
            return redirect()->route('dashboard.index');
        }
        return redirect()->back()->with('error', 'Invalid credentials');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'nim' => 'required|string|max:20|unique:users',
            'kelas' => 'required|string|max:20',
            'whatsapp' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'dosen_wali' => 'required|string|max:255',
        ]);

        // Buat user baru
        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'nim' => $request->nim,
            'kelas' => $request->kelas,
            'whatsapp' => $request->whatsapp,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'dosen_wali' => $request->dosen_wali,
        ]);

        // Redirect ke dashboard atau halaman yang diinginkan
        return redirect()->route('dashboard.index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
