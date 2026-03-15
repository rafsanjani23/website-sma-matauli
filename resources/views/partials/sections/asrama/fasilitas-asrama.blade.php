{{-- ============================================ --}}
{{-- FASILITAS ASRAMA SECTION --}}
{{-- ============================================ --}}
<section class="relative overflow-hidden bg-gray-50">
    {{-- Dekorasi blur --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-40 -right-40 w-125 h-125 bg-red-100/40 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-32 -left-32 w-96 h-96 bg-yellow-100/40 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 py-16 md:py-24">
        {{-- Header --}}
        <div class="text-center mb-12 md:mb-16">
            <p class="text-red-800 text-sm font-semibold tracking-widest uppercase mb-2">
                {{ __('Sarana & Prasarana') }}</p>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                {{ __('Fasilitas Asrama') }}
            </h2>
            <div class="w-16 h-1 bg-yellow-400 mx-auto mt-4 rounded-full"></div>
            <p class="text-gray-500 mt-4 max-w-2xl mx-auto text-sm md:text-base">
                {{ __('Berbagai fasilitas yang tersedia untuk mendukung kenyamanan dan kegiatan siswa selama tinggal di asrama.') }}
            </p>
        </div>

        {{-- Grid Fasilitas --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            @forelse ($items as $item)
                <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-gray-100 transition-all duration-300 hover:-translate-y-1">
                    {{-- Gambar --}}
                    <div class="aspect-4/3 overflow-hidden">
                        <img src="{{ Storage::url($item->gambar) }}"
                            alt="{{ $item->nama }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    </div>
                    {{-- Info --}}
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-gray-900 group-hover:text-red-800 transition-colors">
                            {{ $item->nama }}
                        </h3>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-16">
                    <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909M3.75 21h16.5A2.25 2.25 0 0022.5 18.75V5.25A2.25 2.25 0 0020.25 3H3.75A2.25 2.25 0 001.5 5.25v13.5A2.25 2.25 0 003.75 21z" />
                        </svg>
                    </div>
                    <p class="text-gray-400 text-sm">{{ __('Belum ada data fasilitas.') }}</p>
                </div>
            @endforelse
        </div>
    </div>
</section>