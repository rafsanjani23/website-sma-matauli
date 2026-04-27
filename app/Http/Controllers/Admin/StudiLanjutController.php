<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StudiLanjut;
use Illuminate\Http\Request;

class StudiLanjutController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        if (!empty($search)) {
            $items = StudiLanjut::where(function ($q) use ($search) {
                    $q->where('nama_alumni', 'like', '%' . $search . '%')
                      ->orWhere('nama_lembaga->id', 'like', '%' . $search . '%')
                      ->orWhere('nama_lembaga->en', 'like', '%' . $search . '%')
                      ->orWhere('kategori', 'like', '%' . $search . '%')
                      ->orWhere('angkatan', 'like', '%' . $search . '%');
                })
                ->paginate(20)->onEachSide(2)
                ->fragment('studi_lanjut');
        } else {
            $items = StudiLanjut::orderBy('nama_alumni')->paginate(20)->onEachSide(2)->fragment('studi_lanjut');
        }
        return view('admin.studi-lanjut.index', with([
            'items' => $items,
            'search' => $search
        ]));
    }

    public function create()
    {
        return view('admin.studi-lanjut.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_alumni' => 'required|max:50',
            'nama_lembaga.id' => 'required|max:50',
            'nama_lembaga.en' => 'nullable|max:50',
            'kategori' => 'required|in:PTN,PTS,PTLN,TNI-Polri,Kedinasan',
            'angkatan' => 'required|max:10',
        ]);

        StudiLanjut::create($validated);

        return redirect()->route('admin.studi-lanjut.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = StudiLanjut::findOrFail($id);
        return view('admin.studi-lanjut.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = StudiLanjut::findOrFail($id);

        $validated = $request->validate([
            'nama_alumni' => 'required|max:50',
            'nama_lembaga.id' => 'required|max:50',
            'nama_lembaga.en' => 'nullable|max:50',
            'kategori' => 'required|in:PTN,PTS,PTLN,TNI-Polri,Kedinasan',
            'angkatan' => 'required|max:10',
        ]);

        $item->update($validated);

        return redirect()->route('admin.studi-lanjut.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = StudiLanjut::findOrFail($id);
        $item->delete();

        return redirect()->route('admin.studi-lanjut.index')->with('success', 'Data berhasil dihapus.');
    }
}
