<?php

namespace App\Http\Controllers\Admin\Tupoksi\Otonom;

use App\Http\Controllers\Controller;
use App\Models\LamInfokom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DOMDocument;
class LamInfokomController extends Controller
{
    public function index()
    {
        $laminfokom = LamInfokom::find(1);
        return view('admin.tupoksi.otonom.laminfokom', compact('laminfokom'));
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

        LamInfokom::create([
            'judul' => $request->judul,
            'isi' => $description,
        ]);

        return back()->with([
            'message' => 'Berhasil memasukkan laminfokom laminfokom',
        ]);
    }

    public function update(Request $request, $id)
    {
        $laminfokom = LamInfokom::find(1);
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

        $laminfokom->update([
            'judul' => $request->judul,
            'isi' => $description,
        ]);

        return back()->with([
            'message' => 'Berhasil mengupdate laminfokom laminfokom',
        ]);
    }
}
