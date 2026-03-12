{{-- ============================================ --}}
{{-- PETA PENYEBARAN SISWA BEASISWA IB --}}
{{-- ============================================ --}}
<section class="relative overflow-hidden bg-white">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-0 right-0 w-96 h-96 bg-red-100/50 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-yellow-100/50 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-6xl mx-auto px-6 py-16 md:py-20">
        {{-- Header --}}
        <div class="text-center mb-12">
            <span
                class="text-red-800 text-xs font-bold uppercase tracking-widest">{{ __('Sebaran Penerima Beasiswa') }}</span>
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-gray-900 mt-2 mb-3">
                {{ __('46 Siswa Penerima Beasiswa') }}
            </h2>
            <p class="text-gray-500 text-sm md:text-base max-w-2xl mx-auto">
                {{ __('Implementasi Kurikulum International Baccalaureate Diploma Programme SMAN 1 Matauli Pandan') }}
            </p>
            <div class="w-16 h-1 bg-yellow-400 mx-auto mt-4 rounded-full"></div>
        </div>

        {{-- Peta --}}
        <div class="relative max-w-4xl mx-auto">
            <div class="rounded-2xl overflow-hidden shadow-lg border border-gray-100">
                <img src="{{ asset('assets/map-penyebaran.webp') }}" alt="{{ __('Peta Penyebaran Siswa Beasiswa IB') }}"
                    class="w-full h-full object-cover">
            </div>

            {{-- Caption --}}
            <p class="text-center text-gray-400 text-xs md:text-sm mt-4">
                {{ __('Peta sebaran asal daerah siswa penerima beasiswa program IB Diploma Programme') }}
            </p>
        </div>
    </div>
</section>
