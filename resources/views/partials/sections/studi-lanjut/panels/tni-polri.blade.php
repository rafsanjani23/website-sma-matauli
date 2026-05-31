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
                @php $no = 1 + (($tniPolri->currentPage() - 1) * $tniPolri->perPage()) @endphp
                @forelse ($tniPolri as $item)
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

    @include('partials.pagination', ['items' => $tniPolri])
</div>
