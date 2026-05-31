@extends('admin.layouts.app')
@section('title', 'Kelola Foto')
@section('content')
    <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
            <h2 class="text-lg font-bold text-gray-900">Kelola Foto</h2>
            <form action="{{ route('admin.foto.index') }}" method="GET">
                <div class="flex rounded-full border-2 border-red-700 overflow-hidden max-w-md mx-auto">
                    <input type="text" placeholder="Cari..." name="search" value="{{ $search }}"
                        class="w-full outline-none bg-white text-sm px-5 py-2" />
                    <button type='submit' class="flex items-center justify-center bg-red-800 hover:bg-red-700 px-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" width="18px"
                            class="fill-white">
                            <path
                                d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z">
                            </path>
                        </svg>
                    </button>
                </div>
            </form>
            <a href="{{ route('admin.foto.create') }}"
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
                        <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider bg-gray-50">
                            No.</th>
                        <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider bg-gray-50">
                            Gambar</th>
                        <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider bg-gray-50">
                            Judul</th>
                        <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider bg-gray-50">
                            Deskripsi</th>
                        <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider bg-gray-50">
                            Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @php
                        $no = 1 + (($items->currentPage() - 1) * $items->perPage())
                    @endphp
                    @forelse ($items as $item)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $no++ }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">
                                @if ($item->gambar)
                                    <img src="{{ Storage::url($item->gambar) }}" alt="Gambar"
                                        class="w-16 h-10 object-cover rounded">
                                @endif
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $item->judul }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ Str::limit($item->deskripsi, 50) }}</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <a href="{{ route('admin.foto.edit', array_merge(['id' => $item->id], request()->query())) }}"
                                        class="text-blue-600 hover:text-blue-800 text-sm font-medium">Edit</a>
                                    <form action="{{ route('admin.foto.destroy', array_merge(['id' => $item->id], request()->query())) }}" method="POST">
                                        @csrf @method('DELETE')
                                        <button type="submit"
                                            class="text-red-600 hover:text-red-800 text-sm font-medium">Hapus</button>
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
            @include('partials.pagination', ['items' => $items])
        </div>
    </div>
@endsection
