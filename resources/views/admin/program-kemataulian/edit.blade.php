@extends('admin.layouts.app')

@section('title', 'Edit Program Kemataulian')

@section('content')
    <div class="max-w-4xl">
        <div class="mb-6">
            <a href="{{ route('admin.program-kemataulian.index') }}" class="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-red-800 transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>
                Kembali
            </a>
        </div>

        <div class="bg-white rounded-xl border border-gray-200 p-6 md:p-8">
            <h2 class="text-lg font-bold text-gray-900 mb-6">Edit Program Kemataulian</h2>

            @if ($errors->any())
                <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl mb-6 text-sm">
                    <ul class="list-disc list-inside space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.program-kemataulian.update', $item->id) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
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
                            <label class="block text-sm font-semibold text-gray-700 mb-1.5">Ringkasan (ID) <span class="font-normal text-gray-400">(ditampilkan di kartu)</span> <span class="text-red-600">*</span></label>
                            <textarea name="ringkasan[id]" rows="3" required
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">{{ old('ringkasan.id', $item->getTranslation('ringkasan', 'id', false) ?? '') }}</textarea>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1.5">Isi Konten (ID) <span class="font-normal text-gray-400">(ditampilkan di halaman detail)</span> <span class="text-red-600">*</span></label>
                            <textarea name="isi_konten[id]" rows="8" required
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">{{ old('isi_konten.id', $item->getTranslation('isi_konten', 'id', false) ?? '') }}</textarea>
                        </div>
                    </div>
                    <div data-tab-pane="en" class="hidden space-y-5">
                        <p class="text-xs text-gray-500 italic">Field bahasa Inggris opsional, fallback ke ID jika kosong.</p>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1.5">Judul (EN)</label>
                            <input type="text" name="judul[en]" value="{{ old('judul.en', $item->getTranslation('judul', 'en', false) ?? '') }}"
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1.5">Ringkasan (EN)</label>
                            <textarea name="ringkasan[en]" rows="3"
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">{{ old('ringkasan.en', $item->getTranslation('ringkasan', 'en', false) ?? '') }}</textarea>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1.5">Isi Konten (EN)</label>
                            <textarea name="isi_konten[en]" rows="8"
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">{{ old('isi_konten.en', $item->getTranslation('isi_konten', 'en', false) ?? '') }}</textarea>
                        </div>
                    </div>
                </div>

                <div>
                    <label for="gambar" class="block text-sm font-semibold text-gray-700 mb-1.5">Gambar Utama <span class="font-normal text-gray-400">(thumbnail kartu & header detail)</span></label>
                    @if ($item->gambar)
                        <div class="mb-2">
                            <img src="{{ Storage::url($item->gambar) }}" class="w-32 h-20 object-cover rounded-lg" />
                        </div>
                    @endif
                    <input type="file" name="gambar" id="gambar" accept="image/*"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm file:mr-4 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-red-50 file:text-red-800 hover:file:bg-red-100 transition">
                </div>

                <div>
                    <label for="gambar_opsional" class="block text-sm font-semibold text-gray-700 mb-1.5">Gambar Tambahan <span class="font-normal text-gray-400">(opsional, ditampilkan di halaman detail)</span></label>
                    @if ($item->gambar_opsional)
                        <div class="mb-2">
                            <img src="{{ Storage::url($item->gambar_opsional) }}" class="w-32 h-20 object-cover rounded-lg" />
                        </div>
                    @endif
                    <input type="file" name="gambar_opsional" id="gambar_opsional" accept="image/*"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm file:mr-4 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-red-50 file:text-red-800 hover:file:bg-red-100 transition">
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
