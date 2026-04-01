<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengasuh;
use Illuminate\Support\Facades\Storage;

class PengasuhController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        if (!empty($search)) {
            $items = Pengasuh::where('pengasuhs.nama', 'like', '%' . $search . '%')
                ->paginate(20)->onEachSide(2)
                ->fragment('pengasuh');
        } else {
            $items = Pengasuh::latest()->paginate(20)->onEachSide(2)->fragment('pengasuh');
        }
        return view('admin.pengasuh.index', with([
            'items' => $items,
            'search' => $search
        ]));
    }

     public function create()
    {
        return view('admin.pengasuh.create');
    }

     public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:50',
            'foto' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('pengasuh', 'public');
        }

        Pengasuh::create($validated);

        return redirect()->route('admin.pengasuh.index')->with('success', 'Data berhasil ditambahkan.');
    }

     public function edit($id)
    {
        $item = Pengasuh::findOrFail($id);
        return view('admin.pengasuh.edit', compact('item'));
    }

        public function update(Request $request, $id)
    {
        $item = Pengasuh::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|max:50',
            'foto' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            if ($item->foto) {
                Storage::disk('public')->delete($item->foto);
            }
            $validated['foto'] = $request->file('foto')->store('pengasuh', 'public');
        }

        $item->update($validated);

        return redirect()->route('admin.pengasuh.index')->with('success', 'Data berhasil diperbarui.');
    }

      public function destroy($id)
    {
        $item = Pengasuh::findOrFail($id);

        if ($item->foto) {
            Storage::disk('public')->delete($item->foto);
        }

        $item->delete();

        return redirect()->route('admin.pengasuh.index')->with('success', 'Data berhasil dihapus.');
    }

}
