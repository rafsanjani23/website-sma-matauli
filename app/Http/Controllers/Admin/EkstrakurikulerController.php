<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EkstrakurikulerController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        if(!empty($search)){
            $items = Ekstrakurikuler::where('ekstrakurikuler.nama', 'like' , '%'.$search.'%')
            ->paginate(20)->onEachSide(2)
            ->fragment('ekstrakurikuler');
        }else{
             $items = Ekstrakurikuler::orderBy('nama')->paginate(20)->onEachSide(2)->fragment('ekstrakurikuler');
        }
        return view('admin.ekstrakurikuler.index', with([
            'items' => $items,
            'search' => $search
        ]));
    }

    public function create()
    {
        return view('admin.ekstrakurikuler.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:100',
            'gambar' => 'required|image|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('ekstrakurikuler', 'public');
        }

        Ekstrakurikuler::create($validated);

        return redirect()->route('admin.ekstrakurikuler.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = Ekstrakurikuler::findOrFail($id);
        return view('admin.ekstrakurikuler.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Ekstrakurikuler::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|max:100',
            'gambar' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            if ($item->gambar) {
                Storage::disk('public')->delete($item->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('ekstrakurikuler', 'public');
        }

        $item->update($validated);

        return redirect()->route('admin.ekstrakurikuler.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = Ekstrakurikuler::findOrFail($id);

        if ($item->gambar) {
            Storage::disk('public')->delete($item->gambar);
        }

        $item->delete();

        return redirect()->route('admin.ekstrakurikuler.index')->with('success', 'Data berhasil dihapus.');
    }
}
