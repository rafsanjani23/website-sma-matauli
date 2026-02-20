{{-- ============================================ --}}
{{-- VISI SECTION --}}
{{-- ============================================ --}}
<section class="py-16 md:py-24 bg-linear-to-br from-red-800 via-red-900 to-red-950 relative overflow-hidden">

    {{-- Dekorasi latar --}}
    <div
        class="absolute top-0 right-0 w-96 h-96 rounded-full bg-white/5 -translate-y-1/2 translate-x-1/3 hidden md:block">
    </div>
    <div
        class="absolute bottom-0 left-0 w-64 h-64 rounded-full bg-yellow-400/10 translate-y-1/2 -translate-x-1/3 hidden md:block">
    </div>
    <div class="absolute inset-0 opacity-5"
        style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 40px 40px;">
    </div>

    <div class="container mx-auto px-4 sm:px-6 md:px-12 lg:px-24 xl:px-32 relative z-10">

        <div class="text-center mb-10 md:mb-14">
            <span class="text-xs font-bold tracking-[0.25em] uppercase text-yellow-400">Arah & Tujuan</span>
            <h2 class="mt-3 text-3xl md:text-4xl lg:text-5xl font-bold text-white">
                Visi Sekolah
            </h2>
            <div class="w-12 h-0.5 bg-linear-to-r from-yellow-400 to-yellow-600 mx-auto mt-4 rounded-full"></div>
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
                        <div class="text-red-800 font-semibold text-xs leading-tight">Tahun<br>Berdiri</div>
                    </div>
                </div>
            </div>

            {{-- Visi content --}}
            <div>
                <div class="relative">
                    <div
                        class="text-yellow-400/20 text-[120px] md:text-[160px] font-serif leading-none absolute -top-8 -left-4 select-none pointer-events-none">
                        "</div>

                    <div
                        class="relative z-10 bg-white/10 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-white/20">
                        <p class="text-white text-base md:text-lg lg:text-xl leading-relaxed font-medium italic">
                            Mewujudkan SMA Negeri 1 Matauli Pandan sebagai tempat layanan pendidikan unggul yang
                            menghasilkan lulusan berkarakter pancasila, berdaya saing global dan berwawasan
                            lingkungan.
                        </p>
                    </div>

                    <div
                        class="text-yellow-400/20 text-[120px] md:text-[160px] font-serif leading-none absolute -bottom-16 right-0 select-none pointer-events-none rotate-180">
                        "</div>
                </div>

                <div class="mt-8 grid grid-cols-3 gap-3">
                    <div class="text-center bg-white/10 rounded-xl p-3 border border-white/10">
                        <div class="text-yellow-400 text-xl mb-1">🏛️</div>
                        <div class="text-white text-xs font-semibold">Berkarakter<br>Pancasila</div>
                    </div>
                    <div class="text-center bg-white/10 rounded-xl p-3 border border-white/10">
                        <div class="text-yellow-400 text-xl mb-1">🌐</div>
                        <div class="text-white text-xs font-semibold">Berdaya Saing<br>Global</div>
                    </div>
                    <div class="text-center bg-white/10 rounded-xl p-3 border border-white/10">
                        <div class="text-yellow-400 text-xl mb-1">🌿</div>
                        <div class="text-white text-xs font-semibold">Berwawasan<br>Lingkungan</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
{{-- ============================================ --}}
{{-- VISI SECTION END --}}
{{-- ============================================ --}}
