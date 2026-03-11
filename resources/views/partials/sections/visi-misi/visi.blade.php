{{-- ============================================ --}}
{{-- VISI SECTION --}}
{{-- ============================================ --}}
<section class="py-16 md:py-24 bg-gray-50 relative overflow-hidden">

    {{-- Dekorasi latar --}}
    <div
        class="absolute top-0 right-0 w-96 h-96 rounded-full bg-red-100/40 -translate-y-1/2 translate-x-1/3 hidden md:block">
    </div>
    <div
        class="absolute bottom-0 left-0 w-64 h-64 rounded-full bg-yellow-100/50 translate-y-1/2 -translate-x-1/3 hidden md:block">
    </div>

    <div class="container mx-auto px-4 sm:px-6 md:px-12 lg:px-24 xl:px-32 relative z-10">

        <div class="text-center mb-10 md:mb-14">
            <span class="text-xs font-bold tracking-[0.25em] uppercase text-red-800">{{ __('Arah & Tujuan') }}</span>
            <h2 class="mt-3 text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900">
                {{ __('Visi Sekolah') }}
            </h2>
            <div class="mt-4 mx-auto w-14 h-1 bg-yellow-500 rounded-full"></div>
        </div>

        <div class="grid md:grid-cols-2 gap-10 md:gap-16 items-center">

            {{-- Image --}}
            <div class="relative hidden md:block">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                    <img src="{{ asset('assets/visi-misi3.jpeg') }}" alt="Visi SMAN 1 Matauli"
                        class="w-full h-80 object-cover">
                    <div class="absolute inset-0 bg-linear-to-t from-red-950/70 via-transparent to-transparent"></div>
                </div>
                <div
                    class="absolute -bottom-5 -right-5 w-24 h-24 bg-yellow-400 rounded-2xl flex items-center justify-center shadow-xl rotate-3">
                    <div class="text-center -rotate-3">
                        <div class="text-red-900 font-black text-lg leading-none">31+</div>
                        <div class="text-red-800 font-semibold text-xs leading-tight">{{ __('Tahun Berdiri') }}</div>
                    </div>
                </div>
            </div>

            {{-- Visi content --}}
            <div>
                <div
                    class="relative z-10 bg-white rounded-2xl p-6 md:p-8 border border-gray-200 shadow-lg">
                    <p class="text-gray-700 text-base md:text-lg lg:text-xl leading-relaxed font-medium italic">
                        <span class="text-red-300 text-2xl md:text-3xl font-serif not-italic">&ldquo;</span>{{ __('Mewujudkan SMA Negeri 1 Matauli Pandan sebagai tempat layanan pendidikan unggul yang menghasilkan lulusan berkarakter pancasila, berdaya saing global dan berwawasan lingkungan.') }}<span class="text-red-300 text-2xl md:text-3xl font-serif not-italic">&rdquo;</span>
                    </p>
                </div>

                <div class="mt-8 grid grid-cols-3 gap-3">
                    <div class="text-center bg-red-50 rounded-xl p-3 border border-red-100">
                        <div class="text-red-800 text-xl mb-1">🏛️</div>
                        <div class="text-gray-800 text-xs font-semibold">{{ __('Berkarakter Pancasila') }}</div>
                    </div>
                    <div class="text-center bg-red-50 rounded-xl p-3 border border-red-100">
                        <div class="text-red-800 text-xl mb-1">🌐</div>
                        <div class="text-gray-800 text-xs font-semibold">{{ __('Berdaya Saing Global') }}</div>
                    </div>
                    <div class="text-center bg-red-50 rounded-xl p-3 border border-red-100">
                        <div class="text-red-800 text-xl mb-1">🌿</div>
                        <div class="text-gray-800 text-xs font-semibold">{{ __('Berwawasan Lingkungan') }}</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
{{-- ============================================ --}}
{{-- VISI SECTION END --}}
{{-- ============================================ --}}
