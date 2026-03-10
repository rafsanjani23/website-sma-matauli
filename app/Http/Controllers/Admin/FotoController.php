<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FotoController extends Controller
{
    public function index()
    {
        $items = Foto::latest()->get();
        return view('admin.foto.index', compact('items'));
    }

    public function create()
    {
        return view('admin.foto.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|max:50',
            'deskripsi' => 'nullable|max:100',
            'gambar' => 'required|image|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('galeri-foto', 'public');
        }

        Foto::create($validated);

        return redirect()->route('admin.foto.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = Foto::findOrFail($id);
        return view('admin.foto.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Foto::findOrFail($id);

        $validated = $request->validate([
            'judul' => 'required|max:50',
            'deskripsi' => 'nullable|max:100',
            'gambar' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            if ($item->gambar) {
                Storage::disk('public')->delete($item->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('galeri-foto', 'public');
        }

        $item->update($validated);

        return redirect()->route('admin.foto.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = Foto::findOrFail($id);

        if ($item->gambar) {
            Storage::disk('public')->delete($item->gambar);
        }

        $item->delete();

        return redirect()->route('admin.foto.index')->with('success', 'Data berhasil dihapus.');
    }
}
