<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BerandaProgramKemendikdasmen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BerandaProgramKemendikdasmenController extends Controller
{
    public function index()
    {
        $items = BerandaProgramKemendikdasmen::latest()->paginate(20)->onEachSide(2)->fragment('beranda-program-kemendikdasmen');
        return view('admin.beranda.program-kemendikdasmen.index', compact('items'));
    }

    public function create()
    {
        return view('admin.beranda.program-kemendikdasmen.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul'     => 'required|max:150',
            'ringkasan' => 'required',
            'foto'      => 'required|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('beranda/program-kemendikdasmen', 'public');
        }

        BerandaProgramKemendikdasmen::create($validated);

        return redirect()->route('admin.beranda.program-kemendikdasmen.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = BerandaProgramKemendikdasmen::findOrFail($id);
        return view('admin.beranda.program-kemendikdasmen.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = BerandaProgramKemendikdasmen::findOrFail($id);

        $validated = $request->validate([
            'judul'     => 'required|max:150',
            'ringkasan' => 'required|max:300',
            'foto'      => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            if ($item->foto) {
                Storage::disk('public')->delete($item->foto);
            }
            $validated['foto'] = $request->file('foto')->store('beranda/program-kemendikdasmen', 'public');
        }

        $item->update($validated);

        return redirect()->route('admin.beranda.program-kemendikdasmen.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = BerandaProgramKemendikdasmen::findOrFail($id);

        if ($item->foto) {
            Storage::disk('public')->delete($item->foto);
        }

        $item->delete();

        return redirect()->route('admin.beranda.program-kemendikdasmen.index')->with('success', 'Data berhasil dihapus.');
    }
}
