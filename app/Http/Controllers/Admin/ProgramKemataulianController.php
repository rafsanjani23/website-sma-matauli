<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProgramKemataulian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProgramKemataulianController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        if (!empty($search)) {
            $items = ProgramKemataulian::where('judul', 'like', '%' . $search . '%')
                ->paginate(20)->onEachSide(2)
                ->fragment('program-kemataulian');
        } else {
            $items = ProgramKemataulian::orderBy('judul')->paginate(20)->onEachSide(2)->fragment('program-kemataulian');
        }
        return view('admin.program-kemataulian.index', compact('items', 'search'));
    }

    public function create()
    {
        return view('admin.program-kemataulian.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|max:100',
            'deskripsi' => 'required',
            'gambar' => 'required|image|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('program-kemataulian', 'public');
        }

        ProgramKemataulian::create($validated);

        return redirect()->route('admin.program-kemataulian.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = ProgramKemataulian::findOrFail($id);
        return view('admin.program-kemataulian.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = ProgramKemataulian::findOrFail($id);

        $validated = $request->validate([
            'judul' => 'required|max:100',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            if ($item->gambar) {
                Storage::disk('public')->delete($item->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('program-kemataulian', 'public');
        }

        $item->update($validated);

        return redirect()->route('admin.program-kemataulian.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = ProgramKemataulian::findOrFail($id);

        if ($item->gambar) {
            Storage::disk('public')->delete($item->gambar);
        }

        $item->delete();

        return redirect()->route('admin.program-kemataulian.index')->with('success', 'Data berhasil dihapus.');
    }
}
