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
            <form action="{{ route('admin.studi-lanjut.update', $item->id) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf
                @method('PUT')
                <div>
                    <label for="nama_alumni" class="block text-sm font-semibold text-gray-700 mb-1.5">Nama Alumni</label>
                    <input type="text" name="nama_alumni" id="nama_alumni" value="{{ old('nama_alumni', $item->nama_alumni) }}" required class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition" />
                </div>
                <div>
                    <label for="nama_lembaga" class="block text-sm font-semibold text-gray-700 mb-1.5">Nama Lembaga</label>
                    <input type="text" name="nama_lembaga" id="nama_lembaga" value="{{ old('nama_lembaga', $item->nama_lembaga) }}" required class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition" />
                </div>
                <div>
                    <label for="foto" class="block text-sm font-semibold text-gray-700 mb-1.5">Foto</label>
                    @if ($item->foto)
                        <img src="{{ Storage::url($item->foto) }}" alt="Foto saat ini" class="w-40 h-24 object-cover rounded-lg mb-4" />
                    @endif
                    <input type="file" name="foto" id="foto" class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm file:mr-4 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-red-50 file:text-red-800 hover:file:bg-red-100 transition" />
                </div>
                <div>
                    <label for="kategori" class="block text-sm font-semibold text-gray-700 mb-1.5">Kategori</label>
                    <select name="kategori" id="kategori" required class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">
                        <option value="">Pilih Kategori</option>
                        <option value="PTN" {{ old('kategori', $item->kategori) == 'PTN' ? 'selected' : '' }}>PTN</option>
                        <option value="PTLN" {{ old('kategori', $item->kategori) == 'PTLN' ? 'selected' : '' }}>PTLN</option>
                        <option value="TNI-Polri" {{ old('kategori', $item->kategori) == 'TNI-Polri' ? 'selected' : '' }}>TNI-Polri</option>
                        <option value="Kedinasan" {{ old('kategori', $item->kategori) == 'Kedinasan' ? 'selected' : '' }}>Kedinasan</option>
                    </select>
                </div>
                <div class="pt-4">
                    <button type="submit" class="bg-red-800 hover:bg-red-900 text-white font-semibold px-6 py-2.5 rounded-xl text-sm transition">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
