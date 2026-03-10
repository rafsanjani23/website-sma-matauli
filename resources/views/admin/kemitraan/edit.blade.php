@extends('admin.layouts.app')
@section('title', 'Edit Kemitraan')
@section('content')
    <div class="max-w-4xl">
        <div class="mb-6">
            <a href="{{ route('admin.kemitraan.index') }}" class="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-red-800 transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" /></svg>
                Kembali
            </a>
        </div>
        <div class="bg-white rounded-xl border border-gray-200 p-6 md:p-8">
            <h2 class="text-lg font-bold text-gray-900 mb-6">Edit Kemitraan</h2>
            @if ($errors->any())
                <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl mb-6 text-sm">
                    <ul class="list-disc list-inside space-y-1">
                        @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('admin.kemitraan.update', $item->id) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf
                @method('PUT')
                <div>
                    <label for="nama_mitra" class="block text-sm font-semibold text-gray-700 mb-1.5">Nama Mitra</label>
                    <input type="text" name="nama_mitra" id="nama_mitra" value="{{ old('nama_mitra', $item->nama_mitra) }}" required class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition" />
                </div>
                <div>
                    <label for="penjelasan_singkat" class="block text-sm font-semibold text-gray-700 mb-1.5">Penjelasan Singkat</label>
                    <textarea name="penjelasan_singkat" id="penjelasan_singkat" rows="4" class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">{{ old('penjelasan_singkat', $item->penjelasan_singkat) }}</textarea>
                </div>
                <div>
                    <label for="gambar_mitra" class="block text-sm font-semibold text-gray-700 mb-1.5">Gambar Mitra</label>
                    @if ($item->gambar_mitra)
                        <div class="mb-2">
                            <img src="{{ Storage::url($item->gambar_mitra) }}" class="w-32 h-20 object-cover rounded-lg" />
                        </div>
                    @endif
                    <input type="file" name="gambar_mitra" id="gambar_mitra" class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm file:mr-4 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-red-50 file:text-red-800 hover:file:bg-red-100 transition" />
                </div>
                <div>
                    <label for="gambar_kegiatan" class="block text-sm font-semibold text-gray-700 mb-1.5">Gambar Kegiatan</label>
                    @if ($item->gambar_kegiatan)
                        <div class="mb-2">
                            <img src="{{ Storage::url($item->gambar_kegiatan) }}" class="w-32 h-20 object-cover rounded-lg" />
                        </div>
                    @endif
                    <input type="file" name="gambar_kegiatan" id="gambar_kegiatan" class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm file:mr-4 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-red-50 file:text-red-800 hover:file:bg-red-100 transition" />
                </div>
                <div>
                    <label for="ringkasan_kegiatan" class="block text-sm font-semibold text-gray-700 mb-1.5">Ringkasan Kegiatan</label>
                    <textarea name="ringkasan_kegiatan" id="ringkasan_kegiatan" rows="4" class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">{{ old('ringkasan_kegiatan', $item->ringkasan_kegiatan) }}</textarea>
                </div>
                <div class="pt-4">
                    <button type="submit" class="bg-red-800 hover:bg-red-900 text-white font-semibold px-6 py-2.5 rounded-xl text-sm transition">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
