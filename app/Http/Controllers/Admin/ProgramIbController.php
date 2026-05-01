<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProgramIb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProgramIbController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        if (!empty($search)) {
            $items = ProgramIb::where('judul->id', 'like', '%' . $search . '%')
                ->orWhere('judul->en', 'like', '%' . $search . '%')
                ->paginate(20)->onEachSide(2)
                ->withQueryString()
                ->fragment('program-ib');
        } else {
            $items = ProgramIb::orderBy('judul->id')->paginate(20)->onEachSide(2)->withQueryString()->fragment('program-ib');
        }
        return view('admin.program-ib.index', compact('items', 'search'));
    }

    public function create()
    {
        return view('admin.program-ib.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul.id'       => 'required|max:150',
            'judul.en'       => 'nullable|max:150',
            'ringkasan.id'   => 'required',
            'ringkasan.en'   => 'nullable',
            'isi_konten.id'  => 'required',
            'isi_konten.en'  => 'nullable',
            'gambar'         => 'required|image|max:4096',
            'gambar_opsional'=> 'nullable|image|max:4096',
        ]);

        $validated['gambar'] = $request->file('gambar')->store('program-ib', 'public');

        if ($request->hasFile('gambar_opsional')) {
            $validated['gambar_opsional'] = $request->file('gambar_opsional')->store('program-ib', 'public');
        }

        ProgramIb::create($validated);

        return redirect()->route('admin.program-ib.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = ProgramIb::findOrFail($id);
        return view('admin.program-ib.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = ProgramIb::findOrFail($id);

        $validated = $request->validate([
            'judul.id'       => 'required|max:150',
            'judul.en'       => 'nullable|max:150',
            'ringkasan.id'   => 'required',
            'ringkasan.en'   => 'nullable',
            'isi_konten.id'  => 'required',
            'isi_konten.en'  => 'nullable',
            'gambar'         => 'nullable|image|max:4096',
            'gambar_opsional'=> 'nullable|image|max:4096',
        ]);

        if ($request->hasFile('gambar')) {
            if ($item->gambar) {
                Storage::disk('public')->delete($item->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('program-ib', 'public');
        }

        if ($request->hasFile('gambar_opsional')) {
            if ($item->gambar_opsional) {
                Storage::disk('public')->delete($item->gambar_opsional);
            }
            $validated['gambar_opsional'] = $request->file('gambar_opsional')->store('program-ib', 'public');
        }

        $item->update($validated);

        return redirect()->route('admin.program-ib.index', request()->query())->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = ProgramIb::findOrFail($id);

        if ($item->gambar) {
            Storage::disk('public')->delete($item->gambar);
        }
        if ($item->gambar_opsional) {
            Storage::disk('public')->delete($item->gambar_opsional);
        }

        $item->delete();

        return redirect()->route('admin.program-ib.index', request()->query())->with('success', 'Data berhasil dihapus.');
    }
}
