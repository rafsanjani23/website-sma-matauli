<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FasilitasSekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FasilitasSekolahController extends Controller
{
    public function index()
    {
        $items = FasilitasSekolah::latest()->get();
        return view('admin.fasilitas-sekolah.index', compact('items'));
    }

    public function create()
    {
        return view('admin.fasilitas-sekolah.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:50',
            'gambar' => 'required|image|max:2048',
            'kategori' => 'required|in:Laboratorium / Studi,Fasilitas Akademik,Fasilitas Umum',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('fasilitas-sekolah', 'public');
        }

        FasilitasSekolah::create($validated);

        return redirect()->route('admin.fasilitas-sekolah.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = FasilitasSekolah::findOrFail($id);
        return view('admin.fasilitas-sekolah.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = FasilitasSekolah::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|max:50',
            'gambar' => 'nullable|image|max:2048',
            'kategori' => 'required|in:Laboratorium / Studi,Fasilitas Akademik,Fasilitas Umum',
        ]);

        if ($request->hasFile('gambar')) {
            if ($item->gambar) {
                Storage::disk('public')->delete($item->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('fasilitas-sekolah', 'public');
        }

        $item->update($validated);

        return redirect()->route('admin.fasilitas-sekolah.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = FasilitasSekolah::findOrFail($id);

        if ($item->gambar) {
            Storage::disk('public')->delete($item->gambar);
        }

        $item->delete();

        return redirect()->route('admin.fasilitas-sekolah.index')->with('success', 'Data berhasil dihapus.');
    }
}
