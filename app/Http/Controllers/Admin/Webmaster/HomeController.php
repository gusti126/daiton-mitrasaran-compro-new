<?php

namespace App\Http\Controllers\Admin\Webmaster;

use App\Http\Controllers\Controller;
use App\Models\HomeWebmaster;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function index()
    {
        $data = HomeWebmaster::orderBy('id', 'desc')->first();

        return view('admin.webmaster.home', [
            'item' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        // 'header_title', 'header_subtitle', 'alamat', 'kontak', 'email', 'jamkerja'
        $request->validate([
            'header_title' => 'required',
            'header_subtitle' => 'required',
            'alamat' => 'required',
            'kontak' => 'required',
            'email' => 'required',
            'jamkerja' => 'required',
        ]);

        $data = $request->all();

        $homeweb = HomeWebmaster::find($id);

        $homeweb->update($data);

        Alert::success('Berhasil update web master home page');

        return redirect()->back();
    }
}
