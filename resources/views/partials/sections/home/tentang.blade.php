<!-- ============================================ -->
<!-- TENTANG KAMI SECTION - START -->
<!-- ============================================ -->
<section id="tentang-kami" class="py-8 md:py-10 lg:py-12 bg-[#fff9f9]">
    <div class="container mx-auto px-4 sm:px-6 md:px-12 lg:px-24 xl:px-32">

        {{-- ===================== --}}
        {{-- SECTION HEADER --}}
        {{-- ===================== --}}
        <div class="text-center mb-14 md:mb-20">
            {{-- <span class="text-xs font-semibold tracking-[0.3em] uppercase text-red-800">Siapa Kami</span> --}}
            <h2 class="mt-3 text-3xl md:text-4xl lg:text-5xl font-bold text-black">Tentang Kami</h2>
            <div class="mt-5 mx-auto w-14 h-0.5 bg-yellow-400 rounded-full">
            </div>
        </div>

        {{-- ===================== --}}
        {{-- PROFILE GRID --}}
        {{-- Foto kiri — Deskripsi tengah — Foto kanan --}}
        {{-- ===================== --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12 mb-16 md:mb-20 items-center">

            {{-- ===== KOLOM KIRI: Kepala Sekolah ===== --}}
            <div
                class="flex flex-col items-center order-2 lg:order-1 scroll-animate opacity-0 -translate-x-10 transition-all duration-700 ease-in-out">

                {{-- FOTO CIRCLE dengan ring dekoratif --}}
                <div class="relative mb-10">
                    {{-- Ring luar dekoratif --}}
                    <div
                        class="w-52 h-52 md:w-60 md:h-60 lg:w-64 lg:h-64 rounded-full bg-linear-to-br from-red-800 to-red-950 p-1.5 shadow-2xl shadow-red-900/30">
                        <div class="w-full h-full rounded-full overflow-hidden bg-gray-100">
                            <img src="assets/pak kepsek deden_merah maroon.png" alt="Kepala Sekolah"
                                class="w-full h-full object-cover">
                        </div>
                    </div>

                    {{-- NAME BADGE --}}
                    <div
                        class="absolute -bottom-5 left-1/2 -translate-x-1/2 w-max bg-linear-to-r from-red-800 to-red-900 text-white px-5 py-2.5 rounded-xl shadow-lg shadow-red-900/40 text-center">
                        <p class="text-xs font-bold whitespace-nowrap">DEDEN RACHMAWAN, S.Pd., M.M</p>
                        <p class="text-[10px] text-yellow-400 font-semibold mt-0.5">Kepala Sekolah SMAN 1 MATAULI</p>
                    </div>
                </div>
            </div>

            {{-- ===== KOLOM TENGAH: Deskripsi ===== --}}
            <div
                class="order-1 lg:order-2 flex flex-col items-center scroll-animate opacity-0 translate-y-10 transition-all duration-1000 ease-in-out">

                <p class="text-gray-700 text-base md:text-lg leading-relaxed text-justify -mt-2">
                    SMA Negeri 1 Plus Matauli Pandan merupakan sekolah negeri unggulan di bawah naungan Yayasan
                    MATAULI dan Kementerian Pendidikan dan Kebudayaan Provinsi Sumatera Utara. Didirikan pada 14
                    Juni 1994, hingga tahun 2025 sekolah ini telah meluluskan 30 angkatan dengan lebih dari
                    8.000 alumni.
                </p>

                {{-- GARIS DEKORATIF --}}
                {{-- <div class="mt-6 w-14 h-0.5 bg-linear-to-r from-red-800 to-yellow-500 rounded-full"></div> --}}
            </div>

            {{-- ===== KOLOM KANAN: Ketua Umum ===== --}}
            <div
                class="flex flex-col items-center order-3 scroll-animate opacity-0 translate-x-10 transition-all duration-700 ease-in-out">

                {{-- FOTO CIRCLE --}}
                <div class="relative mb-10">
                    <div
                        class="w-52 h-52 md:w-60 md:h-60 lg:w-64 lg:h-64 rounded-full bg-linear-to-br from-red-800 to-red-950 p-1.5 shadow-2xl shadow-red-900/30">
                        <div class="w-full h-full rounded-full overflow-hidden bg-gray-100">
                            <img src="assets/bu ketum fitri crop.png" alt="Ketua Umum"
                                style="width: 100%; height: 90%; object-fit: cover; object-position: center 0%; margin-top: 0;">
                        </div>
                    </div>

                    {{-- NAME BADGE --}}
                    <div
                        class="absolute -bottom-5 left-1/2 -translate-x-1/2 w-max bg-linear-to-r from-red-800 to-red-900 text-white px-5 py-2.5 rounded-xl shadow-lg shadow-red-900/40 text-center">
                        <p class="text-xs font-bold whitespace-nowrap">Fitri Krisnawati Tandjung, B.Sc</p>
                        <p class="text-[10px] text-yellow-400 font-semibold mt-0.5">Ketua Umum Yayasan</p>
                    </div>
                </div>
            </div>

        </div>

        {{-- ===================== --}}
        {{-- STATISTICS --}}
        {{-- 3 kartu statistik dengan background merah --}}
        {{-- ===================== --}}
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 md:gap-6 max-w-4xl mx-auto mb-12 md:mb-14">

            {{-- Stat 1: Peserta Didik --}}
            <div
                class="group relative bg-white border border-red-100 rounded-2xl p-6 text-center shadow-sm hover:shadow-xl hover:shadow-red-900/10 hover:-translate-y-1 transition-all duration-300 overflow-hidden">
                {{-- TOP ACCENT --}}
                <h3 class="text-4xl md:text-5xl font-bold text-red-800 mb-2">2,550+</h3>
                <div class="w-8 h-0.5 bg-yellow-400 mx-auto mb-2 group-hover:w-14 transition-all duration-500">
                </div>
                <p class="text-gray-500 text-sm font-medium">Peserta Didik</p>
            </div>

            {{-- Stat 2: Guru --}}
            <div
                class="group relative bg-red-800 rounded-2xl p-6 text-center shadow-md hover:shadow-xl hover:shadow-red-900/30 hover:-translate-y-1 transition-all duration-300 overflow-hidden">
                {{-- TOP ACCENT --}}
                <h3 class="text-4xl md:text-5xl font-bold text-white mb-2">999</h3>
                <div class="w-8 h-0.5 bg-yellow-400 mx-auto mb-2 group-hover:w-14 transition-all duration-500"></div>
                <p class="text-red-200 text-sm font-medium">Guru</p>
            </div>

            {{-- Stat 3: Tendik --}}
            <div
                class="group relative bg-white rounded-2xl p-6 text-center shadow-md hover:shadow-xl hover:shadow-red-900/30 hover:-translate-y-1 transition-all duration-300 overflow-hidden">
                {{-- TOP ACCENT --}}
                <h3 class="text-4xl md:text-5xl font-bold text-red-800 mb-2">999</h3>
                <div class="w-8 h-0.5 bg-yellow-400 mx-auto mb-2 group-hover:w-14 transition-all duration-500"></div>
                <p class="text-gray-500 text-sm font-medium">Tendik</p>
            </div>

            {{-- Stat 4: Rombongan Belajar --}}
            <div
                class="group relative bg-red-800 border border-red-100 rounded-2xl p-6 text-center shadow-sm hover:shadow-xl hover:shadow-red-900/10 hover:-translate-y-1 transition-all duration-300 overflow-hidden">
                {{-- TOP ACCENT --}}
                <h3 class="text-4xl md:text-5xl font-bold text-white mb-2">999</h3>
                <div class="w-8 h-0.5 bg-yellow-400 mx-auto mb-2 group-hover:w-14 transition-all duration-500">
                </div>
                <p class="text-red-200 text-sm font-medium">Rombongan Belajar</p>
            </div>


        </div>

        {{-- ===================== --}}
        {{-- CTA BUTTON --}}
        {{-- ===================== --}}
        <div class="text-center">
            <a href="/tentang-kami"
                class="group inline-flex items-center gap-2 bg-red-800 hover:bg-red-900 text-white font-bold px-8 py-3 rounded-full transition-all duration-300 hover:gap-4 shadow-lg shadow-red-900/30 text-sm md:text-base">
                <span>Selengkapnya</span>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4 group-hover:translate-x-1 transition-transform duration-300" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>

    </div>
</section>
<!-- ============================================ -->
<!-- TENTANG KAMI SECTION - END -->
<!-- ============================================ -->
