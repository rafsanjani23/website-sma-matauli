<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function index()
    {
        $items = Media::latest()->get();
        return view('admin.media.index', compact('items'));
    }

    public function create()
    {
        return view('admin.media.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|max:50',
            'ringkasan' => 'required',
            'isi' => 'required',
            'gambar' => 'required|image|max:2048',
            'link_facebook' => 'nullable|max:50',
            'tanggal' => 'required|date',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('media', 'public');
        }

        Media::create($validated);

        return redirect()->route('admin.media.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = Media::findOrFail($id);
        return view('admin.media.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Media::findOrFail($id);

        $validated = $request->validate([
            'judul' => 'required|max:50',
            'ringkasan' => 'required',
            'isi' => 'required',
            'gambar' => 'nullable|image|max:2048',
            'link_facebook' => 'nullable|max:50',
            'tanggal' => 'required|date',
        ]);

        if ($request->hasFile('gambar')) {
            if ($item->gambar) {
                Storage::disk('public')->delete($item->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('media', 'public');
        }

        $item->update($validated);

        return redirect()->route('admin.media.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = Media::findOrFail($id);

        if ($item->gambar) {
            Storage::disk('public')->delete($item->gambar);
        }

        $item->delete();

        return redirect()->route('admin.media.index')->with('success', 'Data berhasil dihapus.');
    }
}
