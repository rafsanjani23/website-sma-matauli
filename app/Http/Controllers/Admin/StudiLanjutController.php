<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StudiLanjut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudiLanjutController extends Controller
{
    public function index()
    {
        $items = StudiLanjut::latest()->get();
        return view('admin.studi-lanjut.index', compact('items'));
    }

    public function create()
    {
        return view('admin.studi-lanjut.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'foto' => 'nullable|image|max:2048',
            'nama_alumni' => 'required|max:50',
            'nama_lembaga' => 'required|max:50',
            'kategori' => 'required|in:PTN,PTLN,TNI-Polri,Kedinasan',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('studi-lanjut', 'public');
        }

        StudiLanjut::create($validated);

        return redirect()->route('admin.studi-lanjut.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = StudiLanjut::findOrFail($id);
        return view('admin.studi-lanjut.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = StudiLanjut::findOrFail($id);

        $validated = $request->validate([
            'foto' => 'nullable|image|max:2048',
            'nama_alumni' => 'required|max:50',
            'nama_lembaga' => 'required|max:50',
            'kategori' => 'required|in:PTN,PTLN,TNI-Polri,Kedinasan',
        ]);

        if ($request->hasFile('foto')) {
            if ($item->foto) {
                Storage::disk('public')->delete($item->foto);
            }
            $validated['foto'] = $request->file('foto')->store('studi-lanjut', 'public');
        }

        $item->update($validated);

        return redirect()->route('admin.studi-lanjut.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = StudiLanjut::findOrFail($id);

        if ($item->foto) {
            Storage::disk('public')->delete($item->foto);
        }

        $item->delete();

        return redirect()->route('admin.studi-lanjut.index')->with('success', 'Data berhasil dihapus.');
    }
}
