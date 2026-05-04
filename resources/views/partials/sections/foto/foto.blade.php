<!-- ============================================ -->
<!-- GALERI FOTO CONTENT - START -->
<!-- ============================================ -->
<section class="bg-white mb-16">
    <div class="mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-2 px-10 items-stretch">

            @forelse ($items as $item)
                <div
                    class="bg-white border border-gray-200 shadow-md rounded-4xl overflow-hidden flex flex-col h-full group transition-shadow hover:shadow-lg">
                    <div class="aspect-3/2 bg-gray-100">
                        <img src="{{ Storage::url($item->gambar) }}" alt="{{ $item->judul }}"
                            class="w-full h-full object-cover" />
                    </div>
                    <div class="p-4 bg-matauli-red-dark flex-1 flex flex-col items-center justify-center">
                        <h3 class="text-lg text-center font-semibold text-white leading-snug break-words">
                            {{ $item->judul }}
                        </h3>
                        @if ($item->deskripsi)
                            <div
                                class="w-full max-h-0 overflow-hidden group-hover:max-h-40 group-hover:mt-3 transition-all duration-300">
                                <p class="text-gray-200 text-[13px] leading-relaxed text-center">
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
