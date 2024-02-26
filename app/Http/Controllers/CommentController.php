<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto; // Menggunakan model Foto
use App\Models\Comment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class CommentController extends Controller
{
    /**
     * Simpan komentar baru.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'foto_id' => 'required|exists:fotos,id', // Ubah menjadi foto_id dan fotos
            'comment' => 'required|string',
        ]);

        // Buat komentar baru
        $comment = new Comment();
        $comment->user_id = auth()->id(); // Menggunakan auth()->id() untuk mendapatkan ID pengguna yang sedang masuk
        $comment->foto_id = $request->foto_id; // Ubah menjadi foto_id
        $comment->comment = $request->comment;
        $comment->save();

        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return back()->with('success', 'Comment added successfully.');
    }
}
