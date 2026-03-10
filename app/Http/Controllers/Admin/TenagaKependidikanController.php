<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TenagaKependidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TenagaKependidikanController extends Controller
{
    public function index()
    {
        $items = TenagaKependidikan::latest()->get();
        return view('admin.tenaga-kependidikan.index', compact('items'));
    }

    public function create()
    {
        return view('admin.tenaga-kependidikan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:50',
            'jabatan' => 'required|max:50',
            'foto' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('tenaga-kependidikan', 'public');
        }

        TenagaKependidikan::create($validated);

        return redirect()->route('admin.tenaga-kependidikan.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = TenagaKependidikan::findOrFail($id);
        return view('admin.tenaga-kependidikan.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = TenagaKependidikan::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|max:50',
            'jabatan' => 'required|max:50',
            'foto' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            if ($item->foto) {
                Storage::disk('public')->delete($item->foto);
            }
            $validated['foto'] = $request->file('foto')->store('tenaga-kependidikan', 'public');
        }

        $item->update($validated);

        return redirect()->route('admin.tenaga-kependidikan.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = TenagaKependidikan::findOrFail($id);

        if ($item->foto) {
            Storage::disk('public')->delete($item->foto);
        }

        $item->delete();

        return redirect()->route('admin.tenaga-kependidikan.index')->with('success', 'Data berhasil dihapus.');
    }
}
