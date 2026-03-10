<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 p-2">
    @forelse ($ptln as $item)
    <div class="border border-gray-300 border-b-2 rounded-md overflow-hidden">
        <div class="w-full aspect-3/2 bg-gray-50">
            @if ($item->foto)
                <img src="{{ Storage::url($item->foto) }}" class="w-full h-full object-fill" alt="{{ $item->nama_alumni }}" />
            @else
                <div class="w-full h-full flex items-center justify-center bg-gray-100">
                    <svg class="w-16 h-16 text-gray-300" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                </div>
            @endif
        </div>
        <div class="p-4">
            <h4 class="text-slate-900 text-base font-semibold">{{ $item->nama_alumni }}</h4>
            <div class="mt-4">
                <p class="text-slate-600 text-sm leading-relaxed">{{ $item->nama_lembaga }}</p>
            </div>
        </div>
    </div>
    @empty
    <div class="col-span-full text-center py-8 text-gray-400">Belum ada data.</div>
    @endforelse
</div>
