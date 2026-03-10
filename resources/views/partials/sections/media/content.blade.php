<section class="py-2">
    <div class="max-w-7xl mx-auto px-4">
        <div id="gallery-berita" role="tabpanel" aria-labelledby="tab-berita">
            <div class="mb-20 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($items as $item)
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
                                <span
                                    class="text-xs font-semibold text-matauli-red-dark bg-red-50 px-3 py-1 rounded-full">
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
                                    Lihat di Facebook
                                </span>
                            @endif
                        </div>
                    </a>
                @empty
                    <div class="col-span-full text-center py-12 text-gray-400">
                        Belum ada berita.
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</section>
