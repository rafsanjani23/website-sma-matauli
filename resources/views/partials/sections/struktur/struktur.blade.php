{{-- ============================================ --}}
{{-- STRUKTUR ORGANISASI SECTION --}}
{{-- ============================================ --}}
<section class="relative overflow-hidden bg-white">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-40 -right-40 w-125 h-125 bg-red-100/50 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-32 -left-32 w-96 h-96 bg-yellow-100/50 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-6xl mx-auto px-6 py-16 md:py-24">

        {{-- Header --}}
        <div class="text-center mb-10 md:mb-14">
            <h2 class="text-xl md:text-2xl lg:text-3xl font-bold text-gray-900 max-w-2xl mx-auto">
                {{ __('Susunan Kepemimpinan dan Organisasi SMAN 1 Matauli Pandan') }}
            </h2>
            <div class="w-16 h-1 bg-yellow-400 mx-auto mt-4 rounded-full"></div>
        </div>

        {{-- Gambar Struktur --}}
        <div class="relative max-w-5xl mx-auto">
            <div class="rounded-2xl overflow-hidden shadow-xl border border-gray-100 bg-white p-4 md:p-6">
                <img src="{{ asset('assets/Struktur_Sekolah.png') }}"
                    alt="{{ __('Struktur Organisasi SMAN 1 Matauli Pandan') }}"
                    class="w-full h-auto object-contain rounded-lg">
            </div>

            {{-- Caption --}}
            <p class="text-center text-gray-400 text-xs md:text-sm mt-4">
                {{ __('Bagan struktur organisasi SMAN 1 Matauli Pandan tahun ajaran berjalan') }}
            </p>
        </div>
    </div>
</section>