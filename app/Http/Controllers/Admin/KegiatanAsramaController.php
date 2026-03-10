<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KegiatanAsrama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KegiatanAsramaController extends Controller
{
    public function index()
    {
        $items = KegiatanAsrama::latest()->get();
        return view('admin.kegiatan-asrama.index', compact('items'));
    }

    public function create()
    {
        return view('admin.kegiatan-asrama.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:50',
            'gambar' => 'required|image|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('kegiatan-asrama', 'public');
        }

        KegiatanAsrama::create($validated);

        return redirect()->route('admin.kegiatan-asrama.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = KegiatanAsrama::findOrFail($id);
        return view('admin.kegiatan-asrama.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = KegiatanAsrama::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|max:50',
            'gambar' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            if ($item->gambar) {
                Storage::disk('public')->delete($item->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('kegiatan-asrama', 'public');
        }

        $item->update($validated);

        return redirect()->route('admin.kegiatan-asrama.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = KegiatanAsrama::findOrFail($id);

        if ($item->gambar) {
            Storage::disk('public')->delete($item->gambar);
        }

        $item->delete();

        return redirect()->route('admin.kegiatan-asrama.index')->with('success', 'Data berhasil dihapus.');
    }
}
