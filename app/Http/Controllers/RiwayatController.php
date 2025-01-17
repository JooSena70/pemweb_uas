<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setoran;

class RiwayatController extends Controller
{
    public function index ()
    {
        $setor = Setoran::all();
        return view('user.riwayattranksasi.index',compact('setor'));
    }

    public function index2 ()
    {
        $setor = Setoran::all();
        return view('admin.riwayattranksasi.index',compact('setor'));
    }

        public function update(Request $request, $id)
    {
        // dd($request->all()); 
        $item = Setoran::findOrFail($id);

        // Toggle status berdasarkan input
        $item->status = $request->input('status');

        // Simpan perubahan
        $item->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('admin.riwayattranksasi.index')->with('success', 'Status berhasil diubah!');
    }
}
