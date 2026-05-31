<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PengumumanAsrama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengumumanAsramaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');

        if (! empty($search)) {
            $items = PengumumanAsrama::where(function ($query) use ($search) {
                $query->where('judul->id', 'like', '%'.$search.'%')
                    ->orWhere('judul->en', 'like', '%'.$search.'%')
                    ->orWhere('tanggal', 'like', '%'.$search.'%');
            })
                ->latest()
                ->paginate(20)
                ->onEachSide(2)
                ->withQueryString()
                ->fragment('pengumuman_asrama');
        } else {
            $items = PengumumanAsrama::latest()
                ->paginate(20)
                ->onEachSide(2)
                ->withQueryString()
                ->fragment('pengumuman_asrama');
        }

        return view('admin.pengumuman-asrama.index', compact('items', 'search'));
    }

    public function create()
    {
        return view('admin.pengumuman-asrama.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul.id' => 'required',
            'judul.en' => 'nullable',
            'ringkasan.id' => 'required',
            'ringkasan.en' => 'nullable',
            'isi.id' => 'required',
            'isi.en' => 'nullable',
            'gambar' => 'required|image|max:2048',
            'link_facebook' => 'nullable|url|max:255',
            'tanggal' => 'required|date',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('pengumuman-asrama', 'public');
        }

        PengumumanAsrama::create($validated);

        return redirect()->route('admin.pengumuman-asrama.index')->with('success', 'Pengumuman asrama berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = PengumumanAsrama::findOrFail($id);

        return view('admin.pengumuman-asrama.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = PengumumanAsrama::findOrFail($id);

        $validated = $request->validate([
            'judul.id' => 'required',
            'judul.en' => 'nullable',
            'ringkasan.id' => 'required',
            'ringkasan.en' => 'nullable',
            'isi.id' => 'required',
            'isi.en' => 'nullable',
            'gambar' => 'nullable|image|max:2048',
            'link_facebook' => 'nullable|url|max:255',
            'tanggal' => 'required|date',
        ]);

        if ($request->hasFile('gambar')) {
            if ($item->gambar) {
                Storage::disk('public')->delete($item->gambar);
            }

            $validated['gambar'] = $request->file('gambar')->store('pengumuman-asrama', 'public');
        }

        $item->update($validated);

        return redirect()->route('admin.pengumuman-asrama.index', request()->query())->with('success', 'Pengumuman asrama berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = PengumumanAsrama::findOrFail($id);

        if ($item->gambar) {
            Storage::disk('public')->delete($item->gambar);
        }

        $item->delete();

        return redirect()->route('admin.pengumuman-asrama.index', request()->query())->with('success', 'Pengumuman asrama berhasil dihapus.');
    }
}
