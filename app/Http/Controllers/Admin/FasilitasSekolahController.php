<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FasilitasSekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FasilitasSekolahController extends Controller
{
    public function index(Request $request)
    {
           $search = $request->query('search');
        if(!empty($search)){
            $items = FasilitasSekolah::where(function ($q) use ($search) {
                    $q->where('nama->id', 'like', '%'.$search.'%')
                      ->orWhere('nama->en', 'like', '%'.$search.'%')
                      ->orWhere('kategori', 'like', '%'.$search.'%');
                })
                ->paginate(20)->onEachSide(2)
                ->fragment('fasilitas_sekolah');
        }else{
             $items = FasilitasSekolah::latest()->paginate(20)->onEachSide(2)->fragment('fasilitas_sekolah');
        }
        return view('admin.fasilitas-sekolah.index', with([
            'items' => $items,
            'search' => $search
        ]));
    }

    public function create()
    {
        return view('admin.fasilitas-sekolah.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama.id' => 'required|max:50',
            'nama.en' => 'nullable|max:50',
            'gambar' => 'required|image|max:2048',
            'kategori' => 'required|in:Laboratorium / Studi,Fasilitas Akademik,Fasilitas Umum',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('fasilitas-sekolah', 'public');
        }

        FasilitasSekolah::create($validated);

        return redirect()->route('admin.fasilitas-sekolah.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = FasilitasSekolah::findOrFail($id);
        return view('admin.fasilitas-sekolah.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = FasilitasSekolah::findOrFail($id);

        $validated = $request->validate([
            'nama.id' => 'required|max:50',
            'nama.en' => 'nullable|max:50',
            'gambar' => 'nullable|image|max:2048',
            'kategori' => 'required|in:Laboratorium / Studi,Fasilitas Akademik,Fasilitas Umum',
        ]);

        if ($request->hasFile('gambar')) {
            if ($item->gambar) {
                Storage::disk('public')->delete($item->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('fasilitas-sekolah', 'public');
        }

        $item->update($validated);

        return redirect()->route('admin.fasilitas-sekolah.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = FasilitasSekolah::findOrFail($id);

        if ($item->gambar) {
            Storage::disk('public')->delete($item->gambar);
        }

        $item->delete();

        return redirect()->route('admin.fasilitas-sekolah.index')->with('success', 'Data berhasil dihapus.');
    }
}
