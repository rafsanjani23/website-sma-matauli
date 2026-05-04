<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        if (!empty($search)) {
            $items = Prestasi::where(function ($q) use ($search) {
                    $q->where('judul->id', 'like', '%' . $search . '%')
                      ->orWhere('judul->en', 'like', '%' . $search . '%')
                      ->orWhere('tanggal', 'like', '%' . $search . '%')
                      ->orWhere('nama_lomba->id', 'like', '%' . $search . '%')
                      ->orWhere('nama_lomba->en', 'like', '%' . $search . '%')
                      ->orWhere('tingkatan->id', 'like', '%' . $search . '%')
                      ->orWhere('tingkatan->en', 'like', '%' . $search . '%');
                })
                ->paginate(20)->onEachSide(2)
                ->withQueryString()
                ->fragment('prestasi');
        } else {
            $items = Prestasi::latest()->paginate(20)->onEachSide(2)->withQueryString()->fragment('prestasi');
        }
        return view('admin.prestasi.index', with([
            'items' => $items,
            'search' => $search
        ]));
    }

    public function create()
    {
        return view('admin.prestasi.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul.id' => 'required',
            'judul.en' => 'nullable',
            'nama_lomba.id' => 'required',
            'nama_lomba.en' => 'nullable',
            'tingkatan.id' => 'required',
            'tingkatan.en' => 'nullable',
            'isi.id' => 'required',
            'isi.en' => 'nullable',
            'gambar' => 'required|image|max:2048',
            'tanggal' => 'required|date',
            'kategori' => 'required|in:Prestasi Sekolah,Prestasi Siswa,Prestasi Guru',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('prestasi', 'public');
        }

        Prestasi::create($validated);

        return redirect()->route('admin.prestasi.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = Prestasi::findOrFail($id);
        return view('admin.prestasi.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Prestasi::findOrFail($id);

        $validated = $request->validate([
            'judul.id' => 'required',
            'judul.en' => 'nullable',
            'nama_lomba.id' => 'required',
            'nama_lomba.en' => 'nullable',
            'tingkatan.id' => 'required',
            'tingkatan.en' => 'nullable',
            'isi.id' => 'required',
            'isi.en' => 'nullable',
            'gambar' => 'nullable|image|max:2048',
            'tanggal' => 'required|date',
            'kategori' => 'required|in:Prestasi Sekolah,Prestasi Siswa,Prestasi Guru',
        ]);

        if ($request->hasFile('gambar')) {
            if ($item->gambar) {
                Storage::disk('public')->delete($item->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('prestasi', 'public');
        }

        $item->update($validated);

        return redirect()->route('admin.prestasi.index', request()->query())->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = Prestasi::findOrFail($id);

        if ($item->gambar) {
            Storage::disk('public')->delete($item->gambar);
        }

        $item->delete();

        return redirect()->route('admin.prestasi.index', request()->query())->with('success', 'Data berhasil dihapus.');
    }
}
