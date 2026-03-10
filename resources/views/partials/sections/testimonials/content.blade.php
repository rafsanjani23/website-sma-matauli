<section class="pb-12 md:pb-16 lg:pb-20 bg-white">
    <div class="mx-auto px-4 sm:px-6 lg:px-12 xl:px-24">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($items as $item)
            <div
                class="bg-linear-to-br from-gray-50 to-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 p-6 md:p-8 border border-gray-100">
                {{-- Avatar --}}
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
                {{-- Quote --}}
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
    </div>
</section>
