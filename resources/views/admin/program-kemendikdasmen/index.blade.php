@extends('admin.layouts.app')

@section('title', 'Kelola Program Kemendikdasmen')

@section('content')
    <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200">
            <h2 class="text-lg font-bold text-gray-900">Kelola Program Kemendikdasmen</h2>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider bg-gray-50">No.</th>
                        <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider bg-gray-50">Gambar</th>
                        <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider bg-gray-50">Judul</th>
                        <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider bg-gray-50">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @php $no = 1 + (($items->currentPage() - 1) * $items->perPage()) @endphp
                    @forelse ($items as $item)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $no++ }}</td>
                            <td class="px-6 py-4">
                                @if ($item->gambar)
                                    <img src="{{ Storage::url($item->gambar) }}" class="w-16 h-10 object-cover rounded" />
                                @else
                                    <span class="text-gray-300 text-xs">No image</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $item->judul }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('admin.program-kemendikdasmen.edit', array_merge(['id' => $item->id], request()->query())) }}"
                                    class="text-blue-600 hover:text-blue-800 text-sm font-medium">Edit</a>
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
                    <li>
                        <a href="{{ $items->previousPageUrl() ?? '#' }}"
                            class="flex items-center justify-center shrink-0 bg-gray-100 w-9 h-9 rounded-md {{ $items->onFirstPage() ? 'opacity-50 pointer-events-none' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-gray-400" viewBox="0 0 55.753 55.753">
                                <path d="M12.745 23.915c.283-.282.59-.52.913-.727L35.266 1.581a5.4 5.4 0 0 1 7.637 7.638L24.294 27.828l18.705 18.706a5.4 5.4 0 0 1-7.636 7.637L13.658 32.464a5.367 5.367 0 0 1-.913-.727 5.367 5.367 0 0 1-1.572-3.911 5.369 5.369 0 0 1 1.572-3.911z" />
                            </svg>
                        </a>
                    </li>
                    @for ($i = 1; $i <= $items->lastPage(); $i++)
                        <li>
                            <a href="{{ $items->url($i) }}" class="flex items-center justify-center shrink-0 border
                                {{ $items->currentPage() == $i ? 'bg-red-800 text-white border-red-800' : 'border-gray-200 hover:border-red-600 text-gray-900' }}
                                cursor-pointer text-base font-medium px-[13px] h-9 rounded-md">{{ $i }}</a>
                        </li>
                    @endfor
                    <li>
                        <a href="{{ $items->nextPageUrl() ?? '#' }}"
                            class="flex items-center justify-center shrink-0 border border-gray-200 hover:border-red-600 w-9 h-9 rounded-md {{ !$items->hasMorePages() ? 'opacity-50 pointer-events-none' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-gray-400 rotate-180" viewBox="0 0 55.753 55.753">
                                <path d="M12.745 23.915c.283-.282.59-.52.913-.727L35.266 1.581a5.4 5.4 0 0 1 7.637 7.638L24.294 27.828l18.705 18.706a5.4 5.4 0 0 1-7.636 7.637L13.658 32.464a5.367 5.367 0 0 1-.913-.727 5.367 5.367 0 0 1-1.572-3.911 5.369 5.369 0 0 1 1.572-3.911z" />
                            </svg>
                        </a>
                    </li>
                </ul>
            @endif
        </div>
    </div>
@endsection
