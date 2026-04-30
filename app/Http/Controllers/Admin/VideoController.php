<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
        $sourceType = $request->input('source_type', 'youtube');

        $rules = [
            'judul.id' => 'required|max:50',
            'judul.en' => 'nullable|max:50',
            'source_type' => 'required|in:youtube,upload',
        ];

        if ($sourceType === 'youtube') {
            $rules['youtube_link'] = 'required|url';
        } else {
            $rules['video_file'] = 'required|file|mimetypes:video/mp4|mimes:mp4|max:102400';
            $rules['thumbnail_file'] = 'nullable|image|mimes:jpg,jpeg,png|max:2048';
            $rules['thumbnail_data'] = 'nullable|string';
        }

        $request->validate($rules);

        $data = [
            'judul' => $request->judul,
            'youtube_id' => null,
            'video_path' => null,
            'thumbnail_path' => null,
        ];

        if ($sourceType === 'youtube') {
            $youtubeId = $this->extractYoutubeId($request->youtube_link);
            if (!$youtubeId) {
                return $this->errorResponse($request, ['youtube_link' => ['Link YouTube tidak valid.']]);
            }
            $data['youtube_id'] = $youtubeId;
        } else {
            $thumbnailPath = $this->resolveThumbnail($request);
            if (!$thumbnailPath) {
                return $this->errorResponse($request, ['thumbnail_data' => ['Pilih salah satu thumbnail atau upload thumbnail manual.']]);
            }

            $data['video_path'] = $request->file('video_file')->store('videos', 'public');
            $data['thumbnail_path'] = $thumbnailPath;
        }

        Video::create($data);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json(['redirect' => route('admin.video.index'), 'message' => 'Data berhasil ditambahkan.']);
        }
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
        $sourceType = $request->input('source_type', 'youtube');

        $rules = [
            'judul.id' => 'required|max:50',
            'judul.en' => 'nullable|max:50',
            'source_type' => 'required|in:youtube,upload',
        ];

        if ($sourceType === 'youtube') {
            $rules['youtube_link'] = 'required|url';
        } else {
            $rules['video_file'] = ($item->video_path ? 'nullable' : 'required') . '|file|mimetypes:video/mp4|mimes:mp4|max:102400';
            $rules['thumbnail_file'] = 'nullable|image|mimes:jpg,jpeg,png|max:2048';
            $rules['thumbnail_data'] = 'nullable|string';
        }

        $request->validate($rules);

        $data = ['judul' => $request->judul];

        if ($sourceType === 'youtube') {
            $youtubeId = $this->extractYoutubeId($request->youtube_link);
            if (!$youtubeId) {
                return $this->errorResponse($request, ['youtube_link' => ['Link YouTube tidak valid.']]);
            }

            if ($item->video_path) {
                Storage::disk('public')->delete($item->video_path);
            }
            if ($item->thumbnail_path) {
                Storage::disk('public')->delete($item->thumbnail_path);
            }

            $data['youtube_id'] = $youtubeId;
            $data['video_path'] = null;
            $data['thumbnail_path'] = null;
        } else {
            $newThumbnail = $this->resolveThumbnail($request);

            if ($request->hasFile('video_file')) {
                if (!$newThumbnail) {
                    return $this->errorResponse($request, ['thumbnail_data' => ['Pilih salah satu thumbnail atau upload thumbnail manual untuk video baru.']]);
                }
                if ($item->video_path) {
                    Storage::disk('public')->delete($item->video_path);
                }
                $data['video_path'] = $request->file('video_file')->store('videos', 'public');
            }

            if ($newThumbnail) {
                if ($item->thumbnail_path) {
                    Storage::disk('public')->delete($item->thumbnail_path);
                }
                $data['thumbnail_path'] = $newThumbnail;
            }

            $data['youtube_id'] = null;
        }

        $item->update($data);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json(['redirect' => route('admin.video.index'), 'message' => 'Data berhasil diperbarui.']);
        }
        return redirect()->route('admin.video.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = Video::findOrFail($id);

        if ($item->video_path) {
            Storage::disk('public')->delete($item->video_path);
        }
        if ($item->thumbnail_path) {
            Storage::disk('public')->delete($item->thumbnail_path);
        }

        $item->delete();

        return redirect()->route('admin.video.index')->with('success', 'Data berhasil dihapus.');
    }

    private function errorResponse(Request $request, array $errors)
    {
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json(['errors' => $errors], 422);
        }
        return back()->withErrors($errors)->withInput();
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

    private function resolveThumbnail(Request $request): ?string
    {
        if ($request->hasFile('thumbnail_file')) {
            return $request->file('thumbnail_file')->store('video-thumbnails', 'public');
        }

        $data = $request->input('thumbnail_data');
        if (!$data || !Str::startsWith($data, 'data:image/')) {
            return null;
        }

        if (!preg_match('/^data:image\/(jpeg|jpg|png);base64,(.+)$/', $data, $matches)) {
            return null;
        }

        $ext = $matches[1] === 'jpeg' ? 'jpg' : $matches[1];
        $binary = base64_decode($matches[2], true);
        if ($binary === false) {
            return null;
        }

        $filename = 'video-thumbnails/' . Str::uuid() . '.' . $ext;
        Storage::disk('public')->put($filename, $binary);

        return $filename;
    }
}
