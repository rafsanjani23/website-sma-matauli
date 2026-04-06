<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProgramKemendikdasmen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProgramKemendikdasmenController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        if (!empty($search)) {
            $items = ProgramKemendikdasmen::where('judul', 'like', '%' . $search . '%')
                ->paginate(20)->onEachSide(2)
                ->fragment('program-kemendikdasmen');
        } else {
            $items = ProgramKemendikdasmen::orderBy('judul')->paginate(20)->onEachSide(2)->fragment('program-kemendikdasmen');
        }
        return view('admin.program-kemendikdasmen.index', compact('items', 'search'));
    }

    public function create()
    {
        return view('admin.program-kemendikdasmen.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|max:100',
            'deskripsi' => 'required',
            'gambar' => 'required|image|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('program-kemendikdasmen', 'public');
        }

        ProgramKemendikdasmen::create($validated);

        return redirect()->route('admin.program-kemendikdasmen.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = ProgramKemendikdasmen::findOrFail($id);
        return view('admin.program-kemendikdasmen.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = ProgramKemendikdasmen::findOrFail($id);

        $validated = $request->validate([
            'judul' => 'required|max:100',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            if ($item->gambar) {
                Storage::disk('public')->delete($item->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('program-kemendikdasmen', 'public');
        }

        $item->update($validated);

        return redirect()->route('admin.program-kemendikdasmen.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = ProgramKemendikdasmen::findOrFail($id);

        if ($item->gambar) {
            Storage::disk('public')->delete($item->gambar);
        }

        $item->delete();

        return redirect()->route('admin.program-kemendikdasmen.index')->with('success', 'Data berhasil dihapus.');
    }
}
