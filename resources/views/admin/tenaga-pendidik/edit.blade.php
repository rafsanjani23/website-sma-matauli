@extends('admin.layouts.app')
@section('title', 'Edit Tenaga Pendidik')
@section('content')
    <div class="max-w-4xl">
        <div class="mb-6">
            <a href="{{ route('admin.tenaga-pendidik.index') }}" class="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-red-800 transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" /></svg>
                Kembali
            </a>
        </div>
        <div class="bg-white rounded-xl border border-gray-200 p-6 md:p-8">
            <h2 class="text-lg font-bold text-gray-900 mb-6">Edit Tenaga Pendidik</h2>
            @if ($errors->any())
                <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl mb-6 text-sm">
                    <ul class="list-disc list-inside space-y-1">
                        @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('admin.tenaga-pendidik.update', $item->id) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf
                @method('PUT')
                <div>
                    <label for="nama" class="block text-sm font-semibold text-gray-700 mb-1.5">Nama</label>
                    <input type="text" name="nama" id="nama" value="{{ old('nama', $item->nama) }}" required class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition" />
                </div>
                <div>
                    <label for="mata_pelajaran" class="block text-sm font-semibold text-gray-700 mb-1.5">Mata Pelajaran</label>
                    <input type="text" name="mata_pelajaran" id="mata_pelajaran" value="{{ old('mata_pelajaran', $item->mata_pelajaran) }}" required class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition" />
                </div>
                <div>
                    <label for="foto" class="block text-sm font-semibold text-gray-700 mb-1.5">Foto</label>
                    @if ($item->foto)
                        <div class="mb-2">
                            <img src="{{ Storage::url($item->foto) }}" class="w-32 h-20 object-cover rounded-lg" />
                        </div>
                    @endif
                    <input type="file" name="foto" id="foto" class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm file:mr-4 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-red-50 file:text-red-800 hover:file:bg-red-100 transition" />
                </div>
                <div>
                    <label for="kategori" class="block text-sm font-semibold text-gray-700 mb-1.5">Kategori</label>
                    <select name="kategori" id="kategori" required class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent transition">
                        <option value="">Pilih Kategori</option>
                        <option value="Guru Mata Pelajaran" {{ old('kategori', $item->kategori) == 'Guru Mata Pelajaran' ? 'selected' : '' }}>Guru Mata Pelajaran</option>
                        <option value="IB" {{ old('kategori', $item->kategori) == 'IB' ? 'selected' : '' }}>IB</option>
                    </select>
                </div>
                <div class="pt-4">
                    <button type="submit" class="bg-red-800 hover:bg-red-900 text-white font-semibold px-6 py-2.5 rounded-xl text-sm transition">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
