<?php

namespace App\Http\Controllers\Admin\Profil;

use App\Http\Controllers\Controller;
use App\Models\Fungsi;
use App\Models\Tugas;
use App\Models\Tujuan;
use Illuminate\Http\Request;
use DOMDocument;
use Illuminate\Support\Facades\Storage;
class TftController extends Controller
{
    public function index()
    {
        $tugas = Tugas::find(1);
        $tujuan = Tujuan::find(1);
        $fungsi = Fungsi::find(1);
        return view('admin.profil.tft.index', compact('tugas', 'tujuan', 'fungsi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'isi' => 'required',
            'isi1' => 'required',
            'isi2' => 'required',
        ]);

        $description = $request->isi2;

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
        Tugas::create([
            'isi2' => $description,
        ]);

        $description1 = $request->isi;

        $dom = new DOMDocument();
        $dom->loadHTML($description1, 9);

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
        $description1 = $dom->saveHTML();
        Tujuan::create([
            'isi' => $description1,
        ]);

        $description2 = $request->isi1;

        $dom = new DOMDocument();
        $dom->loadHTML($description2, 9);

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
        $description2 = $dom->saveHTML();
        Fungsi::create([
            'isi1' => $description2,
        ]);

        return back()->with([
            'message' => 'Berhasil memasukkan data',
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'isi' => 'required',
            'isi1' => 'required',
            'isi2' => 'required',
        ]);

        $description = $request->isi2;

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
        $tugas = Tugas::find(1);
        $tugas->isi2 = $description;
        $tugas->update();

        $description1 = $request->isi;

        $dom = new DOMDocument();
        $dom->loadHTML($description1, 9);

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
        $description1 = $dom->saveHTML();
        $tujuan = Tujuan::find(1);
        $tujuan->isi = $description1;
        $tujuan->update();

        $description2 = $request->isi1;

        $dom = new DOMDocument();
        $dom->loadHTML($description2, 9);

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
        $description2 = $dom->saveHTML();
        $fungsi = Fungsi::find(1);
        $fungsi->isi1 = $description2;
        $fungsi->update();

        return back()->with([
            'message' => 'Berhasil memasukkan data',
        ]);
    }
}
