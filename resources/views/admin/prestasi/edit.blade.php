@extends('admin.layouts.app')

@section('title', 'Edit Prestasi')

@section('content')
    <div class="max-w-4xl">
        <div class="mb-6">
            <a href="{{ route('admin.prestasi.index') }}" class="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-red-800 transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>
                Kembali
            </a>
        </div>

        <div class="bg-white rounded-xl border border-gray-200 p-6 md:p-8">
            <h2 class="text-lg font-bold text-gray-900 mb-6">Edit Prestasi</h2>

            @if ($errors->any())
                <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl mb-6 text-sm">
                    <ul class="list-disc list-inside space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.prestasi.update', $item->id) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf
                @method('PUT')

                <div data-lang-tabs>
                    <div class="flex gap-1 border-b border-gray-200 mb-4">
                        <button type="button" data-tab-btn="id" class="lang-tab-btn px-4 py-2 text-sm font-semibold border-b-2 border-red-800 text-red-800 transition">Indonesia</button>
                        <button type="button" data-tab-btn="en" class="lang-tab-btn px-4 py-2 text-sm font-semibold border-b-2 border-transparent text-gray-500 hover:text-gray-700 transition">English</button>
                    </div>

                    <div data-tab-pane="id" class="space-y-5">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1.5">Judul (ID) <span class="text-red-600">*</span></label>
                            <input type="text" name="judul[id]" value="{{ old('judul.id', $item->getTranslation('judul', 'id', false) ?? '') }}" required
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1.5">Nama Lomba (ID) <span class="text-red-600">*</span></label>
                            <input type="text" name="nama_lomba[id]" value="{{ old('nama_lomba.id', $item->getTranslation('nama_lomba', 'id', false) ?? '') }}" required
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1.5">Tingkatan (ID) <span class="text-red-600">*</span></label>
                            <input type="text" name="tingkatan[id]" value="{{ old('tingkatan.id', $item->getTranslation('tingkatan', 'id', false) ?? '') }}" required
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1.5">Isi (ID) <span class="text-red-600">*</span></label>
                            <textarea name="isi[id]" data-rich-editor rows="6" required
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">{{ old('isi.id', $item->getTranslation('isi', 'id', false) ?? '') }}</textarea>
                        </div>
                    </div>

                    <div data-tab-pane="en" class="space-y-5 hidden">
                        <p class="text-xs text-gray-500 italic">Field bahasa Inggris bersifat opsional. Jika kosong, akan otomatis fallback ke versi Indonesia.</p>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1.5">Judul (EN)</label>
                            <input type="text" name="judul[en]" value="{{ old('judul.en', $item->getTranslation('judul', 'en', false) ?? '') }}"
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1.5">Nama Lomba (EN)</label>
                            <input type="text" name="nama_lomba[en]" value="{{ old('nama_lomba.en', $item->getTranslation('nama_lomba', 'en', false) ?? '') }}"
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1.5">Tingkatan (EN)</label>
                            <input type="text" name="tingkatan[en]" value="{{ old('tingkatan.en', $item->getTranslation('tingkatan', 'en', false) ?? '') }}"
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1.5">Isi (EN)</label>
                            <textarea name="isi[en]" data-rich-editor rows="6"
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">{{ old('isi.en', $item->getTranslation('isi', 'en', false) ?? '') }}</textarea>
                        </div>
                    </div>
                </div>

                <div>
                    <label for="gambar" class="block text-sm font-semibold text-gray-700 mb-1.5">Gambar</label>
                    @if ($item->gambar)
                        <div class="mb-2">
                            <img src="{{ Storage::url($item->gambar) }}" class="w-32 h-20 object-cover rounded-lg" />
                        </div>
                    @endif
                    <input type="file" name="gambar" id="gambar" accept="image/*"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm file:mr-4 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-red-50 file:text-red-800 hover:file:bg-red-100 transition">
                </div>

                <div>
                    <label for="tanggal" class="block text-sm font-semibold text-gray-700 mb-1.5">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal" value="{{ old('tanggal', $item->tanggal) }}"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">
                </div>

                <div>
                    <label for="kategori" class="block text-sm font-semibold text-gray-700 mb-1.5">Kategori</label>
                    <select name="kategori" id="kategori" required
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">
                        <option value="">Pilih Kategori</option>
                        <option value="Prestasi Sekolah" {{ old('kategori', $item->kategori) == 'Prestasi Sekolah' ? 'selected' : '' }}>Prestasi Sekolah</option>
                        <option value="Prestasi Siswa" {{ old('kategori', $item->kategori) == 'Prestasi Siswa' ? 'selected' : '' }}>Prestasi Siswa</option>
                        <option value="Prestasi Guru" {{ old('kategori', $item->kategori) == 'Prestasi Guru' ? 'selected' : '' }}>Prestasi Guru</option>
                    </select>
                </div>

                <div class="pt-4">
                    <button type="submit" class="bg-red-800 hover:bg-red-900 text-white font-semibold px-6 py-2.5 rounded-xl text-sm transition">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>

    @include('admin.partials.lang-tabs-script')
@endsection
