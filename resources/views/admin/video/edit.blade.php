@extends('admin.layouts.app')
@section('title', 'Edit Video')
@section('content')
    <div class="max-w-4xl">
        <div class="mb-6">
            <a href="{{ route('admin.video.index') }}" class="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-red-800 transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" /></svg>
                Kembali
            </a>
        </div>
        <div class="bg-white rounded-xl border border-gray-200 p-6 md:p-8">
            <h2 class="text-lg font-bold text-gray-900 mb-6">Edit Video</h2>
            @if ($errors->any())
                <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl mb-6 text-sm">
                    <ul class="list-disc list-inside space-y-1">
                        @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('admin.video.update', $item->id) }}" method="POST" class="space-y-5">
                @csrf
                @method('PUT')
                <div>
                    <label for="judul" class="block text-sm font-semibold text-gray-700 mb-1.5">Judul</label>
                    <input type="text" name="judul" id="judul" value="{{ old('judul', $item->judul) }}" required class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition" />
                </div>
                <div>
                    <label for="youtube_link" class="block text-sm font-semibold text-gray-700 mb-1.5">YouTube Link</label>
                    <img src="https://img.youtube.com/vi/{{ $item->youtube_id }}/hqdefault.jpg" alt="Thumbnail saat ini" class="w-40 h-24 object-cover rounded-lg mb-4" />
                    <input type="url" name="youtube_link" id="youtube_link" value="{{ old('youtube_link', 'https://www.youtube.com/watch?v=' . $item->youtube_id) }}" required placeholder="contoh: https://www.youtube.com/watch?v=lXwn83rmegQ" class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition" />
                </div>
                <div class="pt-4">
                    <button type="submit" class="bg-red-800 hover:bg-red-900 text-white font-semibold px-6 py-2.5 rounded-xl text-sm transition">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
