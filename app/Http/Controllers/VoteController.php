<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vote;
use Illuminate\Support\Facades\Log;

class VoteController extends Controller
{
    public function store(Request $request)
    {
        // Mencari kandidat berdasarkan nama
        $candidate = Vote::where('candidate_name', $request->candidate_name)->first();

        if ($candidate) {
            // Jika kandidat ditemukan, tambahkan satu suara
            $candidate->vote_count += 1;
            $candidate->save();
        } else {
            // Jika kandidat belum ada, buat entri baru dengan 1 suara
            Vote::create([
                'candidate_name' => $request->candidate_name,
                'vote_count' => 1
            ]);
        }

        return response()->json([
            'message' => 'Vote berhasil disimpan!',
        ]);
    }
    public function showResults()
    {
        // Hitung total suara yang ada di tabel 'votes'
        $totalVotes = Vote::sum('vote_count'); // Menghitung jumlah total suara

        // Ambil data kandidat beserta jumlah suara masing-masing
        $candidates = Vote::all();

        // Kirim data ke view
        return view('result2', compact('candidates', 'totalVotes'));
    }
}
