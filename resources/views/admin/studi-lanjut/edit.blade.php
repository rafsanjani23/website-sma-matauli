@extends('admin.layouts.app')
@section('title', 'Edit Studi Lanjut')
@section('content')
    <div class="max-w-4xl">
        <div class="mb-6">
            <a href="{{ route('admin.studi-lanjut.index') }}" class="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-red-800 transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" /></svg>
                Kembali
            </a>
        </div>
        <div class="bg-white rounded-xl border border-gray-200 p-6 md:p-8">
            <h2 class="text-lg font-bold text-gray-900 mb-6">Edit Studi Lanjut</h2>
            @if ($errors->any())
                <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl mb-6 text-sm">
                    <ul class="list-disc list-inside space-y-1">
                        @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('admin.studi-lanjut.update', $item->id) }}" method="POST" class="space-y-5">
                @csrf
                @method('PUT')
                <div>
                    <label for="nama_alumni" class="block text-sm font-semibold text-gray-700 mb-1.5">Nama Alumni</label>
                    <input type="text" name="nama_alumni" id="nama_alumni" value="{{ old('nama_alumni', $item->nama_alumni) }}" required class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition" />
                </div>
                <div data-lang-tabs>
                    <div class="flex gap-1 border-b border-gray-200 mb-4">
                        <button type="button" data-tab-btn="id" class="lang-tab-btn px-4 py-2 text-sm font-semibold border-b-2 border-red-800 text-red-800 transition">Indonesia</button>
                        <button type="button" data-tab-btn="en" class="lang-tab-btn px-4 py-2 text-sm font-semibold border-b-2 border-transparent text-gray-500 hover:text-gray-700 transition">English</button>
                    </div>
                    <div data-tab-pane="id">
                        <label class="block text-sm font-semibold text-gray-700 mb-1.5">Nama Lembaga (ID) <span class="text-red-600">*</span></label>
                        <input type="text" name="nama_lembaga[id]" value="{{ old('nama_lembaga.id', $item->getTranslation('nama_lembaga', 'id', false) ?? '') }}" required class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition" />
                    </div>
                    <div data-tab-pane="en" class="hidden">
                        <p class="text-xs text-gray-500 italic mb-1.5">Field bahasa Inggris opsional, fallback ke ID jika kosong.</p>
                        <label class="block text-sm font-semibold text-gray-700 mb-1.5">Nama Lembaga (EN)</label>
                        <input type="text" name="nama_lembaga[en]" value="{{ old('nama_lembaga.en', $item->getTranslation('nama_lembaga', 'en', false) ?? '') }}" class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition" />
                    </div>
                </div>
                <div>
                    <label for="kategori" class="block text-sm font-semibold text-gray-700 mb-1.5">Kategori</label>
                    <select name="kategori" id="kategori" required class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">
                        <option value="">Pilih Kategori</option>
                        <option value="PTN" {{ old('kategori', $item->kategori) == 'PTN' ? 'selected' : '' }}>PTN</option>
                        <option value="PTS" {{ old('kategori', $item->kategori) == 'PTS' ? 'selected' : '' }}>PTS</option>
                        <option value="PTLN" {{ old('kategori', $item->kategori) == 'PTLN' ? 'selected' : '' }}>PTLN</option>
                        <option value="TNI-Polri" {{ old('kategori', $item->kategori) == 'TNI-Polri' ? 'selected' : '' }}>TNI-Polri</option>
                        <option value="Kedinasan" {{ old('kategori', $item->kategori) == 'Kedinasan' ? 'selected' : '' }}>Kedinasan</option>
                    </select>
                </div>
                <div>
                    <label for="angkatan" class="block text-sm font-semibold text-gray-700 mb-1.5">Angkatan</label>
                    <input type="text" name="angkatan" id="angkatan" value="{{ old('angkatan', $item->angkatan) }}" required placeholder="Contoh: 2024" class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition" />
                </div>
                <div class="pt-4">
                    <button type="submit" class="bg-red-800 hover:bg-red-900 text-white font-semibold px-6 py-2.5 rounded-xl text-sm transition">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    @include('admin.partials.lang-tabs-script')
@endsection
