<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class ArtikelController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
            'kategori_id' => 'required',
            'thumbnail' => 'required|image|max:3000',
        ]);


        $data = $request->all();
        $image = $request->thumbnail->store('artikel', 'public');
        $data['thumbnail'] = $image;
        $data['user_id'] = Auth::user()->id;
        $data['slug'] = Str::slug($data['title'] . Str::random(5));

        // dd($data);

        Artikel::create($data);

        Alert::success('Berhasil tambah data artikel');
        return redirect()->route('admin-livewire-artikel')->with('success', 'Login Successfully!');
    }

    public function edit($id)
    {
        $data = Artikel::findOrFail($id);

        return view('admin.artikel.edit', [
            'item' => $data
        ]);
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
            'kategori_id' => 'required',
            'thumbnail' => 'image|max:3000',
        ]);

        $data = $request->all();

        if ($request->hasFile('thumbnail')) {
            $image = $request->thumbnail->store('artikel', 'public');
            $data['thumbnail'] = $image;
        }

        $artikel = Artikel::where('slug', $slug)->first();
        $artikel->update($data);

        Alert::success('Berhasil Kirim Pesan', 'pesan anda telah kami terima selanjutnya akan kami balas via email');
        return redirect()->route('admin-livewire-artikel');
    }
}
