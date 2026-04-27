<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        if (!empty($search)) {
            $items = Video::where('judul->id', 'like', '%' . $search . '%')
                ->orWhere('judul->en', 'like', '%' . $search . '%')
                ->paginate(20)->onEachSide(2)
                ->fragment('video');
        } else {
            $items = Video::latest()->paginate(20)->onEachSide(2)->fragment('video');
        }
        return view('admin.video.index', with([
            'items' => $items,
            'search' => $search
        ]));
    }

    public function create()
    {
        return view('admin.video.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul.id' => 'required|max:50',
            'judul.en' => 'nullable|max:50',
            'youtube_link' => 'required|url',
        ]);

        $youtubeId = $this->extractYoutubeId($request->youtube_link);

        if (!$youtubeId) {
            return back()->withErrors(['youtube_link' => 'Link YouTube tidak valid.'])->withInput();
        }

        Video::create([
            'judul' => $request->judul,
            'youtube_id' => $youtubeId,
        ]);

        return redirect()->route('admin.video.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = Video::findOrFail($id);
        return view('admin.video.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Video::findOrFail($id);

        $request->validate([
            'judul.id' => 'required|max:50',
            'judul.en' => 'nullable|max:50',
            'youtube_link' => 'required|url',
        ]);

        $youtubeId = $this->extractYoutubeId($request->youtube_link);

        if (!$youtubeId) {
            return back()->withErrors(['youtube_link' => 'Link YouTube tidak valid.'])->withInput();
        }

        $item->update([
            'judul' => $request->judul,
            'youtube_id' => $youtubeId,
        ]);

        return redirect()->route('admin.video.index')->with('success', 'Data berhasil diperbarui.');
    }

    private function extractYoutubeId(string $url): ?string
    {
        $patterns = [
            '/(?:youtube\.com\/watch\?v=)([a-zA-Z0-9_-]{11})/',
            '/(?:youtu\.be\/)([a-zA-Z0-9_-]{11})/',
            '/(?:youtube\.com\/embed\/)([a-zA-Z0-9_-]{11})/',
            '/(?:youtube\.com\/shorts\/)([a-zA-Z0-9_-]{11})/',
        ];

        foreach ($patterns as $pattern) {
            if (preg_match($pattern, $url, $matches)) {
                return $matches[1];
            }
        }

        return null;
    }

    public function destroy($id)
    {
        $item = Video::findOrFail($id);
        $item->delete();

        return redirect()->route('admin.video.index')->with('success', 'Data berhasil dihapus.');
    }
}
