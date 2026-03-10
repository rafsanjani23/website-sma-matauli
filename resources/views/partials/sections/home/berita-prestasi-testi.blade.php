<section id="berita-prestasi-testi" class="py-12 bg-gray-50">
    <div class="mx-auto px-10">

        <!-- Header -->
        <header class="text-center mb-10 md:mb-12">
            <span class="text-xs font-semibold tracking-[0.3em] uppercase text-black">{{ __('Informasi Terkini') }}</span>
            <h2 class="mt-3 text-3xl md:text-4xl lg:text-5xl font-bold text-black">{{ __('Berita, Prestasi & Testimonials') }}</h2>
            <div class="mt-4 mx-auto w-14 h-1 bg-yellow-400 rounded-full"></div>
        </header>

        <!-- Tab List -->
        <div class="flex justify-center mb-5">
            <div role="tablist" aria-orientation="horizontal"
                class="inline-flex justify-center gap-2 p-1 bg-matauli-red-dark rounded-full w-md md:w-lg">
                <button role="tab" id="tab-berita" aria-selected="true" aria-controls="gallery-berita"
                    class="px-8 lg:px-12 py-3 rounded-full text-md font-medium transition-all duration-200
                 outline-none focus:ring-2
                 aria-selected:bg-matauli-yellow
                 aria-selected:text-matauli-red-dark
                 aria-selected:shadow-lg
                 text-matauli-yellow hover:text-gray-200">
                    {{ __('Berita') }}
                </button>

                <button role="tab" id="tab-prestasi" aria-selected="false" aria-controls="gallery-prestasi"
                    class="px-8 lg:px-12 py-3 rounded-full text-sm font-medium transition-all duration-200
                 outline-none focus:ring-2
                 aria-selected:bg-matauli-yellow
                 aria-selected:text-matauli-red-dark
                 aria-selected:shadow-lg
                 text-matauli-yellow hover:text-gray-200">
                    {{ __('Prestasi') }}
                </button>

                <button role="tab" id="tab-testimoni" aria-selected="false" aria-controls="gallery-testimoni"
                    class="px-8 lg:px-12 py-3 rounded-full text-sm font-medium transition-all duration-200
                 outline-none focus:ring-2
                 aria-selected:bg-matauli-yellow
                 aria-selected:text-matauli-red-dark
                 aria-selected:shadow-lg
                 text-matauli-yellow hover:text-gray-200">
                    {{ __('Testimonials') }}
                </button>
            </div>
        </div>

        <!-- Panels -->
        <div id="gallery-berita" role="tabpanel" aria-labelledby="tab-berita">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($berita as $item)
                <a href="{{ route('galeri-media-detail', $item->id) }}"
                    class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden group cursor-pointer block">
                    <!-- IMAGE -->
                    <div class="relative h-48 md:h-52 bg-linear-to-br from-red-800 to-red-900 overflow-hidden">
                        <div class="absolute inset-0 bg-black/30 group-hover:bg-black/40 transition-colors"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <img src="{{ Storage::url($item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-full object-cover" />
                        </div>
                    </div>

                    <!-- CONTENT -->
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
            <div class="text-center">
                <a href="/galeri-media"
                    class="mt-10 group inline-flex items-center gap-2 bg-yellow-400 hover:bg-yellow-500 text-black font-bold px-8 py-3 rounded-full transition-all duration-300 hover:gap-4 shadow-lg shadow-yellow-900/30 text-sm md:text-base">
                    <span>Selengkapnya</span>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 group-hover:translate-x-1 transition-transform duration-300" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>

        </div>

        <div id="gallery-prestasi" role="tabpanel" aria-labelledby="tab-prestasi" class="hidden">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($prestasi as $item)
                <a href="{{ route('prestasi-detail', $item->id) }}" class="group block">
                    <div
                        class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 hover:border-yellow-400 h-full">
                        <!-- Image -->
                        <div class="relative h-48 overflow-hidden">
                            <img src="{{ Storage::url($item->gambar) }}" alt="{{ $item->judul }}"
                                class="w-full h-full object-cover transition-transform duration-500">
                            <!-- Badge -->
                            <div
                                class="absolute bottom-4 left-4 bg-yellow-400 text-black font-bold px-3 py-1.5 rounded-lg text-xs shadow-lg">
                                {{ $item->nama_lomba }}
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="p-6 flex flex-col justify-between h-47.5">
                            <div>
                                <h4
                                    class="text-base md:text-lg font-bold text-gray-900 mb-2 group-hover:text-matauli-red-dark transition-colors">
                                    {{ $item->judul }}
                                </h4>
                                <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                                    {{ $item->tingkatan }}
                                </p>
                            </div>
                            <!-- CTA Arrow -->
                            <div
                                class="mt-4 inline-flex items-center gap-2 text-matauli-red-dark font-semibold group-hover:gap-3 transition-all">
                                <span>Selengkapnya</span>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 group-hover:translate-x-1 transition-transform" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>
                @empty
                <div class="col-span-full text-center py-12 text-gray-400">
                    {{ __('Belum ada data prestasi.') }}
                </div>
                @endforelse
            </div>
            <div class="text-center">
                <a href="{{ route('prestasi') }}"
                    class="mt-10 group inline-flex items-center gap-2 bg-yellow-400 hover:bg-yellow-500 text-black font-bold px-8 py-3 rounded-full transition-all duration-300 hover:gap-4 shadow-lg shadow-yellow-900/30 text-sm md:text-base">
                    {{ __('Lihat Semua Prestasi') }}
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>

        <div id="gallery-testimoni" role="tabpanel" aria-labelledby="tab-testimoni" class="hidden">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($testimoni as $item)
                <div
                    class="bg-linear-to-br from-gray-50 to-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 p-6 md:p-8 border border-gray-100">
                    <!-- Avatar -->
                    <div class="flex flex-col items-center mb-6">
                        <div
                            class="w-20 h-20 md:w-24 md:h-24 rounded-full overflow-hidden mb-4 shadow-lg ring-4 ring-yellow-400/30">
                            @if ($item->foto)
                                <img src="{{ Storage::url($item->foto) }}" alt="{{ $item->nama }}"
                                    class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                                    <svg class="w-10 h-10 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                    </svg>
                                </div>
                            @endif
                        </div>
                        <h4 class="font-bold text-gray-900 text-base md:text-lg">{{ $item->nama }}</h4>
                        <p class="text-sm text-gray-500">Alumni {{ $item->tahun_alumni }}</p>
                    </div>
                    <!-- Quote -->
                    <div class="relative">
                        <svg class="absolute -top-2 -left-2 w-8 h-8 text-yellow-400/20" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path d="M6 17h3l2-4V7H5v6h3zm8 0h3l2-4V7h-6v6h3z" />
                        </svg>
                        <p class="text-gray-700 text-sm md:text-base leading-relaxed italic pl-6">
                            "{{ $item->isi }}"
                        </p>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-12 text-gray-400">
                    {{ __('Belum ada testimonial.') }}
                </div>
                @endforelse
            </div>
            <div class="text-center">
                <a href="{{ route('testimonials') }}"
                    class="mt-10 group inline-flex items-center gap-2 bg-yellow-400 hover:bg-yellow-500 text-black font-bold px-8 py-3 rounded-full transition-all duration-300 hover:gap-4 shadow-lg shadow-yellow-900/30 text-sm md:text-base">
                    Selengkapnya
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 md:h-5 md:w-5" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>

    </div>
</section>
