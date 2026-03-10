@extends('admin.layouts.app')
@section('title', 'Edit Foto')
@section('content')
    <div class="max-w-4xl">
        <div class="mb-6">
            <a href="{{ route('admin.foto.index') }}" class="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-red-800 transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" /></svg>
                Kembali
            </a>
        </div>
        <div class="bg-white rounded-xl border border-gray-200 p-6 md:p-8">
            <h2 class="text-lg font-bold text-gray-900 mb-6">Edit Foto</h2>
            @if ($errors->any())
                <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl mb-6 text-sm">
                    <ul class="list-disc list-inside space-y-1">
                        @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('admin.foto.update', $item->id) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf
                @method('PUT')
                <div>
                    <label for="judul" class="block text-sm font-semibold text-gray-700 mb-1.5">Judul</label>
                    <input type="text" name="judul" id="judul" value="{{ old('judul', $item->judul) }}" required class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition" />
                </div>
                <div>
                    <label for="deskripsi" class="block text-sm font-semibold text-gray-700 mb-1.5">Deskripsi <span class="font-normal text-gray-400">(maks. 100 karakter)</span></label>
                    <textarea name="deskripsi" id="deskripsi" rows="3" maxlength="100" oninput="document.getElementById('charCount').textContent = this.value.length" class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">{{ old('deskripsi', $item->deskripsi) }}</textarea>
                    <p class="text-xs text-gray-400 mt-1"><span id="charCount">{{ strlen(old('deskripsi', $item->deskripsi ?? '')) }}</span>/100 karakter</p>
                </div>
                <div>
                    <label for="gambar" class="block text-sm font-semibold text-gray-700 mb-1.5">Gambar</label>
                    @if ($item->gambar)
                        <img src="{{ Storage::url($item->gambar) }}" alt="Gambar saat ini" class="w-40 h-24 object-cover rounded-lg mb-4" />
                    @endif
                    <input type="file" name="gambar" id="gambar" class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm file:mr-4 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-red-50 file:text-red-800 hover:file:bg-red-100 transition" />
                </div>
                <div class="pt-4">
                    <button type="submit" class="bg-red-800 hover:bg-red-900 text-white font-semibold px-6 py-2.5 rounded-xl text-sm transition">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
