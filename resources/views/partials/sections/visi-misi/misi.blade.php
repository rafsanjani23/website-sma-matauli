{{-- ============================================ --}}
{{-- MISI SECTION --}}
{{-- ============================================ --}}
<section class="py-16 md:py-24 bg-gray-50 relative overflow-hidden">

    {{-- Dekorasi latar --}}
    <div
        class="absolute top-0 right-0 w-80 h-80 rounded-full bg-red-800/4 -translate-y-1/2 translate-x-1/3 pointer-events-none">
    </div>
    <div
        class="absolute bottom-0 left-0 w-56 h-56 rounded-full bg-yellow-400/8 translate-y-1/2 -translate-x-1/3 pointer-events-none">
    </div>

    <div class="container mx-auto px-4 sm:px-6 md:px-12 lg:px-24 xl:px-32 relative z-10">

        {{-- Header --}}
        <div class="mb-10 md:mb-14">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-8 h-0.5 bg-red-800"></div>
                <span
                    class="text-xs font-bold tracking-[0.22em] uppercase text-red-800">{{ __('Langkah Nyata') }}</span>
            </div>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
                {{ __('Misi Sekolah') }}
            </h2>
            <div class="mt-4 w-11 h-1 bg-yellow-400 rounded-full"></div>
        </div>

        {{-- Grid Misi --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 md:gap-4">

            {{-- Misi 01 --}}
            <div
                class="sm:col-span-2 lg:col-span-3 group bg-white hover:bg-red-50/50 border border-gray-200 border-l-4 border-l-red-800 rounded-2xl p-5 flex flex-col gap-3 transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                <div class="flex items-center gap-3">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-red-800 flex items-center justify-center">
                        <span class="text-white font-black text-xs">1</span>
                    </div>
                    <span
                        class="text-sm md:text-base font-bold tracking-[0.08em] uppercase text-red-800">{{ __('Karakter Lulusan') }}</span>
                </div>
                <div class="w-full h-px bg-gray-100"></div>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                    {{ __('Mewujudkan lulusan yang beriman dan bertaqwa kepada Tuhan YME, Kewargaan, Mandiri, Kolaboratif, bernalar kritis, kreatif, sehat dan komunikatif.') }}
                </p>
            </div>

            {{-- Misi 02 --}}
            <div
                class="sm:col-span-2 lg:col-span-3 group bg-white hover:bg-red-50/50 border border-gray-200 border-l-4 border-l-red-800 rounded-2xl p-5 flex flex-col gap-3 transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                <div class="flex items-center gap-3">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-red-800 flex items-center justify-center">
                        <span class="text-white font-black text-xs">2</span>
                    </div>
                    <span
                        class="text-sm md:text-base font-bold tracking-[0.08em] uppercase text-red-800">{{ __('Kurikulum IB') }}</span>
                </div>
                <div class="w-full h-px bg-gray-100"></div>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                    {{ __('Mengimplementasikan kurikulum International Baccalaureate Diploma Programme (IBDP).') }}
                </p>
            </div>

            {{-- Misi 03 --}}
            <div
                class="sm:col-span-2 lg:col-span-3 group bg-white hover:bg-red-50/50 border border-gray-200 border-l-4 border-l-red-800 rounded-2xl p-5 flex flex-col gap-3 transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                <div class="flex items-center gap-3">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-red-800 flex items-center justify-center">
                        <span class="text-white font-black text-xs">3</span>
                    </div>
                    <span
                        class="text-sm md:text-base font-bold tracking-[0.08em] uppercase text-red-800">{{ __('Inovasi & Teknologi') }}</span>
                </div>
                <div class="w-full h-px bg-gray-100"></div>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                    {{ __('Mewujudkan pelayanan pendidikan yang berbasis penelitian dan inovasi pendidikan serta sains dan teknologi yang melampaui standar nasional pendidikan (SNP).') }}
                </p>
            </div>

            {{-- Misi 04 --}}
            <div
                class="sm:col-span-2 lg:col-span-3 group bg-white hover:bg-red-50/50 border border-gray-200 border-l-4 border-l-red-800 rounded-2xl p-5 flex flex-col gap-3 transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                <div class="flex items-center gap-3">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-red-800 flex items-center justify-center">
                        <span class="text-white font-black text-xs">4</span>
                    </div>
                    <span
                        class="text-sm md:text-base font-bold tracking-[0.08em] uppercase text-red-800">{{ __('Budaya Sekolah') }}</span>
                </div>
                <div class="w-full h-px bg-gray-100"></div>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                    {{ __('Mewujudkan budaya sekolah yang disiplin, tekun, berintegritas, tegas, pantang menyerah, bertanggungjawab dan toleran.') }}
                </p>
            </div>

            {{-- Misi 05 --}}
            <div
                class="sm:col-span-2 lg:col-span-3 group bg-white hover:bg-red-50/50 border border-gray-200 border-l-4 border-l-red-800 rounded-2xl p-5 flex flex-col gap-3 transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                <div class="flex items-center gap-3">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-red-800 flex items-center justify-center">
                        <span class="text-white font-black text-xs">5</span>
                    </div>
                    <span
                        class="text-sm md:text-base font-bold tracking-[0.08em] uppercase text-red-800">{{ __('Bahasa Asing') }}</span>
                </div>
                <div class="w-full h-px bg-gray-100"></div>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                    {{ __('Mewujudkan lulusan dengan kemampuan berbahasa asing.') }}
                </p>
            </div>

            {{-- Misi 06 --}}
            <div
                class="sm:col-span-2 lg:col-span-3 group bg-white hover:bg-red-50/50 border border-gray-200 border-l-4 border-l-red-800 rounded-2xl p-5 flex flex-col gap-3 transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                <div class="flex items-center gap-3">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-red-800 flex items-center justify-center">
                        <span class="text-white font-black text-xs">6</span>
                    </div>
                    <span
                        class="text-sm md:text-base font-bold tracking-[0.08em] uppercase text-red-800">{{ __('Literasi') }}</span>
                </div>
                <div class="w-full h-px bg-gray-100"></div>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                    {{ __('Mewujudkan budaya literasi warga sekolah.') }}
                </p>
            </div>

            {{-- Misi 07 --}}
            <div
                class="sm:col-span-2 lg:col-span-3 group bg-white hover:bg-red-50/50 border border-gray-200 border-l-4 border-l-red-800 rounded-2xl p-5 flex flex-col gap-3 transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                <div class="flex items-center gap-3">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-red-800 flex items-center justify-center">
                        <span class="text-white font-black text-xs">7</span>
                    </div>
                    <span
                        class="text-sm md:text-base font-bold tracking-[0.08em] uppercase text-red-800">{{ __('Pembelajaran Bermakna') }}</span>
                </div>
                <div class="w-full h-px bg-gray-100"></div>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                    {{ __('Mewujudkan guru yang menerapkan prinsip pembelajaran mindful, meaningful dan joyful dengan berpihak pada murid.') }}
                </p>
            </div>

            {{-- Misi 08 --}}
            <div
                class="sm:col-span-2 lg:col-span-3 group bg-white hover:bg-red-50/50 border border-gray-200 border-l-4 border-l-red-800 rounded-2xl p-5 flex flex-col gap-3 transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                <div class="flex items-center gap-3">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-red-800 flex items-center justify-center">
                        <span class="text-white font-black text-xs">8</span>
                    </div>
                    <span
                        class="text-sm md:text-base font-bold tracking-[0.08em] uppercase text-red-800">{{ __('Pengalaman Belajar') }}</span>
                </div>
                <div class="w-full h-px bg-gray-100"></div>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                    {{ __('Mewujudkan guru yang memberikan pengalaman belajar dengan tahapan memahami, mengaplikasi dan merefleksi.') }}
                </p>
            </div>

            {{-- Misi 09 --}}
            <div
                class="sm:col-span-2 lg:col-span-3 group bg-white hover:bg-red-50/50 border border-gray-200 border-l-4 border-l-red-800 rounded-2xl p-5 flex flex-col gap-3 transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                <div class="flex items-center gap-3">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-red-800 flex items-center justify-center">
                        <span class="text-white font-black text-xs">9</span>
                    </div>
                    <span
                        class="text-sm md:text-base font-bold tracking-[0.08em] uppercase text-red-800">{{ __('Kerangka Pembelajaran') }}</span>
                </div>
                <div class="w-full h-px bg-gray-100"></div>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                    {{ __('Mewujudkan kerangka pembelajaran di sekolah secara terintegrasi melalui praktik pedagogis, kemitraan pembelajaran, lingkungan pembelajaran dan pemanfaatan digital.') }}
                </p>
            </div>

            {{-- Misi 10 --}}
            <div
                class="sm:col-span-2 lg:col-span-3 group bg-white hover:bg-red-50/50 border border-gray-200 border-l-4 border-l-red-800 rounded-2xl p-5 flex flex-col gap-3 transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                <div class="flex items-center gap-3">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-red-800 flex items-center justify-center">
                        <span class="text-white font-black text-xs">10</span>
                    </div>
                    <span
                        class="text-sm md:text-base font-bold tracking-[0.08em] uppercase text-red-800">{{ __('Inkuari Kolaboratif') }}</span>
                </div>
                <div class="w-full h-px bg-gray-100"></div>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                    {{ __('Mewujudkan budaya inkuari kolaboratif dalam menghadapi tantangan di sekolah.') }}
                </p>
            </div>

            {{-- Misi 11 --}}
            <div
                class="sm:col-span-2 lg:col-span-3 group bg-white hover:bg-red-50/50 border border-gray-200 border-l-4 border-l-red-800 rounded-2xl p-5 flex flex-col gap-3 transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                <div class="flex items-center gap-3">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-red-800 flex items-center justify-center">
                        <span class="text-white font-black text-xs">11</span>
                    </div>
                    <span
                        class="text-sm md:text-base font-bold tracking-[0.08em] uppercase text-red-800">{{ __('Peran Guru sebagai Pemimpin') }}</span>
                </div>
                <div class="w-full h-px bg-gray-100"></div>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                    {{ __('Mewujudkan peran guru sebagai pemimpin pembelajaran, penggerak komunitas praktisi, pelatih (coach) bagi guru lain, pendorong kolaborasi antar guru dan kepemimpinan murid.') }}
                </p>
            </div>

            {{-- Misi 12 --}}
            <div
                class="sm:col-span-2 lg:col-span-3 group bg-white hover:bg-red-50/50 border border-gray-200 border-l-4 border-l-red-800 rounded-2xl p-5 flex flex-col gap-3 transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                <div class="flex items-center gap-3">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-red-800 flex items-center justify-center">
                        <span class="text-white font-black text-xs">12</span>
                    </div>
                    <span
                        class="text-sm md:text-base font-bold tracking-[0.08em] uppercase text-red-800">{{ __('Pelestarian Lingkungan') }}</span>
                </div>
                <div class="w-full h-px bg-gray-100"></div>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                    {{ __('Mewujudkan kepedulian warga sekolah terhadap pelestarian lingkungan.') }}
                </p>
            </div>

            {{-- Misi 13 --}}
            <div
                class="sm:col-span-2 lg:col-span-3 group bg-white hover:bg-red-50/50 border border-gray-200 border-l-4 border-l-red-800 rounded-2xl p-5 flex flex-col gap-3 transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                <div class="flex items-center gap-3">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-red-800 flex items-center justify-center">
                        <span class="text-white font-black text-xs">13</span>
                    </div>
                    <span
                        class="text-sm md:text-base font-bold tracking-[0.08em] uppercase text-red-800">{{ __('Lingkungan Sekolah "Hias Berriman"') }}</span>
                </div>
                <div class="w-full h-px bg-gray-100"></div>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                    {{ __('Mewujudkan lingkungan sekolah yang hijau, asri, bersih, rindang dan nyaman "hias berriman" sebagai sarana pendukung pendidikan, media dan sumber pembelajaran.') }}
                </p>
            </div>

        </div>{{-- END Grid --}}

    </div>
</section>
{{-- ============================================ --}}
{{-- MISI SECTION END --}}
{{-- ============================================ --}}
