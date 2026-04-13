<section class="bg-white py-15">
    <div class="mx-auto px-4">
        <div class="text-center mb-18">
            <h1 class="mt-2 text-2xl md:text-3xl font-bold text-slate-950 mb-2 ">
                {{ __('KEGIATAN ASRAMA') }}
            </h1>
        </div>

        {{-- Kegiatan Rutin --}}
        <div class="mb-12 px-10">
            <h2 class="text-xl md:text-2xl font-bold text-slate-800 mb-6">{{ __('Kegiatan Rutin') }}</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-2">
                @forelse ($rutinItems as $item)
                <div>
                    <div class="bg-white border border-gray-200 shadow-md w-full max-w-sm rounded-4xl overflow-hidden mx-auto">
                        <div class="aspect-3/2">
                            <img src="{{ Storage::url($item->gambar) }}" class="w-full h-full object-cover" alt="{{ $item->nama }}" />
                        </div>
                    </div>
                    <div class="p-2">
                        <h5 class="text-gray-900 text-center text-md font-semibold">{{ $item->nama }}</h5>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-8 text-gray-400">{{ __('Belum ada data.') }}</div>
                @endforelse
            </div>
        </div>

        {{-- Kegiatan Tidak Rutin --}}
        <div class="px-10">
            <h2 class="text-xl md:text-2xl font-bold text-slate-800 mb-6">{{ __('Kegiatan Tidak Rutin') }}</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-2">
                @forelse ($tidakRutinItems as $item)
                <div>
                    <div class="bg-white border border-gray-200 shadow-md w-full max-w-sm rounded-4xl overflow-hidden mx-auto">
                        <div class="aspect-3/2">
                            <img src="{{ Storage::url($item->gambar) }}" class="w-full h-full object-cover" alt="{{ $item->nama }}" />
                        </div>
                    </div>
                    <div class="p-2">
                        <h5 class="text-gray-900 text-center text-md font-semibold">{{ $item->nama }}</h5>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-8 text-gray-400">{{ __('Belum ada data.') }}</div>
                @endforelse
            </div>
        </div>
    </div>
</section>
