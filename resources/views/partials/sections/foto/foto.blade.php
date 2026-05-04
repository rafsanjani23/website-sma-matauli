<!-- ============================================ -->
<!-- GALERI FOTO CONTENT - START -->
<!-- ============================================ -->
<section class="bg-white mb-16">
    <div class="mx-auto max-w-7xl px-4">
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 mb-2 items-stretch">

            @forelse ($items as $item)
                <div
                    class="bg-white border border-gray-200 shadow-sm rounded-2xl overflow-hidden flex flex-col h-full group transition-shadow hover:shadow-md">
                    <div class="aspect-video bg-gray-100">
                        <img src="{{ Storage::url($item->gambar) }}" alt="{{ $item->judul }}"
                            class="w-full h-full object-cover" />
                    </div>
                    <div class="px-3 py-2.5 bg-matauli-red-dark flex-1 flex flex-col items-center justify-center">
                        <h3 class="text-xs sm:text-sm text-center font-semibold text-white leading-snug break-words line-clamp-2">
                            {{ $item->judul }}
                        </h3>
                        @if ($item->deskripsi)
                            <div
                                class="w-full max-h-0 overflow-hidden group-hover:max-h-32 group-hover:mt-2 transition-all duration-300">
                                <p class="text-gray-200 text-[11px] leading-relaxed text-center line-clamp-4">
                                    {{ $item->deskripsi }}
                                </p>
                            </div>
                        @endif
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-12 text-gray-400">{{ __('Belum ada foto.') }}</div>
            @endforelse

        </div>
    </div>
</section>
<!-- ============================================ -->
<!-- GALERI FOTO CONTENT - END -->
<!-- ============================================ -->
