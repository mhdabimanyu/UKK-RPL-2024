<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto;
use App\Models\Comment;

class FotoController extends Controller
{
    // Menampilkan semua foto
    public function index()
    {
        $fotos = Foto::all();
        return view('fotos.index', compact('fotos'));
    }

    // Menampilkan form untuk membuat foto baru
    public function create()
    {
        return view('fotos.create');
    }

    // Menyimpan foto baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required',
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        Foto::create([
            'title' => $request->title,
            'image' => $imageName,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('foto.index')
                        ->with('success','Foto berhasil ditambahkan.');
    }

    // Menampilkan foto tertentu
    public function show($id)
    {
        $foto = foto::with(['comments'])->where('id',$id)->first();
    
        
        return view('fotos.show',compact('foto'));
    }
    
    

    // Menampilkan form untuk mengedit foto
    // Menampilkan form untuk mengedit foto
public function edit(Foto $foto)
{
    return view('fotos.edit', compact('foto'));
}

// Memperbarui foto
public function update(Request $request, Foto $foto)
{
    $request->validate([
        'title' => 'required',
        'deskripsi' => 'required',
    ]);

    if ($request->hasFile('image')) {
        // Validasi dan simpan gambar baru
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
        // Hapus gambar lama
        if (public_path('images/' . $foto->image)) {
            unlink(public_path('images/' . $foto->image));
        }
        // Perbarui data foto dengan gambar baru
        $foto->update([
            'title' => $request->title,
            'image' => $imageName,
            'deskripsi' => $request->deskripsi,
        ]);
    } else {
        // Perbarui data foto tanpa mengubah gambar
        $foto->update([
            'title' => $request->title,
            'deskripsi' => $request->deskripsi,
        ]);
    }

    return redirect()->route('foto.index')
                    ->with('success', 'Foto berhasil diperbarui');
}


    // Menghapus foto
    public function destroy(Foto $foto)
    {
        $foto->delete();

        return redirect()->route('foto.index')
                        ->with('success','Foto berhasil dihapus');
    }
}
