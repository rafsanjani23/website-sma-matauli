<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pimpinan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PimpinanController extends Controller
{
    public function index()
    {
        $items = Pimpinan::latest()->get();
        return view('admin.pimpinan.index', compact('items'));
    }

    public function edit($id)
    {
        $item = Pimpinan::findOrFail($id);
        return view('admin.pimpinan.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Pimpinan::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|max:50',
            'foto' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            if ($item->foto) {
                Storage::disk('public')->delete($item->foto);
            }
            $validated['foto'] = $request->file('foto')->store('pimpinan', 'public');
        }

        $item->update($validated);

        return redirect()->route('admin.pimpinan.index')->with('success', 'Data berhasil diperbarui.');
    }
}
