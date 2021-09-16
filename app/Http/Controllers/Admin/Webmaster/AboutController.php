<?php

namespace App\Http\Controllers\Admin\Webmaster;

use App\Http\Controllers\Controller;
use App\Models\AboutWebmaster;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AboutController extends Controller
{
    public function index()
    {
        $data = AboutWebmaster::orderBy('id', 'desc')->first();

        return view('admin.webmaster.about', [
            'item' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        // 'header_title', 'header_subtitle', 'header_image', 'header_tagline', 'main_satu_title', 
        // 'main_satu_subtitle', 'main_satu_image', 'program', 'main_dua_title', 'main_dua_subtitle', 'main_dua_image'
        $request->validate([
            'header_title' => 'required',
            // 'header_subtitle' => 'required',
            // 'header_image' => 'required',
            'header_tagline' => 'required',
            'main_satu_title' => 'required',
            'main_satu_subtitle' => 'required',
            // 'main_satu_image' => 'required',
            'program' => 'required',
            'main_dua_title' => 'required',
            'main_dua_subtitle' => 'required',
            // 'main_dua_image' => 'required',
        ]);

        $data = $request->all();
        // dd($data);
        $homeweb = AboutWebmaster::find($id);

        if ($request->header_image) {
            $image = $request->header_image->store('product', 'public');
            $data['header_image'] = $image;
        }
        if ($request->main_satu_image) {
            $image = $request->main_satu_image->store('product', 'public');
            $data['main_satu_image'] = $image;
        }
        if ($request->main_dua_image) {
            $image = $request->main_dua_image->store('product', 'public');
            $data['main_dua_image'] = $image;
        }

        // dd($data);

        $homeweb->update($data);

        Alert::success('Berhasil update web master About page');

        return redirect()->back();
    }
}
