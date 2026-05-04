<section class="bg-white mb-16">
    <div class="mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 mb-2 px-10 items-stretch">
            @forelse ($items as $item)
                <div
                    class="bg-white rounded-3xl overflow-hidden [box-shadow:0_2px_10px_-3px_rgba(6,81,237,0.3)] flex flex-col h-full group transition-shadow hover:shadow-lg">
                    <div class="w-full aspect-119/128 bg-gray-100">
                        <img src="{{ Storage::url($item->gambar) }}" alt="{{ $item->nama }}"
                            class="w-full h-full object-cover" />
                    </div>
                    <div class="p-4 bg-matauli-red-dark flex-1 flex items-center justify-center">
                        <h3 class="text-base sm:text-lg text-center font-semibold text-white leading-snug break-words">
                            {{ $item->nama }}
                        </h3>
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
