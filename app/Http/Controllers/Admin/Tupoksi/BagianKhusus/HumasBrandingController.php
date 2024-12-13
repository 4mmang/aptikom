<?php

namespace App\Http\Controllers\Admin\Tupoksi\BagianKhusus;

use App\Http\Controllers\Controller;
use App\Models\HumasBranding;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DOMDocument;

class HumasBrandingController extends Controller
{
    public function index()
    {
        $humasbranding = HumasBranding::find(1);
        return view('admin.tupoksi.bagiankhusus.humasbranding', compact('humasbranding'));
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

        HumasBranding::create([
            'judul' => $request->judul,
            'isi' => $description,
        ]);

        return back()->with([
            'message' => 'Berhasil memasukkan humas dan branding',
        ]);
    }

    public function update(Request $request, $id)
    {
        $humasbranding = HumasBranding::find(1);
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

        $humasbranding->update([
            'judul' => $request->judul,
            'isi' => $description,
        ]);

        return back()->with([
            'message' => 'Berhasil mengupdate humas dan branding',
        ]);
    }
}
