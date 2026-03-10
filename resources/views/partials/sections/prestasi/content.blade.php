<section class="pb-12 md:pb-16 lg:pb-20 bg-white">
    <div class="mx-auto px-4 sm:px-6 lg:px-12 xl:px-24">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse ($items as $item)
        <a href="{{ route('prestasi-detail', $item->id) }}" class="group block">
            <div
                class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 hover:border-yellow-400 h-full">

                {{-- Image --}}
                <div class="relative h-48 md:h-52 overflow-hidden">
                    <img src="{{ Storage::url($item->gambar) }}" alt="{{ $item->judul }}"
                        class="w-full h-full object-cover transition-transform duration-500">

                    {{-- Badge --}}
                    <div
                        class="absolute bottom-4 left-4 bg-yellow-400 text-black font-bold px-3 py-1.5 rounded-lg text-xs shadow-lg">
                        {{ $item->nama_lomba }}
                    </div>
                </div>

                {{-- Content --}}
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

                    {{-- CTA Arrow --}}
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
            Belum ada data prestasi.
        </div>
        @endforelse
    </div>
    </div>
</section>
