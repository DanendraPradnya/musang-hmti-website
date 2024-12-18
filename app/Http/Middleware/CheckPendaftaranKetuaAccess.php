<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckPendaftaranKetuaAccess
{
    public function handle(Request $request, Closure $next)
    {
        // Periksa apakah pengguna sudah login
        if (!Auth::check()) {
            // Jika belum login, redirect ke halaman login
            return redirect()->route('login')->with('error', 'Anda harus login untuk mengakses halaman ini.');
        }

        // Jika sudah login, lanjutkan request
        return $next($request);
    }
}
