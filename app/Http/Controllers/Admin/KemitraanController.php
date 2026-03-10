<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kemitraan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KemitraanController extends Controller
{
    public function index()
    {
        $items = Kemitraan::latest()->get();
        return view('admin.kemitraan.index', compact('items'));
    }

    public function create()
    {
        return view('admin.kemitraan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_mitra' => 'required|max:50',
            'penjelasan_singkat' => 'required',
            'gambar_mitra' => 'required|image|max:2048',
            'gambar_kegiatan' => 'required|image|max:2048',
            'ringkasan_kegiatan' => 'required',
        ]);

        if ($request->hasFile('gambar_mitra')) {
            $validated['gambar_mitra'] = $request->file('gambar_mitra')->store('kemitraan/mitra', 'public');
        }

        if ($request->hasFile('gambar_kegiatan')) {
            $validated['gambar_kegiatan'] = $request->file('gambar_kegiatan')->store('kemitraan/kegiatan', 'public');
        }

        Kemitraan::create($validated);

        return redirect()->route('admin.kemitraan.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = Kemitraan::findOrFail($id);
        return view('admin.kemitraan.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Kemitraan::findOrFail($id);

        $validated = $request->validate([
            'nama_mitra' => 'required|max:50',
            'penjelasan_singkat' => 'required',
            'gambar_mitra' => 'nullable|image|max:2048',
            'gambar_kegiatan' => 'nullable|image|max:2048',
            'ringkasan_kegiatan' => 'required',
        ]);

        if ($request->hasFile('gambar_mitra')) {
            if ($item->gambar_mitra) {
                Storage::disk('public')->delete($item->gambar_mitra);
            }
            $validated['gambar_mitra'] = $request->file('gambar_mitra')->store('kemitraan/mitra', 'public');
        }

        if ($request->hasFile('gambar_kegiatan')) {
            if ($item->gambar_kegiatan) {
                Storage::disk('public')->delete($item->gambar_kegiatan);
            }
            $validated['gambar_kegiatan'] = $request->file('gambar_kegiatan')->store('kemitraan/kegiatan', 'public');
        }

        $item->update($validated);

        return redirect()->route('admin.kemitraan.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = Kemitraan::findOrFail($id);

        if ($item->gambar_mitra) {
            Storage::disk('public')->delete($item->gambar_mitra);
        }

        if ($item->gambar_kegiatan) {
            Storage::disk('public')->delete($item->gambar_kegiatan);
        }

        $item->delete();

        return redirect()->route('admin.kemitraan.index')->with('success', 'Data berhasil dihapus.');
    }
}
