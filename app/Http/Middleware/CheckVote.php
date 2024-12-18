<?php

namespace App\Http\Middleware;



use Closure;
use App\Models\Vote;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckVote
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }
}


class OneVotePerUser
{
    public function handle($request, Closure $next)
    {
        // Pastikan user sudah login
        if (!Auth::check()) {
            // Jika belum login, redirect ke halaman login
            return redirect()->route('login')->with('error', 'Anda harus login untuk mengakses halaman ini.');}

        $userId = Auth::id();

        // Cek apakah user sudah melakukan voting
        $vote = Vote::where('id', $userId)->first();

        if ($vote) {
            return response()->json(['error' => 'Anda sudah melakukan vote!'], 403);
        }

        return $next($request);
    }
}
