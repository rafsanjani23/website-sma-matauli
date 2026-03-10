<section class="py-10 bg-white">
    <div class="mx-auto px-4">
        <div class="text-center mb-2">
            <h1 class="mt-2 text-2xl md:text-4xl font-bold text-slate-950 mb-2 md:mb-4">
                {{ __('KEGIATAN') }}
            </h1>
        </div>
        <!-- foto kegiatan -->
        <div class="flex gap-8 md:gap-10 overflow-x-auto md:overflow-hidden scroll-smooth snap-x snap-mandatory px-4 justify-center">
            @if ($item->gambar_kegiatan)
            <div class="snap-center shrink-0 w-55 md:min-w-70 h-32 md:h-40 border border-red-400 rounded-2xl flex items-center justify-center font-semibold bg-white overflow-hidden">
                <img src="{{ Storage::url($item->gambar_kegiatan) }}" alt="Kegiatan {{ $item->nama_mitra }}" class="w-full h-full object-cover" />
            </div>
            @endif
        </div>

        <!-- penjelasan kegiatan -->
        <div class="text-left group relative lg:max-w-5xl max-w-2xl mt-5 bg-white border border-gray-100 rounded-xl shadow-sm overflow-hidden mx-auto w-full">
            <h5 class="font-semibold p-6 text-lg text-slate-900">{{ __('Kegiatan') }}</h5>
            <p class="mb-4 p-6 text-[15px] text-slate-600 leading-relaxed">{{ $item->ringkasan_kegiatan }}</p>
        </div>
    </div>
</section>
