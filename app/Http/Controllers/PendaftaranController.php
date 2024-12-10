<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    /**
     * Menyimpan data pendaftaran ke database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('pendaftaran');
    }
    
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'email' => 'required|email',
            'nama' => 'required|string|max:255',
            'kontak' => 'required|string|max:255',
            'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Hanya gambar
            'krm_dokumen' => 'required|mimes:pdf|max:2048', // File PDF dengan ukuran maksimal 2MB
            'kepanitiaan_dokumen' => 'required|mimes:pdf|max:2048', // File PDF dengan ukuran maksimal 2MB
        ]);

        // Proses upload file ke storage/app/public/uploads
        $profilePhotoPath = $request->file('profile_photo')->store('uploads/profile_photos', 'public');
        $krmDokumenPath = $request->file('krm_dokumen')->store('uploads/krm_dokumen', 'public');
        $kepanitiaanDokumenPath = $request->file('kepanitiaan_dokumen')->store('uploads/kepanitiaan_dokumen', 'public');

        // Simpan data ke dalam database
        $pendaftaran = new Pendaftaran();
        $pendaftaran->email = $request->input('email');
        $pendaftaran->nama = $request->input('nama');
        $pendaftaran->kontak = $request->input('kontak');
        $pendaftaran->profile_photo = $profilePhotoPath;
        $pendaftaran->krm_dokumen = $krmDokumenPath;
        $pendaftaran->kepanitiaan_dokumen = $kepanitiaanDokumenPath;
        $pendaftaran->save();

        // Redirect kembali ke halaman pendaftaran dengan pesan sukses
        return redirect()->back()->with('success', 'Pendaftaran berhasil disimpan.');
    }
}
