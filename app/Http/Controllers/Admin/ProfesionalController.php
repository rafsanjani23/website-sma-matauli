<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profesional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfesionalController extends Controller
{
    public function index()
    {
        $items = Profesional::latest()->get();
        return view('admin.profesional.index', compact('items'));
    }

    public function create()
    {
        return view('admin.profesional.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:50',
            'nama_lembaga' => 'required|max:50',
            'foto' => 'nullable|image|max:2048',
            'link_facebook' => 'nullable|max:50',
            'link_twitter' => 'nullable|max:50',
            'link_linkedin' => 'nullable|max:50',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('profesional', 'public');
        }

        Profesional::create($validated);

        return redirect()->route('admin.profesional.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = Profesional::findOrFail($id);
        return view('admin.profesional.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Profesional::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|max:50',
            'nama_lembaga' => 'required|max:50',
            'foto' => 'nullable|image|max:2048',
            'link_facebook' => 'nullable|max:50',
            'link_twitter' => 'nullable|max:50',
            'link_linkedin' => 'nullable|max:50',
        ]);

        if ($request->hasFile('foto')) {
            if ($item->foto) {
                Storage::disk('public')->delete($item->foto);
            }
            $validated['foto'] = $request->file('foto')->store('profesional', 'public');
        }

        $item->update($validated);

        return redirect()->route('admin.profesional.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = Profesional::findOrFail($id);

        if ($item->foto) {
            Storage::disk('public')->delete($item->foto);
        }

        $item->delete();

        return redirect()->route('admin.profesional.index')->with('success', 'Data berhasil dihapus.');
    }
}
