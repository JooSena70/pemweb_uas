<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sampah;
use Illuminate\Http\Request;

class InformasiSampahController extends Controller
{
    public function index()
    {
        $sampah = Sampah::all();
        return view('admin.informasisampah.index', compact('sampah'));
    }

    public function create()
    {
        return view('admin.informasisampah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_sampah' => 'required',
            'satuan' => 'required',
            'harga_per_kg' => 'required|numeric',
            'keterangan' => 'nullable'
        ]);

        Sampah::create($request->all());

        return redirect()->route('admin.informasisampah.index')
            ->with('success', 'Data sampah berhasil ditambahkan');
    }

    public function edit(Sampah $sampah)
    {
        return view('admin.informasisampah.edit', compact('sampah'));
    }

    public function update(Request $request, Sampah $sampah)
    {
        $request->validate([
            'nama_sampah' => 'required',
            'satuan' => 'required',
            'harga_per_kg' => 'required|numeric',
            'keterangan' => 'nullable'
        ]);

        $sampah->update($request->all());

        return redirect()->route('admin.informasisampah.index')
            ->with('success', 'Data sampah berhasil diperbarui');
    }

    public function destroy(Sampah $sampah)
    {
        $sampah->delete();

        return redirect()->route('admin.informasisampah.index')
            ->with('success', 'Data sampah berhasil dihapus');
    }
}