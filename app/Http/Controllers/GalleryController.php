<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        Gallery::create([
            'title' => $request->title,
            'image' => $imageName,
            'description' => $request->description,
        ]);

        return redirect()->route('gallery.index')
                         ->with('success','Gallery created successfully.');
    }

    public function show($id)
    {
        $gallery = Gallery::find($id);
        return view('gallery.show', compact('gallery'));
    }

    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('gallery.edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $gallery = Gallery::find($id);
        $gallery->title = $request->get('title');
        $gallery->description = $request->get('description');

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $gallery->image = $imageName;
        }

        $gallery->save();

        return redirect()->route('gallery.index')
                         ->with('success','Gallery updated successfully');
    }

    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        $gallery->delete();

        return redirect()->route('gallery.index')
                         ->with('success','Gallery deleted successfully');
    }
}
