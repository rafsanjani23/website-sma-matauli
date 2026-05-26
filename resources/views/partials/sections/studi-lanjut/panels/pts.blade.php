<div class="max-w-4xl mx-auto">
    <div class="bg-white rounded-xl border border-gray-200 overflow-x-auto">
        <table class="min-w-full">
            <thead>
                <tr class="bg-gray-50">
                    <th
                        class="px-3 sm:px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider whitespace-nowrap">
                        No.</th>
                    <th
                        class="px-3 sm:px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider whitespace-nowrap">
                        {{ __('Nama Alumni') }}</th>
                    <th
                        class="px-3 sm:px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider whitespace-nowrap">
                        {{ __('Lembaga') }}</th>
                    <th
                        class="px-3 sm:px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider whitespace-nowrap">
                        {{ __('Angkatan') }}</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @php $no = 1 + (($pts->currentPage() - 1) * $pts->perPage()) @endphp
                @forelse ($pts as $item)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-3 sm:px-6 py-4 text-sm text-gray-500">{{ $no++ }}</td>
                        <td class="px-3 sm:px-6 py-4 text-sm font-semibold text-slate-900">{{ $item->nama_alumni }}</td>
                        <td class="px-3 sm:px-6 py-4 text-sm text-slate-600">{{ $item->nama_lembaga }}</td>
                        <td class="px-3 sm:px-6 py-4 text-sm text-slate-600 text-center">{{ $item->angkatan }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-3 sm:px-6 py-12 text-center text-gray-400 text-sm">
                            {{ __('Belum ada data.') }}</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @include('partials.pagination',['items' => $pts])
    <!-- @if ($pts->lastPage() > 1)
        <ul class="flex space-x-2 justify-center mt-6">
            <li>
                <a href="{{ $pts->previousPageUrl() ?? '#' }}"
                    class="flex items-center justify-center shrink-0 bg-gray-100 w-9 h-9 rounded-md {{ $pts->onFirstPage() ? 'opacity-50 pointer-events-none' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-gray-400" viewBox="0 0 55.753 55.753">
                        <path
                            d="M12.745 23.915c.283-.282.59-.52.913-.727L35.266 1.581a5.4 5.4 0 0 1 7.637 7.638L24.294 27.828l18.705 18.706a5.4 5.4 0 0 1-7.636 7.637L13.658 32.464a5.367 5.367 0 0 1-.913-.727 5.367 5.367 0 0 1-1.572-3.911 5.369 5.369 0 0 1 1.572-3.911z" />
                    </svg>
                </a>
            </li>
            @for ($i = 1; $i <= $pts->lastPage(); $i++)
                <li>
                    <a href="{{ $pts->url($i) }}"
                        class="flex items-center justify-center shrink-0 border {{ $pts->currentPage() == $i ? 'bg-red-800 text-white border-red-800' : 'border-gray-200 hover:border-red-600 text-gray-900' }} cursor-pointer text-base font-medium px-3.25 h-9 rounded-md">
                        {{ $i }}
                    </a>
                </li>
            @endfor
            <li>
                <a href="{{ $pts->nextPageUrl() ?? '#' }}"
                    class="flex items-center justify-center shrink-0 border border-gray-200 hover:border-red-600 w-9 h-9 rounded-md {{ !$pts->hasMorePages() ? 'opacity-50 pointer-events-none' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-gray-400 rotate-180"
                        viewBox="0 0 55.753 55.753">
                        <path
                            d="M12.745 23.915c.283-.282.59-.52.913-.727L35.266 1.581a5.4 5.4 0 0 1 7.637 7.638L24.294 27.828l18.705 18.706a5.4 5.4 0 0 1-7.636 7.637L13.658 32.464a5.367 5.367 0 0 1-.913-.727 5.367 5.367 0 0 1-1.572-3.911 5.369 5.369 0 0 1 1.572-3.911z" />
                    </svg>
                </a>
            </li>
        </ul>
    @endif -->
</div>
