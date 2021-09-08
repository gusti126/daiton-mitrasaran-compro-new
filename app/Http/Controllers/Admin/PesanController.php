<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pesan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PesanController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'email' => 'required|string',
            'body' => 'required|string',
        ]);
        $data = $request->all();

        Pesan::create($data);
        Alert::success('Berhasil kirim pesan', 'Pesan anda sudah kami terima selanjutnya akan kami hubungi dengan email');

        return redirect()->back();
    }
}
