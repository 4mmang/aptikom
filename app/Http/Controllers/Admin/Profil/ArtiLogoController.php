<?php

namespace App\Http\Controllers\Admin\Profil;

use App\Http\Controllers\Controller;
use App\Models\ArtiLogo;
use Illuminate\Http\Request;
use DOMDocument;
use Illuminate\Support\Facades\Storage;

class ArtiLogoController extends Controller
{
    public function index()
    {
        $artilogo = ArtiLogo::find(1);
        return view('admin.profil.artilogo.index', compact('artilogo'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);

        $description = $request->isi;

        $dom = new DOMDocument();
        $dom->loadHTML($description, 9);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $src = $img->getAttribute('src');
            if (strpos($src, 'data:image/') === 0) {
                // Pastikan src berupa base64
                $data = base64_decode(explode(',', explode(';', $src)[1])[1]);

                // Simpan gambar ke storage/app/public/upload
                $image_name = 'upload/' . time() . $key . '.png';
                Storage::disk('public')->put($image_name, $data);
                // Update atribut src gambar ke URL baru
                $img->removeAttribute('src');
                $img->setAttribute('src', url('storage/' . $image_name));
            }
        }
        $description = $dom->saveHTML();

        ArtiLogo::create([
            'judul' => $request->judul,
            'isi' => $description,
        ]);

        return back()->with([
            'message' => 'Berhasil memasukkan arti logo',
        ]);
    }

    public function update(Request $request, $id)
    {
        $artilogo = ArtiLogo::find(1);
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);

        $description = $request->isi;

        $dom = new DOMDocument();
        $dom->loadHTML($description, 9);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $src = $img->getAttribute('src');
            if (strpos($src, 'data:image/') === 0) {
                // Pastikan src berupa base64
                $data = base64_decode(explode(',', explode(';', $src)[1])[1]);

                // Simpan gambar ke storage/app/public/upload
                $image_name = 'upload/' . time() . $key . '.png';
                Storage::disk('public')->put($image_name, $data);
                // Update atribut src gambar ke URL baru
                $img->removeAttribute('src');
                $img->setAttribute('src', url('storage/' . $image_name));
            }
        }
        $description = $dom->saveHTML();

        $artilogo->update([
            'judul' => $request->judul,
            'isi' => $description,
        ]);

        return back()->with([
            'message' => 'Berhasil mengupdate arti logo',
        ]);
    }
}
