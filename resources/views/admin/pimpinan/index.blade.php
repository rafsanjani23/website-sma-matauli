@extends('admin.layouts.app')
@section('title', 'Kelola Pimpinan')
@section('content')
    <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
            <h2 class="text-lg font-bold text-gray-900">Kelola Pimpinan</h2>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full">
                <thead><tr>
                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider bg-gray-50">#</th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider bg-gray-50">Foto</th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider bg-gray-50">Jabatan</th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider bg-gray-50">Nama</th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider bg-gray-50">Aksi</th>
                </tr></thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse ($items as $item)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">
                                @if ($item->foto)
                                    <img src="{{ Storage::url($item->foto) }}" class="w-16 h-16 object-cover rounded-lg" />
                                @else
                                    <span class="text-gray-400 text-xs">No image</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $item->jabatan }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $item->nama }}</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <a href="{{ route('admin.pimpinan.edit', $item->id) }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium">Edit</a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="99" class="px-6 py-12 text-center text-gray-400 text-sm">Belum ada data.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
