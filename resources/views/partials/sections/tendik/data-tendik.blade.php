<section class="py-16 bg-white">
    <div class="mx-auto px-4">

        <!-- PIMPINAN -->
        <div class="text-start mb-10">
            <span class="bg-red-900 text-white px-6 py-2 rounded-full text-sm font-semibold shadow">
                {{ __('Pimpinan Sekolah') }}
            </span>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-2 items-stretch">
            @forelse ($pimpinan as $item)
                <div
                    class="bg-white border border-gray-200 shadow-md rounded-lg overflow-hidden flex flex-col h-full transition-shadow hover:shadow-lg">
                    <div class="aspect-3/2 bg-gray-100">
                        @if ($item->foto)
                            <img src="{{ Storage::url($item->foto) }}" class="w-full h-full object-cover"
                                alt="{{ $item->nama }}" />
                        @else
                            <div class="w-full h-full flex items-center justify-center">
                                <svg class="w-16 h-16 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                                </svg>
                            </div>
                        @endif
                    </div>

                    <div class="p-4 flex flex-col items-center gap-3 flex-1">
                        <h5 class="text-black text-center text-sm font-semibold">
                            {{ $item->nama }}
                        </h5>
                        <span
                            class="mt-auto bg-red-900 text-white text-xs font-semibold py-1.5 px-3 rounded-full text-center leading-snug">
                            {{ __($item->jabatan) }}
                        </span>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-8 text-gray-400">{{ __('Belum ada data pimpinan.') }}</div>
            @endforelse
        </div>
    </div>
</section>
