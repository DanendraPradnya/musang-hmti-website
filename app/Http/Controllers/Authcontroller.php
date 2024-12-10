<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function tampilRegister()
    {
        return view('register');
    }

    public function submitRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password); // Hash password
        $user->save();

        return redirect()->route('login.tampil');
    }

    public function tampilLogin()   
    {
        return view('login');
    }

    public function submitLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email', // Validasi email
            'password' => 'required|string|min:8',
        ]);

        // Ambil data dari request
        $data = $request->only('email', 'password');

        // Cek apakah email dan password valid
        if (Auth::attempt($data)) {
            $request->session()->regenerate(); // Regenerasi sesi
            return redirect()->route('musang'); // Redirect setelah login berhasil
        } else {
            return redirect()->back()->with('gagal', 'Email dan Password anda Salah');
        }
    }
    // Halaman profil setelah login
    public function profilePage()
    {
        return view('profile'); // Halaman profil yang akan Anda buat
    }

    // Proses sign out
    public function signOut(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('musang'); // Arahkan ke halaman login setelah sign out
    }

}


