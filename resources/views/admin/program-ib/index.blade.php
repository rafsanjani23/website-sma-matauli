@extends('admin.layouts.app')

@section('title', 'Kelola Program IB')

@section('content')
    <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200">
            <h2 class="text-lg font-bold text-gray-900">Kelola Program IB</h2>
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
                                <a href="{{ route('admin.program-ib.edit', array_merge(['id' => $item->id], request()->query())) }}"
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
            @include('partials.pagination', ['items' => $items])
        </div>
    </div>
@endsection
