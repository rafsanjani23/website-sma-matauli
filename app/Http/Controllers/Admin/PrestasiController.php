<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    public function index()
    {
        $items = Prestasi::latest()->get();
        return view('admin.prestasi.index', compact('items'));
    }

    public function create()
    {
        return view('admin.prestasi.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|max:50',
            'nama_lomba' => 'required|max:50',
            'tingkatan' => 'required|max:50',
            'isi' => 'required',
            'gambar' => 'required|image|max:2048',
            'tanggal' => 'required|date',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('prestasi', 'public');
        }

        Prestasi::create($validated);

        return redirect()->route('admin.prestasi.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = Prestasi::findOrFail($id);
        return view('admin.prestasi.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Prestasi::findOrFail($id);

        $validated = $request->validate([
            'judul' => 'required|max:50',
            'nama_lomba' => 'required|max:50',
            'tingkatan' => 'required|max:50',
            'isi' => 'required',
            'gambar' => 'nullable|image|max:2048',
            'tanggal' => 'required|date',
        ]);

        if ($request->hasFile('gambar')) {
            if ($item->gambar) {
                Storage::disk('public')->delete($item->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('prestasi', 'public');
        }

        $item->update($validated);

        return redirect()->route('admin.prestasi.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = Prestasi::findOrFail($id);

        if ($item->gambar) {
            Storage::disk('public')->delete($item->gambar);
        }

        $item->delete();

        return redirect()->route('admin.prestasi.index')->with('success', 'Data berhasil dihapus.');
    }
}
