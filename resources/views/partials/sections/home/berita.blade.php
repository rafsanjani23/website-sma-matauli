<!-- ============================================ -->
<!-- BERITA TERKINI SECTION - START -->
<!-- ============================================ -->
<section id="berita-terkini" class="py-12 md:py-16 lg:py-20 bg-[#fff9f9]">
    <div class="container mx-auto px-4 sm:px-6 md:px-12 lg:px-24 xl:px-32">

        <!-- Section Title -->
        <div class="text-center mb-12 md:mb-16">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-matauli-red-dark mb-4">
                {{ __('Berita Terkini') }}
            </h2>
            <div class="w-20 md:w-24 h-1 bg-yellow-400 mx-auto"></div>
        </div>

        <!-- Berita Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 mb-10">
            @forelse ($berita as $item)
                <a href="{{ route('galeri-media-detail', $item->id) }}"
                    class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden group cursor-pointer block">
                    <!-- Image -->
                    <div class="relative h-48 md:h-52 bg-linear-to-br from-red-800 to-red-900 overflow-hidden">
                        <div class="absolute inset-0 bg-black/30 group-hover:bg-black/40 transition-colors"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <img src="{{ Storage::url($item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-full object-cover" />
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="p-5 md:p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-xs font-semibold text-matauli-red-dark bg-red-50 px-3 py-1 rounded-full">
                                {{ $item->judul }}
                            </span>
                        </div>
                        <p class="text-gray-600 text-xs md:text-sm mb-4">
                            {{ Str::limit($item->ringkasan, 100) }}
                        </p>
                        @if ($item->link_facebook)
                            <span
                                class="inline-flex items-center gap-2 text-blue-600 group-hover:text-blue-700 font-semibold text-sm transition">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                                {{ __('Lihat di Facebook') }}
                            </span>
                        @endif
                    </div>
                </a>
            @empty
                <div class="col-span-full text-center py-12 text-gray-400">
                    {{ __('Belum ada berita.') }}
                </div>
            @endforelse
        </div>

        <!-- CTA Button -->
        <div class="text-center">
            <a href="{{ route('galeri-media') }}"
                class="inline-flex items-center gap-2 md:gap-3 bg-yellow-400 hover:bg-yellow-500 text-black font-bold px-6 py-3 md:px-8 md:py-4 rounded-lg transition-all hover:scale-105 shadow-lg text-sm md:text-base">
                {{ __('Selengkapnya') }}
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 md:h-5 md:w-5" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>

    </div>
</section>
<!-- ============================================ -->
<!-- BERITA TERKINI SECTION - END -->
<!-- ============================================ -->
