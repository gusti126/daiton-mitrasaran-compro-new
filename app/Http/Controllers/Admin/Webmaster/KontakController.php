<?php

namespace App\Http\Controllers\Admin\Webmaster;

use App\Http\Controllers\Controller;
use App\Models\Kontak;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KontakController extends Controller
{
    public function index()
    {
        $data = Kontak::orderBy('id', 'desc')->first();

        return view('admin.webmaster.kontak', [
            'item' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required',
            'wa' => 'required',
            'telepon' => 'required',
            'header_title' => 'required',
            'header_subtitle' => 'required',
            // 'image' => 'required'
        ]);
        $kontak = Kontak::find($id);
        $data = $request->all();

        if ($request->image) {
            $image = $request->image->store('kontak', 'public');
            $data['image'] = $image;
        }
        if ($request->ic_email) {
            $image = $request->ic_email->store('kontak', 'public');
            $data['ic_email'] = $image;
        }
        if ($request->ic_wa) {
            $image = $request->ic_wa->store('kontak', 'public');
            $data['ic_wa'] = $image;
        }
        if ($request->ic_telepon) {
            $image = $request->ic_telepon->store('kontak', 'public');
            $data['ic_telepon'] = $image;
        }

        // dd($data);

        $kontak->update($data);
        Alert::success('Berhasil update web master kontak page');

        return redirect()->back();
    }
}
