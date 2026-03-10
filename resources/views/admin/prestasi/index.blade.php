@extends('admin.layouts.app')

@section('title', 'Kelola Prestasi')

@section('content')
    <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
            <h2 class="text-lg font-bold text-gray-900">Kelola Prestasi</h2>
            <a href="{{ route('admin.prestasi.create') }}"
                class="inline-flex items-center gap-2 bg-red-800 hover:bg-red-900 text-white font-semibold px-4 py-2 rounded-lg text-sm transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                Tambah Data
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider bg-gray-50">#</th>
                        <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider bg-gray-50">Gambar</th>
                        <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider bg-gray-50">Judul</th>
                        <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider bg-gray-50">Nama Lomba</th>
                        <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider bg-gray-50">Tingkatan</th>
                        <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider bg-gray-50">Tanggal</th>
                        <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider bg-gray-50">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse ($items as $item)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4">
                                @if ($item->gambar)
                                    <img src="{{ Storage::url($item->gambar) }}" class="w-16 h-10 object-cover rounded" />
                                @else
                                    <span class="text-gray-300 text-xs">No image</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $item->judul }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $item->nama_lomba }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $item->tingkatan }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $item->tanggal }}</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <a href="{{ route('admin.prestasi.edit', $item->id) }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium">Edit</a>
                                    <form action="{{ route('admin.prestasi.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800 text-sm font-medium">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="99" class="px-6 py-12 text-center text-gray-400 text-sm">Belum ada data.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
