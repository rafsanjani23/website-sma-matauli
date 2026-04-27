<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TenagaPendidik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TenagaPendidikController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        if (!empty($search)) {
            $items = TenagaPendidik::where(function ($q) use ($search) {
                    $q->where('nama', 'like', '%'.$search.'%')
                      ->orWhere('mata_pelajaran->id', 'like', '%'.$search.'%')
                      ->orWhere('mata_pelajaran->en', 'like', '%'.$search.'%')
                      ->orWhere('kategori', 'like', '%'.$search.'%');
                })
                ->paginate(20)->onEachSide(2)
                ->fragment('tenaga_pendidik');
        } else {
            $items = TenagaPendidik::orderBy('nama')->paginate(20)->onEachSide(2)->fragment('tenaga_pendidik');
        }
        return view('admin.tenaga-pendidik.index', with([
            'items' => $items,
            'search' => $search
        ]));
    }

    public function create()
    {
        return view('admin.tenaga-pendidik.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:50',
            'mata_pelajaran.id' => 'required|max:50',
            'mata_pelajaran.en' => 'nullable|max:50',
            'foto' => 'nullable|image|max:2048',
            'kategori' => 'required|in:Guru Mata Pelajaran,IB',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('tenaga-pendidik', 'public');
        }

        TenagaPendidik::create($validated);

        return redirect()->route('admin.tenaga-pendidik.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = TenagaPendidik::findOrFail($id);
        return view('admin.tenaga-pendidik.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = TenagaPendidik::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|max:50',
            'mata_pelajaran.id' => 'required|max:50',
            'mata_pelajaran.en' => 'nullable|max:50',
            'foto' => 'nullable|image|max:2048',
            'kategori' => 'required|in:Guru Mata Pelajaran,IB',
        ]);

        if ($request->hasFile('foto')) {
            if ($item->foto) {
                Storage::disk('public')->delete($item->foto);
            }
            $validated['foto'] = $request->file('foto')->store('tenaga-pendidik', 'public');
        }

        $item->update($validated);

        return redirect()->route('admin.tenaga-pendidik.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = TenagaPendidik::findOrFail($id);

        if ($item->foto) {
            Storage::disk('public')->delete($item->foto);
        }

        $item->delete();

        return redirect()->route('admin.tenaga-pendidik.index')->with('success', 'Data berhasil dihapus.');
    }
}
