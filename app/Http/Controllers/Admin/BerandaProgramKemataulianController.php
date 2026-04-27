<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BerandaProgramKemataulian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BerandaProgramKemataulianController extends Controller
{
    public function index()
    {
        $items = BerandaProgramKemataulian::latest()->paginate(20)->onEachSide(2)->fragment('beranda-program-kemataulian');
        return view('admin.beranda.program-kemataulian.index', compact('items'));
    }

    public function create()
    {
        return view('admin.beranda.program-kemataulian.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul.id'     => 'required|max:150',
            'judul.en'     => 'nullable|max:150',
            'ringkasan.id' => 'required',
            'ringkasan.en' => 'nullable',
            'foto'         => 'required|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('beranda/program-kemataulian', 'public');
        }

        BerandaProgramKemataulian::create($validated);

        return redirect()->route('admin.beranda.program-kemataulian.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = BerandaProgramKemataulian::findOrFail($id);
        return view('admin.beranda.program-kemataulian.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = BerandaProgramKemataulian::findOrFail($id);

        $validated = $request->validate([
            'judul.id'     => 'required|max:150',
            'judul.en'     => 'nullable|max:150',
            'ringkasan.id' => 'required|max:300',
            'ringkasan.en' => 'nullable|max:300',
            'foto'         => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            if ($item->foto) {
                Storage::disk('public')->delete($item->foto);
            }
            $validated['foto'] = $request->file('foto')->store('beranda/program-kemataulian', 'public');
        }

        $item->update($validated);

        return redirect()->route('admin.beranda.program-kemataulian.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = BerandaProgramKemataulian::findOrFail($id);

        if ($item->foto) {
            Storage::disk('public')->delete($item->foto);
        }

        $item->delete();

        return redirect()->route('admin.beranda.program-kemataulian.index')->with('success', 'Data berhasil dihapus.');
    }
}
