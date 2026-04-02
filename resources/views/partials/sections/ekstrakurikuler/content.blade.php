<section class="bg-white mb-16">
    <div class="mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 mb-2 px-10">
            @forelse ($items as $item)
                <div
                    class="bg-white rounded-3xl overflow-hidden [box-shadow:0_2px_10px_-3px_rgba(6,81,237,0.3)] relative group">
                    <div class="w-full aspect-119/128">
                        <img src="{{ Storage::url($item->gambar) }}" alt="{{ $item->nama }}"
                            class="w-full h-full object-cover" />
                    </div>
                    <div class="p-6 absolute bottom-0 left-0 right-0 bg-matauli-red-dark rounded-2xl opacity-90">
                        <h3 class="text-xl text-center font-semibold text-white line-clamp-1">{{ $item->nama }}</h3>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-12 text-gray-400">
                    {{ __('Belum ada data ekstrakurikuler.') }}
                </div>
            @endforelse
        </div>
    </div>
</section>
