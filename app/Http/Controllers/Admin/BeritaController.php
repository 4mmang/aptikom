<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::all();
        return view('admin.berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'cover' => ['required', 'mimes:png,jpg,jpeg'],
            'isi' => 'required',
        ]);

        $path = $request->file('cover')->store('covers', 'public');

        Berita::create([
            'judul' => $request->judul,
            'cover' => $path,
            'isi' => $request->isi,
        ]);

        return back()->with([
            'message' => 'Successfully added berita',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);

        $berita = Berita::findOrFail($id);
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;

        if ($request->file('cover')) {
            Storage::delete('public/' . $berita->cover);
            $berita->cover = $request->file('cover')->store('covers', 'public');
        }

        $berita->save();
        return back()->with([
            'message' => 'Successfully updated the berita',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        Storage::delete('public/' . $berita->cover);
        $berita->delete();
        return back()->with([
            'message' => 'Successfully deleted berita',
        ]);
    }
}
