<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FasilitasAsrama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FasilitasAsramaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        if(!empty($search)){
            $items = FasilitasAsrama::where('nama->id', 'like', '%'.$search.'%')
                ->orWhere('nama->en', 'like', '%'.$search.'%')
                ->paginate(20)->onEachSide(2)
                ->withQueryString()
                ->fragment('fasilitas_asrama');
        }else{
             $items = FasilitasAsrama::latest()->paginate(20)->onEachSide(2)->withQueryString()->fragment('fasilitas_asrama');
        }
        return view('admin.fasilitas-asrama.index', with([
            'items' => $items,
            'search' => $search
        ]));
    }

    public function create()
    {
        return view('admin.fasilitas-asrama.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama.id' => 'required|max:50',
            'nama.en' => 'nullable|max:50',
            'gambar' => 'required|image|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('fasilitas-asrama', 'public');
        }

        FasilitasAsrama::create($validated);

        return redirect()->route('admin.fasilitas-asrama.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = FasilitasAsrama::findOrFail($id);
        return view('admin.fasilitas-asrama.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = FasilitasAsrama::findOrFail($id);

        $validated = $request->validate([
            'nama.id' => 'required|max:50',
            'nama.en' => 'nullable|max:50',
            'gambar' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            if ($item->gambar) {
                Storage::disk('public')->delete($item->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('fasilitas-asrama', 'public');
        }

        $item->update($validated);

        return redirect()->route('admin.fasilitas-asrama.index', request()->query())->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = FasilitasAsrama::findOrFail($id);

        if ($item->gambar) {
            Storage::disk('public')->delete($item->gambar);
        }

        $item->delete();

        return redirect()->route('admin.fasilitas-asrama.index', request()->query())->with('success', 'Data berhasil dihapus.');
    }
}
