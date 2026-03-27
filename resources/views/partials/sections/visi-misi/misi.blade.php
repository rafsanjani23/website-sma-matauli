{{-- ============================================ --}}
{{-- MISI SECTION --}}
{{-- ============================================ --}}
<section class="py-16 md:py-24 bg-linear-to-br from-red-800 via-red-900 to-red-950 relative overflow-hidden">

    {{-- Dekorasi latar --}}
    <div class="absolute inset-0 opacity-5 pointer-events-none"
        style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 36px 36px;">
    </div>
    <div
        class="absolute top-0 right-0 w-80 h-80 rounded-full bg-white/4 -translate-y-1/2 translate-x-1/3 pointer-events-none">
    </div>
    <div
        class="absolute bottom-0 left-0 w-56 h-56 rounded-full bg-yellow-400/[0.07] translate-y-1/2 -translate-x-1/3 pointer-events-none">
    </div>

    <div class="container mx-auto px-4 sm:px-6 md:px-12 lg:px-24 xl:px-32 relative z-10">

        {{-- Header --}}
        <div class="mb-10 md:mb-14">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-8 h-0.5 bg-yellow-400"></div>
                <span
                    class="text-[11px] font-bold tracking-[0.22em] uppercase text-yellow-400">{{ __('Langkah Nyata') }}</span>
            </div>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white leading-tight">
                {{ __('Misi Sekolah') }}
            </h2>
            <div class="mt-4 w-11 h-1 bg-yellow-400 rounded-full"></div>
        </div>

        {{-- Grid Misi --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 md:gap-4">

            {{-- Misi 01 - span 2 --}}
            <div
                class="sm:col-span-2 group bg-white/[0.07] hover:bg-white/13 border border-white/13 rounded-2xl p-5 flex flex-col gap-3 transition-all duration-300 hover:-translate-y-1">
                <div class="flex items-center gap-3">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-yellow-400 flex items-center justify-center">
                        <span class="text-red-900 font-black text-[11px]">01</span>
                    </div>
                    <span
                        class="text-[11px] font-bold tracking-[0.08em] uppercase text-yellow-300/90">{{ __('Karakter Lulusan') }}</span>
                </div>
                <div class="w-full h-px bg-yellow-400/25"></div>
                <p class="text-white/80 text-xs leading-relaxed">
                    {{ __('Mewujudkan lulusan yang beriman dan bertaqwa kepada Tuhan YME, Kewargaan, Mandiri, Kolaboratif, bernalar kritis, kreatif, sehat dan komunikatif.') }}
                </p>
            </div>

            {{-- Misi 02 --}}
            <div
                class="group bg-white/[0.07] hover:bg-white/13 border border-white/13 rounded-2xl p-5 flex flex-col gap-3 transition-all duration-300 hover:-translate-y-1">
                <div class="flex items-center gap-3">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-yellow-400 flex items-center justify-center">
                        <span class="text-red-900 font-black text-[11px]">02</span>
                    </div>
                    <span
                        class="text-[11px] font-bold tracking-[0.08em] uppercase text-yellow-300/90">{{ __('Kurikulum IB') }}</span>
                </div>
                <div class="w-full h-px bg-yellow-400/25"></div>
                <p class="text-white/80 text-xs leading-relaxed">
                    {{ __('Mengimplementasikan kurikulum International Baccalaureate Diploma Programme (IBDP).') }}
                </p>
            </div>

            {{-- Misi 03 --}}
            <div
                class="group bg-white/[0.07] hover:bg-white/13 border border-white/13 rounded-2xl p-5 flex flex-col gap-3 transition-all duration-300 hover:-translate-y-1">
                <div class="flex items-center gap-3">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-yellow-400 flex items-center justify-center">
                        <span class="text-red-900 font-black text-[11px]">03</span>
                    </div>
                    <span
                        class="text-[11px] font-bold tracking-[0.08em] uppercase text-yellow-300/90">{{ __('Inovasi & Teknologi') }}</span>
                </div>
                <div class="w-full h-px bg-yellow-400/25"></div>
                <p class="text-white/80 text-xs leading-relaxed">
                    {{ __('Mewujudkan pelayanan pendidikan yang berbasis penelitian dan inovasi pendidikan serta sains dan teknologi yang melampaui standar nasional pendidikan (SNP).') }}
                </p>
            </div>

            {{-- Misi 04 --}}
            <div
                class="group bg-white/[0.07] hover:bg-white/13 border border-white/13 rounded-2xl p-5 flex flex-col gap-3 transition-all duration-300 hover:-translate-y-1">
                <div class="flex items-center gap-3">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-yellow-400 flex items-center justify-center">
                        <span class="text-red-900 font-black text-[11px]">04</span>
                    </div>
                    <span
                        class="text-[11px] font-bold tracking-[0.08em] uppercase text-yellow-300/90">{{ __('Budaya Sekolah') }}</span>
                </div>
                <div class="w-full h-px bg-yellow-400/25"></div>
                <p class="text-white/80 text-xs leading-relaxed">
                    {{ __('Mewujudkan budaya sekolah yang disiplin, tekun, berintegritas, tegas, pantang menyerah, bertanggungjawab dan toleran.') }}
                </p>
            </div>

            {{-- Misi 05 --}}
            <div
                class="group bg-white/[0.07] hover:bg-white/13 border border-white/13 rounded-2xl p-5 flex flex-col gap-3 transition-all duration-300 hover:-translate-y-1">
                <div class="flex items-center gap-3">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-yellow-400 flex items-center justify-center">
                        <span class="text-red-900 font-black text-[11px]">05</span>
                    </div>
                    <span
                        class="text-[11px] font-bold tracking-[0.08em] uppercase text-yellow-300/90">{{ __('Bahasa Asing') }}</span>
                </div>
                <div class="w-full h-px bg-yellow-400/25"></div>
                <p class="text-white/80 text-xs leading-relaxed">
                    {{ __('Mewujudkan lulusan dengan kemampuan berbahasa asing.') }}
                </p>
            </div>

            {{-- Misi 06 --}}
            <div
                class="group bg-white/[0.07] hover:bg-white/13 border border-white/13 rounded-2xl p-5 flex flex-col gap-3 transition-all duration-300 hover:-translate-y-1">
                <div class="flex items-center gap-3">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-yellow-400 flex items-center justify-center">
                        <span class="text-red-900 font-black text-[11px]">06</span>
                    </div>
                    <span
                        class="text-[11px] font-bold tracking-[0.08em] uppercase text-yellow-300/90">{{ __('Literasi') }}</span>
                </div>
                <div class="w-full h-px bg-yellow-400/25"></div>
                <p class="text-white/80 text-xs leading-relaxed">
                    {{ __('Mewujudkan budaya literasi warga sekolah.') }}
                </p>
            </div>

            {{-- Misi 07 --}}
            <div
                class="group bg-white/[0.07] hover:bg-white/13 border border-white/13 rounded-2xl p-5 flex flex-col gap-3 transition-all duration-300 hover:-translate-y-1">
                <div class="flex items-center gap-3">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-yellow-400 flex items-center justify-center">
                        <span class="text-red-900 font-black text-[11px]">07</span>
                    </div>
                    <span
                        class="text-[11px] font-bold tracking-[0.08em] uppercase text-yellow-300/90">{{ __('Pembelajaran Bermakna') }}</span>
                </div>
                <div class="w-full h-px bg-yellow-400/25"></div>
                <p class="text-white/80 text-xs leading-relaxed">
                    {{ __('Mewujudkan guru yang menerapkan prinsip pembelajaran mindful, meaningful dan joyful dengan berpihak pada murid.') }}
                </p>
            </div>

            {{-- Misi 08 --}}
            <div
                class="group bg-white/[0.07] hover:bg-white/13 border border-white/13 rounded-2xl p-5 flex flex-col gap-3 transition-all duration-300 hover:-translate-y-1">
                <div class="flex items-center gap-3">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-yellow-400 flex items-center justify-center">
                        <span class="text-red-900 font-black text-[11px]">08</span>
                    </div>
                    <span
                        class="text-[11px] font-bold tracking-[0.08em] uppercase text-yellow-300/90">{{ __('Pengalaman Belajar') }}</span>
                </div>
                <div class="w-full h-px bg-yellow-400/25"></div>
                <p class="text-white/80 text-xs leading-relaxed">
                    {{ __('Mewujudkan guru yang memberikan pengalaman belajar dengan tahapan memahami, mengaplikasi dan merefleksi.') }}
                </p>
            </div>

            {{-- Misi 09 --}}
            <div
                class="group bg-white/[0.07] hover:bg-white/13 border border-white/13 rounded-2xl p-5 flex flex-col gap-3 transition-all duration-300 hover:-translate-y-1">
                <div class="flex items-center gap-3">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-yellow-400 flex items-center justify-center">
                        <span class="text-red-900 font-black text-[11px]">09</span>
                    </div>
                    <span
                        class="text-[11px] font-bold tracking-[0.08em] uppercase text-yellow-300/90">{{ __('Kerangka Pembelajaran') }}</span>
                </div>
                <div class="w-full h-px bg-yellow-400/25"></div>
                <p class="text-white/80 text-xs leading-relaxed">
                    {{ __('Mewujudkan kerangka pembelajaran di sekolah secara terintegrasi melalui praktik pedagogis, kemitraan pembelajaran, lingkungan pembelajaran dan pemanfaatan digital.') }}
                </p>
            </div>

            {{-- Misi 10 --}}
            <div
                class="group bg-white/[0.07] hover:bg-white/13 border border-white/13 rounded-2xl p-5 flex flex-col gap-3 transition-all duration-300 hover:-translate-y-1">
                <div class="flex items-center gap-3">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-yellow-400 flex items-center justify-center">
                        <span class="text-red-900 font-black text-[11px]">10</span>
                    </div>
                    <span
                        class="text-[11px] font-bold tracking-[0.08em] uppercase text-yellow-300/90">{{ __('Inkuari Kolaboratif') }}</span>
                </div>
                <div class="w-full h-px bg-yellow-400/25"></div>
                <p class="text-white/80 text-xs leading-relaxed">
                    {{ __('Mewujudkan budaya inkuari kolaboratif dalam menghadapi tantangan di sekolah.') }}
                </p>
            </div>

            {{-- Misi 11 - span 2 --}}
            <div
                class="sm:col-span-2 group bg-white/[0.07] hover:bg-white/13 border border-white/13 rounded-2xl p-5 flex flex-col gap-3 transition-all duration-300 hover:-translate-y-1">
                <div class="flex items-center gap-3">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-yellow-400 flex items-center justify-center">
                        <span class="text-red-900 font-black text-[11px]">11</span>
                    </div>
                    <span
                        class="text-[11px] font-bold tracking-[0.08em] uppercase text-yellow-300/90">{{ __('Peran Guru sebagai Pemimpin') }}</span>
                </div>
                <div class="w-full h-px bg-yellow-400/25"></div>
                <p class="text-white/80 text-xs leading-relaxed">
                    {{ __('Mewujudkan peran guru sebagai pemimpin pembelajaran, penggerak komunitas praktisi, pelatih (coach) bagi guru lain, pendorong kolaborasi antar guru dan kepemimpinan murid.') }}
                </p>
            </div>

            {{-- Misi 12 --}}
            <div
                class="group bg-white/[0.07] hover:bg-white/13 border border-white/13 rounded-2xl p-5 flex flex-col gap-3 transition-all duration-300 hover:-translate-y-1">
                <div class="flex items-center gap-3">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-yellow-400 flex items-center justify-center">
                        <span class="text-red-900 font-black text-[11px]">12</span>
                    </div>
                    <span
                        class="text-[11px] font-bold tracking-[0.08em] uppercase text-yellow-300/90">{{ __('Pelestarian Lingkungan') }}</span>
                </div>
                <div class="w-full h-px bg-yellow-400/25"></div>
                <p class="text-white/80 text-xs leading-relaxed">
                    {{ __('Mewujudkan kepedulian warga sekolah terhadap pelestarian lingkungan.') }}
                </p>
            </div>

            {{-- Misi 13 - Full width --}}
            <div
                class="sm:col-span-2 lg:col-span-3 group bg-white/[0.07] hover:bg-white/13 border border-white/13 rounded-2xl p-5 flex flex-col gap-3 transition-all duration-300 hover:-translate-y-1">
                <div class="flex items-center gap-3">
                    <div class="shrink-0 w-8 h-8 rounded-lg bg-yellow-400 flex items-center justify-center">
                        <span class="text-red-900 font-black text-[11px]">13</span>
                    </div>
                    <span
                        class="text-[11px] font-bold tracking-[0.08em] uppercase text-yellow-300/90">{{ __('Lingkungan Sekolah "Hias Berriman"') }}</span>
                </div>
                <div class="w-full h-px bg-yellow-400/25"></div>
                <p class="text-white/80 text-xs leading-relaxed">
                    {{ __('Mewujudkan lingkungan sekolah yang hijau, asri, bersih, rindang dan nyaman "hias berriman" sebagai sarana pendukung pendidikan, media dan sumber pembelajaran.') }}
                </p>
            </div>

        </div>{{-- END Grid --}}

    </div>
</section>
{{-- ============================================ --}}
{{-- MISI SECTION END --}}
{{-- ============================================ --}}
