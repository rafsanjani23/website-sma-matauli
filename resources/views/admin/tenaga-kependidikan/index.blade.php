@extends('admin.layouts.app')
@section('title', 'Kelola Tenaga Kependidikan')
@section('content')
    <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
            <h2 class="text-lg font-bold text-gray-900">Kelola Tenaga Kependidikan</h2>
            <form action="{{ route('admin.tenaga-kependidikan.index') }}" method="GET">
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
            <a href="{{ route('admin.tenaga-kependidikan.create') }}"
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
                            Foto</th>
                        <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider bg-gray-50">
                            Nama</th>
                        <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider bg-gray-50">
                            Jabatan</th>
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
                                @if ($item->foto)
                                    <img src="{{ Storage::url($item->foto) }}" class="w-16 h-16 object-cover rounded-lg" />
                                @else
                                    <span class="text-gray-400 text-xs">No image</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $item->nama }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $item->jabatan }}</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <a href="{{ route('admin.tenaga-kependidikan.edit', $item->id) }}"
                                        class="text-blue-600 hover:text-blue-800 text-sm font-medium">Edit</a>
                                    <form action="{{ route('admin.tenaga-kependidikan.destroy', $item->id) }}" method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus?')">
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
            @if ($items->lastPage() > 1)
                <ul class="flex space-x-2 justify-center mt-8 mb-3">

                    {{-- Previous --}}
                    <li>
                        <a href="{{ $items->previousPageUrl() ?? '#' }}"
                            class="flex items-center justify-center shrink-0 bg-gray-100 hover:border-red-600 w-9 h-9 rounded-md {{ $items->onFirstPage() ? 'opacity-50 pointer-events-none' : '' }}">

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-gray-400" viewBox="0 0 55.753 55.753">
                                <path
                                    d="M12.745 23.915c.283-.282.59-.52.913-.727L35.266 1.581a5.4 5.4 0 0 1 7.637 7.638L24.294 27.828l18.705 18.706a5.4 5.4 0 0 1-7.636 7.637L13.658 32.464a5.367 5.367 0 0 1-.913-.727 5.367 5.367 0 0 1-1.572-3.911 5.369 5.369 0 0 1 1.572-3.911z" />
                            </svg>

                        </a>
                    </li>

                    {{-- Number --}}
                    @for ($i = 1; $i <= $items->lastPage(); $i++)
                        <li>
                            <a href="{{ $items->url($i) }}" class="flex items-center justify-center shrink-0 border
                                                   {{ $items->currentPage() == $i ? 'bg-red-800 text-white border-red-800' : 'border-gray-200 hover:border-red-600 text-gray-900' }}
                                                   cursor-pointer text-base font-medium px-[13px] h-9 rounded-md">

                                {{ $i }}

                            </a>
                        </li>
                    @endfor

                    {{-- Next --}}
                    <li>
                        <a href="{{ $items->nextPageUrl() ?? '#' }}"
                            class="flex items-center justify-center shrink-0 border border-gray-200 hover:border-red-600 w-9 h-9 rounded-md {{ !$items->hasMorePages() ? 'opacity-50 pointer-events-none' : '' }}">

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-gray-400 rotate-180"
                                viewBox="0 0 55.753 55.753">
                                <path
                                    d="M12.745 23.915c.283-.282.59-.52.913-.727L35.266 1.581a5.4 5.4 0 0 1 7.637 7.638L24.294 27.828l18.705 18.706a5.4 5.4 0 0 1-7.636 7.637L13.658 32.464a5.367 5.367 0 0 1-.913-.727 5.367 5.367 0 0 1-1.572-3.911 5.369 5.369 0 0 1 1.572-3.911z" />
                            </svg>

                        </a>
                    </li>

                </ul>
            @endif
        </div>
    </div>
@endsection
