<section class="pb-12 md:pb-16 lg:pb-20 bg-white">
{{-- ===================== --}}
            {{-- PROGRAM GRID --}}
            {{-- 1 kolom (mobile) → 2 kolom (tablet) → 3 kolom (desktop) --}}
            {{-- ===================== --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10 max-w-6xl mx-auto items-stretch">

                @forelse ($items as $item)
                <div
                    class="relative bg-white rounded-2xl shadow-md overflow-hidden border border-gray-100 hover:-translate-y-2 hover:shadow-2xl hover:shadow-red-900/10 hover:border-red-100 transition-all duration-500 h-full flex flex-col">

                    {{-- IMAGE CONTAINER --}}
                    <div class="relative h-52 md:h-60 overflow-hidden">
                        <img src="{{ Storage::url($item->gambar) }}" alt="{{ $item->judul }}"
                            class="w-full h-full object-cover object-center">
                        <div class="absolute inset-0 bg-linear-to-t from-black/30 to-transparent"></div>
                    </div>

                    {{-- CARD CONTENT --}}
                    <div class="p-6 md:p-8 flex flex-col flex-1">
                        <h3
                            class="text-xl md:text-2xl font-bold text-gray-900 mb-3 transition-colors duration-300 leading-snug text-center">
                            {{ $item->judul }}
                        </h3>
                        <div class="w-8 h-0.5 bg-yellow-400 mb-4 mx-auto"></div>
                        <p class="text-gray-500 text-sm md:text-base leading-relaxed mb-6 flex-1 text-justify">
                            {{ $item->deskripsi }}
                        </p>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-gray-400 text-sm">{{ __('Belum ada data program kemataulian.') }}</p>
                </div>
                @endforelse

            </div>
        </div>
    </section>
