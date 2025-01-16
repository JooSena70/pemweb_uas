<?php

namespace App\Http\Controllers;

use App\Models\Setoran;
use Illuminate\Http\Request;

class SetorController extends Controller
{
    public function index ()
    {
        $setor = Setoran::all();
        return view('user.setorsampah.index',compact('setor'));
    }

    public function create()
    {
        return view('user.setorsampah.create');
    }

    /**
     * Store a newly created setor in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'nama_user' => 'required|string|max:255',
            'nama_sampah' => 'required|string|max:255',
            'berat' => 'required|numeric',
            'alamat' => 'required|string|max:255',
            'tanggal' => 'required|date',
        ]);

        // Create new setor
        $setor = new Setoran();
        $setor->nama_user = $request->nama_user;
        $setor->nama_sampah = $request->nama_sampah;
        $setor->berat = $request->berat;
        $setor->alamat = $request->alamat;
        $setor->status = 'Belum di verifikasi';
        $setor->tanggal = $request->tanggal;
        $setor->total = $request->berat*500;
        
        $setor->save();

        // Setoran::create($request->all());

        // Redirect with success message
        return redirect()->route('user.setorsampah.index')
            ->with('success', 'Setoran berhasil ditambahkan!');
    }
}
