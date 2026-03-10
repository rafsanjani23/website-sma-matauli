<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimoniController extends Controller
{
    public function index()
    {
        $items = Testimoni::latest()->get();
        return view('admin.testimoni.index', compact('items'));
    }

    public function create()
    {
        return view('admin.testimoni.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:50',
            'tahun_alumni' => 'required|max:50',
            'foto' => 'nullable|image|max:2048',
            'isi' => 'required',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('testimoni', 'public');
        }

        Testimoni::create($validated);

        return redirect()->route('admin.testimoni.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = Testimoni::findOrFail($id);
        return view('admin.testimoni.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Testimoni::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|max:50',
            'tahun_alumni' => 'required|max:50',
            'foto' => 'nullable|image|max:2048',
            'isi' => 'required',
        ]);

        if ($request->hasFile('foto')) {
            if ($item->foto) {
                Storage::disk('public')->delete($item->foto);
            }
            $validated['foto'] = $request->file('foto')->store('testimoni', 'public');
        }

        $item->update($validated);

        return redirect()->route('admin.testimoni.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = Testimoni::findOrFail($id);

        if ($item->foto) {
            Storage::disk('public')->delete($item->foto);
        }

        $item->delete();

        return redirect()->route('admin.testimoni.index')->with('success', 'Data berhasil dihapus.');
    }
}
