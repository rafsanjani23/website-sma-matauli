{{-- ============================================ --}}
{{-- MISI SECTION --}}
{{-- ============================================ --}}
<section class="py-16 md:py-24 bg-white overflow-hidden">
    <div class="container mx-auto px-4 sm:px-6 md:px-12 lg:px-24 xl:px-32">

        <div class="mb-10 md:mb-14">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-8 h-0.5 bg-yellow-500"></div>
                <span class="text-xs font-bold tracking-[0.25em] uppercase text-yellow-600">Langkah Nyata</span>
            </div>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-red-900">
                Misi Sekolah
            </h2>
            <div class="w-12 h-0.5 bg-gradient-to-r from-red-800 to-yellow-500 mt-4 rounded-full"></div>
        </div>

        <div class="grid md:grid-cols-2 gap-10 md:gap-16 items-start">

            {{-- Image --}}
            <div class="order-2 md:order-1 relative">
                <div class="relative rounded-2xl overflow-hidden shadow-xl">
                    <div
                        class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-red-800 via-red-600 to-yellow-500 z-10">
                    </div>
                    <img src="{{ asset('assets/visi-misi4.JPG') }}" alt="Misi SMAN 1 Matauli"
                        class="w-full h-64 md:h-[480px] object-cover md:sticky md:top-24">
                    <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-red-900/50 to-transparent">
                    </div>
                </div>
                <div class="absolute -bottom-3 -left-3 w-16 h-16 rounded-full bg-yellow-400/30 hidden md:block"></div>
            </div>

            {{-- Misi list --}}
            <div class="order-1 md:order-2 space-y-5 md:space-y-6">

                {{-- Misi 1 --}}
                <div
                    class="group relative bg-white rounded-2xl p-5 md:p-6 shadow-md border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div
                        class="absolute top-0 left-0 right-0 h-0.5 bg-gradient-to-r from-red-800 to-red-600 rounded-t-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div class="flex items-start gap-4">
                        <div
                            class="shrink-0 w-10 h-10 md:w-12 md:h-12 rounded-xl bg-gradient-to-br from-red-800 to-red-950 flex items-center justify-center shadow-lg">
                            <span class="text-white font-black text-sm md:text-base">01</span>
                        </div>
                        <div class="pt-1">
                            <h3 class="font-bold text-red-900 text-sm md:text-base mb-1.5">Inovasi & Teknologi</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Mewujudkan pelayanan pendidikan yang berbasis penelitian dan inovasi pendidikan serta
                                sains teknologi yang melampaui standar nasional pendidikan (SNP)
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Misi 2 --}}
                <div
                    class="group relative bg-white rounded-2xl p-5 md:p-6 shadow-md border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div
                        class="absolute top-0 left-0 right-0 h-0.5 bg-gradient-to-r from-red-800 to-red-600 rounded-t-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div class="flex items-start gap-4">
                        <div
                            class="shrink-0 w-10 h-10 md:w-12 md:h-12 rounded-xl bg-gradient-to-br from-red-800 to-red-950 flex items-center justify-center shadow-lg">
                            <span class="text-white font-black text-sm md:text-base">02</span>
                        </div>
                        <div class="pt-1">
                            <h3 class="font-bold text-red-900 text-sm md:text-base mb-1.5">Karakter & Budaya</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Mewujudkan budaya sekolah yang disiplin, tekun, berintegritas, tegas, pantang menyerah,
                                bertanggungjawab dan toleran
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Misi 3 --}}
                <div
                    class="group relative bg-white rounded-2xl p-5 md:p-6 shadow-md border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div
                        class="absolute top-0 left-0 right-0 h-0.5 bg-gradient-to-r from-red-800 to-red-600 rounded-t-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div class="flex items-start gap-4">
                        <div
                            class="shrink-0 w-10 h-10 md:w-12 md:h-12 rounded-xl bg-gradient-to-br from-red-800 to-red-950 flex items-center justify-center shadow-lg">
                            <span class="text-white font-black text-sm md:text-base">03</span>
                        </div>
                        <div class="pt-1">
                            <h3 class="font-bold text-red-900 text-sm md:text-base mb-1.5">Keterampilan 4C</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Mewujudkan siswa yang memiliki keterampilan berpikir kritis, berkomunikasi,
                                berkolaborasi dan berkreatifitas
                            </p>
                        </div>
                    </div>
                </div>

                {{-- CTA --}}
                <div class="bg-gradient-to-br from-red-800 to-red-950 rounded-2xl p-5 md:p-6 mt-2">
                    <p class="text-white/80 text-sm mb-4 leading-relaxed">
                        Bersama kami, wujudkan generasi penerus bangsa yang unggul dan berkarakter.
                    </p>
                    <a href="{{ url('/ppdb') }}"
                        class="group inline-flex items-center gap-2 bg-yellow-400 hover:bg-yellow-500 text-red-900 font-bold px-5 py-2.5 rounded-full transition-all duration-300 hover:gap-3 text-sm shadow-lg shadow-yellow-500/20">
                        Daftar Sekarang
                        <svg class="w-4 h-4 group-hover:translate-x-0.5 transition-transform duration-300"
                            fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
{{-- ============================================ --}}
{{-- MISI SECTION END --}}
{{-- ============================================ --}}
