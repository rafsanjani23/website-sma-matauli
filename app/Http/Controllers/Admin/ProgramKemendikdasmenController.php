<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProgramKemendikdasmen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProgramKemendikdasmenController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        if (!empty($search)) {
            $items = ProgramKemendikdasmen::where('judul->id', 'like', '%' . $search . '%')
                ->orWhere('judul->en', 'like', '%' . $search . '%')
                ->paginate(20)->onEachSide(2)
                ->withQueryString()
                ->fragment('program-kemendikdasmen');
        } else {
            $items = ProgramKemendikdasmen::orderBy('judul->id')->paginate(20)->onEachSide(2)->withQueryString()->fragment('program-kemendikdasmen');
        }
        return view('admin.program-kemendikdasmen.index', compact('items', 'search'));
    }

    public function create()
    {
        return view('admin.program-kemendikdasmen.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul.id'       => 'required|max:100',
            'judul.en'       => 'nullable|max:100',
            'ringkasan.id'   => 'required',
            'ringkasan.en'   => 'nullable',
            'isi_konten.id'  => 'required',
            'isi_konten.en'  => 'nullable',
            'gambar'         => 'required|image|max:4096',
            'gambar_opsional'=> 'nullable|image|max:4096',
        ]);

        $validated['gambar'] = $request->file('gambar')->store('program-kemendikdasmen', 'public');

        if ($request->hasFile('gambar_opsional')) {
            $validated['gambar_opsional'] = $request->file('gambar_opsional')->store('program-kemendikdasmen', 'public');
        }

        ProgramKemendikdasmen::create($validated);

        return redirect()->route('admin.program-kemendikdasmen.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = ProgramKemendikdasmen::findOrFail($id);
        return view('admin.program-kemendikdasmen.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = ProgramKemendikdasmen::findOrFail($id);

        $validated = $request->validate([
            'judul.id'       => 'required|max:100',
            'judul.en'       => 'nullable|max:100',
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
            $validated['gambar'] = $request->file('gambar')->store('program-kemendikdasmen', 'public');
        }

        if ($request->hasFile('gambar_opsional')) {
            if ($item->gambar_opsional) {
                Storage::disk('public')->delete($item->gambar_opsional);
            }
            $validated['gambar_opsional'] = $request->file('gambar_opsional')->store('program-kemendikdasmen', 'public');
        }

        $item->update($validated);

        return redirect()->route('admin.program-kemendikdasmen.index', request()->query())->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = ProgramKemendikdasmen::findOrFail($id);

        if ($item->gambar) {
            Storage::disk('public')->delete($item->gambar);
        }

        $item->delete();

        return redirect()->route('admin.program-kemendikdasmen.index', request()->query())->with('success', 'Data berhasil dihapus.');
    }
}
