@extends('admin.layouts.app')

@section('title', 'Tambah Media')

@section('content')
    <div class="max-w-4xl">
        <div class="mb-6">
            <a href="{{ route('admin.media.index') }}" class="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-red-800 transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>
                Kembali
            </a>
        </div>

        <div class="bg-white rounded-xl border border-gray-200 p-6 md:p-8">
            <h2 class="text-lg font-bold text-gray-900 mb-6">Tambah Media</h2>

            @if ($errors->any())
                <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl mb-6 text-sm">
                    <ul class="list-disc list-inside space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.media.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf

                <div>
                    <label for="judul" class="block text-sm font-semibold text-gray-700 mb-1.5">Judul</label>
                    <input type="text" name="judul" id="judul" value="{{ old('judul') }}" required
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">
                </div>

                <div>
                    <label for="ringkasan" class="block text-sm font-semibold text-gray-700 mb-1.5">Ringkasan</label>
                    <textarea name="ringkasan" id="ringkasan" rows="4"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">{{ old('ringkasan') }}</textarea>
                </div>

                <div>
                    <label for="isi" class="block text-sm font-semibold text-gray-700 mb-1.5">Isi</label>
                    <textarea name="isi" id="isi" rows="6"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">{{ old('isi') }}</textarea>
                </div>

                <div>
                    <label for="gambar" class="block text-sm font-semibold text-gray-700 mb-1.5">Gambar</label>
                    <input type="file" name="gambar" id="gambar" accept="image/*" required
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm file:mr-4 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-red-50 file:text-red-800 hover:file:bg-red-100 transition">
                </div>

                <div>
                    <label for="link_facebook" class="block text-sm font-semibold text-gray-700 mb-1.5">Link Facebook</label>
                    <input type="text" name="link_facebook" id="link_facebook" value="{{ old('link_facebook') }}"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">
                </div>

                <div>
                    <label for="tanggal" class="block text-sm font-semibold text-gray-700 mb-1.5">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal" value="{{ old('tanggal') }}"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">
                </div>

                <div class="pt-4">
                    <button type="submit" class="bg-red-800 hover:bg-red-900 text-white font-semibold px-6 py-2.5 rounded-xl text-sm transition">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
