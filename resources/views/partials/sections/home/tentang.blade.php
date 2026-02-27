<!-- ============================================ -->
<!-- TENTANG KAMI SECTION -->
<!-- ============================================ -->
<section id="tentang-kami" class="relative py-10 md:py-12 lg:py-16 bg-[#fff9f9] overflow-hidden">

    {{-- BACKGROUND DECORATIONS --}}
    <div class="absolute inset-0 pointer-events-none select-none">
        {{-- Blob kiri atas --}}
        <div class="absolute top-0 left-0 w-72 h-72 rounded-full bg-red-800/4"></div>
        {{-- Blob kanan bawah --}}
        <div class="absolute -bottom-32 -right-32 w-96 h-96 rounded-full bg-yellow-400/10"></div>
        {{-- Dot grid subtle --}}
        <div class="absolute inset-0 opacity-30"
            style="background-image: radial-gradient(circle, #9f121240 1px, transparent 1px); background-size: 40px 40px; mask-image: radial-gradient(ellipse 80% 80% at 50% 50%, black 40%, transparent 100%);">
        </div>
    </div>

    <div class="relative container mx-auto px-4 sm:px-6 md:px-12 lg:px-24 xl:px-32">

        {{-- ===================== --}}
        {{-- SECTION HEADER --}}
        {{-- ===================== --}}
        <div class="text-center mb-16 md:mb-20">
            <span class="inline-flex items-center gap-2 text-xs font-bold tracking-[0.3em] uppercase text-red-800 mb-4">
            </span>
            <h2 class="mt-2 text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900">Tentang Kami</h2>
            <div class="mt-4 mx-auto w-14 h-1 bg-yellow-400 rounded-full"></div>
        </div>

        {{-- ===================== --}}
        {{-- PROFILE GRID --}}
        {{-- Foto kiri — Deskripsi tengah — Foto kanan --}}
        {{-- ===================== --}}
        <div class="grid grid-cols-1 lg:grid-cols-[1fr_1.3fr_1fr] gap-12 lg:gap-8 items-center mb-20 md:mb-24">

            {{-- ===== KOLOM KIRI: Kepala Sekolah ===== --}}
            <div
                class="flex flex-col items-center order-2 lg:order-1 scroll-animate opacity-0 -translate-x-10 transition-all duration-700 ease-in-out">

                {{-- Foto dengan ring bertingkat --}}
                <div class="relative mb-12">
                    {{-- Ring terluar animasi --}}
                    <div
                        class="absolute -inset-4 rounded-full border border-red-200/60 border-dashed animate-[spin_20s_linear_infinite]">
                    </div>
                    {{-- Ring tengah --}}
                    <div class="absolute -inset-1.5 rounded-full bg-linear-to-br from-yellow-400/30 to-transparent">
                    </div>

                    <div
                        class="w-52 h-52 md:w-60 md:h-60 lg:w-64 lg:h-64 rounded-full bg-linear-to-br from-red-800 to-red-950 p-0.75 shadow-2xl shadow-red-900/40 relative z-10">
                        <div class="w-full h-full rounded-full overflow-hidden bg-gray-100">
                            <img src="assets/Pak_Deden_Kepala_Sekolah_wm.png" alt="Kepala Sekolah"
                                style="width: 100%; height: 140%; object-fit: cover; object-position: center 0%; margin-top: 0;">
                        </div>
                    </div>

                    {{-- Dot aksen kuning --}}
                    <div class="absolute top-2 right-2 w-4 h-4 rounded-full bg-yellow-400 ring-2 ring-white z-20"></div>
                    <div class="absolute bottom-14 -left-2 w-3 h-3 rounded-full bg-red-800/40 z-20"></div>
                </div>

                {{-- Name Badge --}}
                <div class="text-center">
                    <div class="inline-block relative">
                        <div class="bg-white border border-red-100 rounded-2xl px-6 py-3.5 shadow-lg shadow-red-900/10">
                            <div class="w-8 h-0.5 bg-yellow-400 mx-auto mb-2 rounded-full"></div>
                            <p class="text-xs font-bold text-gray-800 whitespace-nowrap">Deden Rachmawan, S.Pd., M.M</p>
                            <p class="text-[10px] text-red-800 font-semibold mt-1">Kepala Sekolah SMAN 1 MATAULI</p>
                        </div>
                        {{-- Active indicator --}}
                        {{-- <div
                            class="absolute -bottom-2.5 left-1/2 -translate-x-1/2 flex items-center gap-1.5 bg-white rounded-full px-3 py-1 shadow-sm border border-gray-100">
                            <div class="w-1.5 h-1.5 rounded-full bg-green-400 animate-pulse"></div>
                            <span class="text-[10px] text-gray-400 font-medium">Aktif Menjabat</span>
                        </div> --}}
                    </div>
                </div>
            </div>

            {{-- ===== KOLOM TENGAH: Deskripsi ===== --}}
            <div
                class="order-1 lg:order-2 scroll-animate opacity-0 translate-y-10 transition-all duration-1000 ease-in-out">

                {{-- Card deskripsi --}}
                <div class="relative group/card">

                    {{-- Glow background --}}
                    <div
                        class="absolute -inset-1 bg-linear-to-br from-red-800/20 via-yellow-400/10 to-red-800/20 rounded-[28px] blur-lg opacity-0 group-hover/card:opacity-100 transition-opacity duration-700">
                    </div>

                    <div class="relative bg-white rounded-3xl overflow-hidden shadow-md border border-gray-100/80">

                        {{-- TOP HEADER STRIP --}}
                        <div class="relative bg-linear-to-r from-red-800 to-red-900 px-8 py-5">
                            {{-- Dot pattern di dalam header --}}
                            <div class="absolute inset-0 opacity-10"
                                style="background-image: radial-gradient(circle, #fff 1px, transparent 1px); background-size: 16px 16px;">
                            </div>
                            {{-- Shine line --}}
                            <div
                                class="absolute bottom-0 left-0 right-0 h-px bg-linear-to-r from-transparent via-yellow-400/50 to-transparent">
                            </div>

                            <div class="relative flex items-center gap-3">
                                {{-- Icon sekolah --}}
                                <div class="w-9 h-9 rounded-xl bg-white/10 flex items-center justify-center shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-400"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3zm6.82 6L12 12.72 5.18 9 12 5.28 18.82 9zM17 15.99l-5 2.73-5-2.73v-3.72L12 15l5-2.73v3.72z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-white font-bold text-sm leading-tight">SMAN 1 Matauli Pandan</p>
                                </div>
                                {{-- Badge akreditasi --}}
                                <div
                                    class="ml-auto flex items-center gap-1.5 bg-yellow-400 text-yellow-900 text-[10px] font-black px-2.5 py-1 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                    </svg>
                                    Akreditasi A (Unggul)
                                </div>
                            </div>
                        </div>

                        {{-- BODY --}}
                        <div class="px-8 pt-7 pb-8">
                            {{-- Quote besar di background --}}
                            <div class="relative">
                                <span
                                    class="absolute -top-3 -left-2 text-7xl font-serif text-red-50 leading-none select-none pointer-events-none">"</span>
                                <p class="relative text-gray-600 text-[15px] leading-[1.85] text-justify">
                                    SMA Negeri 1 Plus Matauli Pandan merupakan sekolah negeri unggulan di bawah naungan
                                    Yayasan
                                    MATAULI dan Kementerian Pendidikan dan Kebudayaan Provinsi Sumatera Utara. Didirikan
                                    pada 14
                                    Juni 1994, hingga tahun 2025 sekolah ini telah meluluskan 30 angkatan dengan lebih
                                    dari
                                    8.000 alumni.
                                </p>
                            </div>

                            {{-- CTA --}}
                            <div class="mt-5 flex items-center justify-between">
                                <a href="/sejarah"
                                    class="group/btn inline-flex items-center gap-2 bg-red-800 hover:bg-red-900 text-white font-bold px-6 py-2.5 rounded-full transition-all duration-300 hover:gap-3 shadow-lg shadow-red-900/25 text-sm">
                                    <span>Selengkapnya</span>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4 group-hover/btn:translate-x-1 transition-transform duration-300"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- ===== KOLOM KANAN: Ketua Umum ===== --}}
            <div
                class="flex flex-col items-center order-3 scroll-animate opacity-0 translate-x-10 transition-all duration-700 ease-in-out">

                {{-- Foto dengan ring bertingkat --}}
                <div class="relative mb-12">
                    {{-- Ring terluar animasi berlawanan arah --}}
                    <div
                        class="absolute -inset-4 rounded-full border border-red-200/60 border-dashed animate-[spin_20s_linear_infinite_reverse]">
                    </div>
                    {{-- Ring tengah --}}
                    <div class="absolute -inset-1.5 rounded-full bg-linear-to-bl from-yellow-400/30 to-transparent">
                    </div>

                    <div
                        class="w-52 h-52 md:w-60 md:h-60 lg:w-64 lg:h-64 rounded-full bg-linear-to-br from-red-800 to-red-950 p-0.75 shadow-2xl shadow-red-900/40 relative z-10">
                        <div class="w-full h-full rounded-full overflow-hidden bg-gray-100">
                            <img src="assets/Ibu_Fitri_Ketua_Umum_wm.png" alt="Ketua Umum"
                                style="width: 100%; height: 110%; object-fit: cover; object-position: center 0%; margin-top: 0;">
                        </div>
                    </div>

                    {{-- Dot aksen --}}
                    <div class="absolute top-2 left-2 w-4 h-4 rounded-full bg-yellow-400 ring-2 ring-white z-20"></div>
                    <div class="absolute bottom-14 -right-2 w-3 h-3 rounded-full bg-red-800/40 z-20"></div>
                </div>

                {{-- Name Badge --}}
                <div class="text-center">
                    <div class="inline-block relative">
                        <div class="bg-white border border-red-100 rounded-2xl px-6 py-3.5 shadow-lg shadow-red-900/10">
                            <div class="w-8 h-0.5 bg-yellow-400 mx-auto mb-2 rounded-full"></div>
                            <p class="text-xs font-bold text-gray-800 whitespace-nowrap">Fitri Krisnawati Tandjung, B.Sc
                            </p>
                            <p class="text-[10px] text-red-800 font-semibold mt-1">Ketua Umum Yayasan MATAULI</p>
                        </div>
                        {{-- Active indicator --}}
                        {{-- <div
                            class="absolute -bottom-2.5 left-1/2 -translate-x-1/2 flex items-center gap-1.5 bg-white rounded-full px-3 py-1 shadow-sm border border-gray-100">
                            <div class="w-1.5 h-1.5 rounded-full bg-green-400 animate-pulse"></div>
                            <span class="text-[10px] text-gray-400 font-medium">Aktif Menjabat</span>
                        </div> --}}
                    </div>
                </div>
            </div>

        </div>

        {{-- ===================== --}}
        {{-- STATISTICS BANNER --}}
        {{-- ===================== --}}
        <div class="relative rounded-3xl overflow-hidden">
            {{-- BG gradient --}}
            <div class="absolute inset-0 bg-linear-to-r from-red-900 via-red-800 to-red-900"></div>
            {{-- Dot pattern overlay --}}
            <div class="absolute inset-0 opacity-10"
                style="background-image: radial-gradient(circle, #fff 1px, transparent 1px); background-size: 20px 20px;">
            </div>
            {{-- Shine effect --}}
            <div class="absolute top-0 left-0 right-0 h-px bg-linear-to-r from-transparent via-white/30 to-transparent">
            </div>
            <div
                class="absolute bottom-0 left-0 right-0 h-px bg-linear-to-r from-transparent via-white/10 to-transparent">
            </div>

            <div class="relative grid grid-cols-2 md:grid-cols-4">

                {{-- Stat 1: Peserta Didik --}}
                <div
                    class="group flex flex-col items-center justify-center text-center px-6 py-10 border-r border-b md:border-b-0 border-white/10 hover:bg-white/5 transition-colors duration-300">
                    <p
                        class="text-4xl md:text-5xl font-bold text-white mb-2 group-hover:scale-110 transition-transform duration-300">
                        1,193</p>
                    <div
                        class="w-5 h-0.5 bg-yellow-400 mx-auto mb-3 group-hover:w-10 transition-all duration-500 rounded-full">
                    </div>
                    <p class="text-red-200 text-xs font-semibold tracking-widest uppercase">Peserta Didik</p>
                </div>

                {{-- Stat 2: Guru --}}
                <div
                    class="group flex flex-col items-center justify-center text-center px-6 py-10 border-r-0 md:border-r border-b md:border-b-0 border-white/10 hover:bg-white/5 transition-colors duration-300">
                    <p
                        class="text-4xl md:text-5xl font-bold text-yellow-400 mb-2 group-hover:scale-110 transition-transform duration-300">
                        85</p>
                    <div
                        class="w-5 h-0.5 bg-white/40 mx-auto mb-3 group-hover:w-10 transition-all duration-500 rounded-full">
                    </div>
                    <p class="text-red-200 text-xs font-semibold tracking-widest uppercase">Guru</p>
                </div>

                {{-- Stat 3: Tendik --}}
                <div
                    class="group flex flex-col items-center justify-center text-center px-6 py-10 border-r border-white/10 hover:bg-white/5 transition-colors duration-300">
                    <p
                        class="text-4xl md:text-5xl font-bold text-white mb-2 group-hover:scale-110 transition-transform duration-300">
                        54</p>
                    <div
                        class="w-5 h-0.5 bg-yellow-400 mx-auto mb-3 group-hover:w-10 transition-all duration-500 rounded-full">
                    </div>
                    <p class="text-red-200 text-xs font-semibold tracking-widest uppercase">Tendik</p>
                </div>

                {{-- Stat 4: Rombongan Belajar --}}
                <div
                    class="group flex flex-col items-center justify-center text-center px-6 py-10 hover:bg-white/5 transition-colors duration-300">
                    <p
                        class="text-4xl md:text-5xl font-bold text-yellow-400 mb-2 group-hover:scale-110 transition-transform duration-300">
                        34</p>
                    <div
                        class="w-5 h-0.5 bg-white/40 mx-auto mb-3 group-hover:w-10 transition-all duration-500 rounded-full">
                    </div>
                    <p class="text-red-200 text-xs font-semibold tracking-widest uppercase">Rombongan Belajar</p>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- ============================================ -->
<!-- TENTANG KAMI SECTION - END -->
<!-- ============================================ -->
