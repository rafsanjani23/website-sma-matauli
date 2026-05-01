<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TenagaKependidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TenagaKependidikanController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        if (!empty($search)) {
            $items = TenagaKependidikan::where(function ($q) use ($search) {
                    $q->where('nama', 'like', '%' . $search . '%')
                      ->orWhere('jabatan->id', 'like', '%' . $search . '%')
                      ->orWhere('jabatan->en', 'like', '%' . $search . '%');
                })
                ->paginate(20)->onEachSide(2)
                ->withQueryString()
                ->fragment('tenaga_kependidikan');
        } else {
            $items = TenagaKependidikan::orderBy('nama')->paginate(20)->onEachSide(2)->withQueryString()->fragment('tenaga_kependidikan');
        }
        return view('admin.tenaga-kependidikan.index', with([
            'items' => $items,
            'search' => $search
        ]));
    }

    public function create()
    {
        return view('admin.tenaga-kependidikan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:50',
            'jabatan.id' => 'required|max:50',
            'jabatan.en' => 'nullable|max:50',
            'foto' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('tenaga-kependidikan', 'public');
        }

        TenagaKependidikan::create($validated);

        return redirect()->route('admin.tenaga-kependidikan.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = TenagaKependidikan::findOrFail($id);
        return view('admin.tenaga-kependidikan.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = TenagaKependidikan::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|max:50',
            'jabatan.id' => 'required|max:50',
            'jabatan.en' => 'nullable|max:50',
            'foto' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            if ($item->foto) {
                Storage::disk('public')->delete($item->foto);
            }
            $validated['foto'] = $request->file('foto')->store('tenaga-kependidikan', 'public');
        }

        $item->update($validated);

        return redirect()->route('admin.tenaga-kependidikan.index', request()->query())->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = TenagaKependidikan::findOrFail($id);

        if ($item->foto) {
            Storage::disk('public')->delete($item->foto);
        }

        $item->delete();

        return redirect()->route('admin.tenaga-kependidikan.index', request()->query())->with('success', 'Data berhasil dihapus.');
    }
}
