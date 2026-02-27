<section id="berita-prestasi-testi" class="py-12 bg-gray-50">
    <div class="mx-auto px-10">

        <!-- Header -->
        <header class="text-center mb-10 md:mb-12">
            <span class="text-xs font-semibold tracking-[0.3em] uppercase text-black">Informasi Terkini</span>
            <h2 class="mt-3 text-3xl md:text-4xl lg:text-5xl font-bold text-black">Berita, Prestasi & Testimonials</h2>
            <div class="mt-4 mx-auto w-14 h-1 bg-yellow-400 rounded-full"></div>
        </header>

        <!-- Tab List -->
        <div class="flex justify-center mb-5">
            <div role="tablist" aria-orientation="horizontal"
                class="inline-flex justify-center gap-2 p-1 bg-matauli-red-dark rounded-full w-md md:w-lg">
                <button role="tab" id="tab-berita" aria-selected="true" aria-controls="gallery-berita"
                    class="px-8 lg:px-12 py-3 rounded-full text-md font-medium transition-all duration-200
                 outline-none focus:ring-2
                 aria-selected:bg-matauli-yellow
                 aria-selected:text-matauli-red-dark
                 aria-selected:shadow-lg
                 text-matauli-yellow hover:text-gray-200">
                    Berita
                </button>

                <button role="tab" id="tab-prestasi" aria-selected="false" aria-controls="gallery-prestasi"
                    class="px-8 lg:px-12 py-3 rounded-full text-sm font-medium transition-all duration-200
                 outline-none focus:ring-2
                 aria-selected:bg-matauli-yellow
                 aria-selected:text-matauli-red-dark
                 aria-selected:shadow-lg
                 text-matauli-yellow hover:text-gray-200">
                    Prestasi
                </button>

                <button role="tab" id="tab-testimoni" aria-selected="false" aria-controls="gallery-testimoni"
                    class="px-8 lg:px-12 py-3 rounded-full text-sm font-medium transition-all duration-200
                 outline-none focus:ring-2
                 aria-selected:bg-matauli-yellow
                 aria-selected:text-matauli-red-dark
                 aria-selected:shadow-lg
                 text-matauli-yellow hover:text-gray-200">
                    Testimonials
                </button>
            </div>
        </div>

        <!-- Panels -->
        <div id="gallery-berita" role="tabpanel" aria-labelledby="tab-berita">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div
                    class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden group">
                    <!-- Image -->
                    <div class="relative h-48 md:h-52 bg-linear-to-br from-red-800 to-red-900 overflow-hidden">
                        <div class="absolute inset-0 bg-black/30 group-hover:bg-black/40 transition-colors"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg class="w-20 h-20 text-white/70" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" />
                            </svg>
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="p-5 md:p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span
                                class="text-xs font-semibold text-matauli-red-dark bg-red-50 px-3 py-1 rounded-full">JUDUL
                                BERITA</span>
                        </div>
                        <p class="text-gray-600 text-xs md:text-sm mb-4">
                            Ringkasan berita . . . . . . . . .
                        </p>
                        <!-- Facebook Link -->
                        <a href="#"
                            class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 font-semibold text-sm transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                            Lihat di Facebook
                        </a>
                    </div>
                </div>
                <div
                    class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden group">
                    <!-- Image -->
                    <div class="relative h-48 md:h-52 bg-linear-to-br from-red-800 to-red-900 overflow-hidden">
                        <div class="absolute inset-0 bg-black/30 group-hover:bg-black/40 transition-colors"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg class="w-20 h-20 text-white/70" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" />
                            </svg>
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="p-5 md:p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span
                                class="text-xs font-semibold text-matauli-red-dark bg-red-50 px-3 py-1 rounded-full">JUDUL
                                BERITA</span>
                        </div>
                        <p class="text-gray-600 text-xs md:text-sm mb-4">
                            Ringkasan berita . . . . . . . . .
                        </p>
                        <!-- Facebook Link -->
                        <a href="#"
                            class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 font-semibold text-sm transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                            Lihat di Facebook
                        </a>
                    </div>
                </div>
                <div
                    class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden group">
                    <!-- Image -->
                    <div class="relative h-48 md:h-52 bg-linear-to-br from-red-800 to-red-900 overflow-hidden">
                        <div class="absolute inset-0 bg-black/30 group-hover:bg-black/40 transition-colors"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg class="w-20 h-20 text-white/70" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" />
                            </svg>
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="p-5 md:p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span
                                class="text-xs font-semibold text-matauli-red-dark bg-red-50 px-3 py-1 rounded-full">JUDUL
                                BERITA</span>
                        </div>
                        <p class="text-gray-600 text-xs md:text-sm mb-4">
                            Ringkasan berita . . . . . . . . .
                        </p>
                        <!-- Facebook Link -->
                        <a href="#"
                            class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 font-semibold text-sm transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                            Lihat di Facebook
                        </a>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="/dokumentasi#berita"
                    class="mt-10 group inline-flex items-center gap-2 bg-yellow-400 hover:bg-yellow-500 text-black font-bold px-8 py-3 rounded-full transition-all duration-300 hover:gap-4 shadow-lg shadow-yellow-900/30 text-sm md:text-base">
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

        <div id="gallery-prestasi" role="tabpanel" aria-labelledby="tab-prestasi" class="hidden">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Prestasi Card 1 -->
                <a href="/prestasi/olimpiade-matematika" class="group block">
                    <div
                        class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 hover:border-yellow-400 h-full">

                        <!-- Image -->
                        <div class="relative h-48 overflow-hidden">
                            <img src="{{ asset('assets/Prestasi1.jpg') }}" alt="Prestasi Olimpiade Matematika"
                                class="w-full h-full object-cover transition-transform duration-500">

                            <!-- Badge -->
                            <div
                                class="absolute bottom-4 left-4 bg-yellow-400 text-black font-bold px-3 py-1.5 rounded-lg text-xs shadow-lg">
                                Olimpiade Matematika
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-6 flex flex-col justify-between h-47.5">
                            <div>
                                <h4
                                    class="text-base md:text-lg font-bold text-gray-900 mb-2 group-hover:text-matauli-red-dark transition-colors">
                                    Juara 1 Olimpiade Matematika
                                </h4>
                                <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                                    Tingkat Provinsi Sumatera Utara 2025.
                                </p>
                            </div>

                            <!-- CTA Arrow -->
                            <div
                                class="mt-4 inline-flex items-center gap-2 text-matauli-red-dark font-semibold group-hover:gap-3 transition-all">
                                <span>Selengkapnya</span>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 group-hover:translate-x-1 transition-transform" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Prestasi Card 2 -->
                <a href="/prestasi/karya-tulis-ilmiah" class="group block">
                    <div
                        class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 hover:border-yellow-400 h-full">

                        <!-- Image -->
                        <div class="relative h-48 overflow-hidden">
                            <img src="{{ asset('assets/Prestasi2.jpg') }}" alt="Prestasi Karya Tulis Ilmiah"
                                class="w-full h-full object-cover transition-transform duration-500">

                            <!-- Badge -->
                            <div
                                class="absolute bottom-4 left-4 bg-yellow-400 text-black font-bold px-3 py-1.5 rounded-lg text-xs shadow-lg">
                                Karya Tulis Ilmiah
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-6 flex flex-col justify-between h-47.5">
                            <div>
                                <h4
                                    class="text-base md:text-lg font-bold text-gray-900 mb-2 group-hover:text-matauli-red-dark transition-colors">
                                    Juara 2 Lomba Karya Tulis Ilmiah
                                </h4>
                                <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                                    Tingkat Nasional.
                                </p>
                            </div>

                            <!-- CTA Arrow -->
                            <div
                                class="mt-4 inline-flex items-center gap-2 text-matauli-red-dark font-semibold group-hover:gap-3 transition-all">
                                <span>Selengkapnya</span>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 group-hover:translate-x-1 transition-transform" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Prestasi Card 3 -->
                <a href="/prestasi/kompetisi-robotika" class="group block">
                    <div
                        class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 hover:border-yellow-400 h-full">

                        <!-- Image -->
                        <div class="relative h-48 overflow-hidden">
                            <img src="{{ asset('assets/Prestasi3.jpg') }}" alt="Prestasi Kompetisi Robotika"
                                class="w-full h-full object-cover transition-transform duration-500">

                            <!-- Badge -->
                            <div
                                class="absolute bottom-4 left-4 bg-yellow-400 text-black font-bold px-3 py-1.5 rounded-lg text-xs shadow-lg">
                                Kompetisi Robotika
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-6 flex flex-col justify-between h-47.5">
                            <div>
                                <h4
                                    class="text-base md:text-lg font-bold text-gray-900 mb-2 group-hover:text-matauli-red-dark transition-colors">
                                    Juara 1 Kompetisi Robotika
                                </h4>
                                <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                                    Regional Sumatera.
                                </p>
                            </div>

                            <!-- CTA Arrow -->
                            <div
                                class="mt-4 inline-flex items-center gap-2 text-matauli-red-dark font-semibold group-hover:gap-3 transition-all">
                                <span>Selengkapnya</span>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 group-hover:translate-x-1 transition-transform" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="text-center">
                <a href="/program#prestasi-siswa"
                    class="mt-10 group inline-flex items-center gap-2 bg-yellow-400 hover:bg-yellow-500 text-black font-bold px-8 py-3 rounded-full transition-all duration-300 hover:gap-4 shadow-lg shadow-yellow-900/30 text-sm md:text-base">
                    Lihat Semua Prestasi
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>

        <div id="gallery-testimoni" role="tabpanel" aria-labelledby="tab-testimoni" class="hidden">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Testimonial Card 1 -->
                <div
                    class="bg-linear-to-brrom-gray-50 to-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 p-6 md:p-8 border border-gray-100">
                    <!-- Avatar -->
                    <div class="flex flex-col items-center mb-6">
                        <div
                            class="w-20 h-20 md:w-24 md:h-24 rounded-full overflow-hidden mb-4 shadow-lg ring-4 ring-yellow-400/30">
                            <img src="{{ asset('assets/Anime1.jpg') }}" alt="Ahmad Fauzi Alumni"
                                class="w-full h-full object-cover">
                        </div>
                        <h4 class="font-bold text-gray-900 text-base md:text-lg">Ahmad Fauzi</h4>
                        <p class="text-sm text-gray-500">Alumni 2024</p>
                    </div>
                    <!-- Quote -->
                    <div class="relative">
                        <svg class="absolute -top-2 -left-2 w-8 h-8 text-yellow-400/20" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path d="M6 17h3l2-4V7H5v6h3zm8 0h3l2-4V7h-6v6h3z" />
                        </svg>
                        <p class="text-gray-700 text-sm md:text-base leading-relaxed italic pl-6">
                            "SMAN 1 Matauli Pandan memberikan pengalaman belajar yang luar biasa. Guru-guru profesional
                            dan fasilitas modern membuat saya siap menghadapi dunia perkuliahan."
                        </p>
                    </div>
                </div>

                <!-- Testimonial Card 2 -->
                <div
                    class="bg-linear-to-br from-gray-50 to-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 p-6 md:p-8 border border-gray-100">
                    <!-- Avatar -->
                    <div class="flex flex-col items-center mb-6">
                        <div
                            class="w-20 h-20 md:w-24 md:h-24 rounded-full overflow-hidden mb-4 shadow-lg ring-4 ring-yellow-400/30">
                            <img src="{{ asset('assets/Anime2.jpg') }}" alt="Siti Nurhaliza Alumni"
                                class="w-full h-full object-cover">
                        </div>
                        <h4 class="font-bold text-gray-900 text-base md:text-lg">Siti Nurhaliza</h4>
                        <p class="text-sm text-gray-500">Alumni 2023</p>
                    </div>
                    <!-- Quote -->
                    <div class="relative">
                        <svg class="absolute -top-2 -left-2 w-8 h-8 text-yellow-400/20" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path d="M6 17h3l2-4V7H5v6h3zm8 0h3l2-4V7h-6v6h3z" />
                        </svg>
                        <p class="text-gray-700 text-sm md:text-base leading-relaxed italic pl-6">
                            "Lingkungan belajar yang kondusif dan teman-teman yang suportif membuat masa SMA saya penuh
                            kenangan indah. Terima kasih SMAN 1 Matauli Pandan!"
                        </p>
                    </div>
                </div>

                <!-- Testimonial Card 3 -->
                <div
                    class="bg-linear-to-br from-gray-50 to-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 p-6 md:p-8 border border-gray-100">
                    <!-- Avatar -->
                    <div class="flex flex-col items-center mb-6">
                        <div
                            class="w-20 h-20 md:w-24 md:h-24 rounded-full overflow-hidden mb-4 shadow-lg ring-4 ring-yellow-400/30">
                            <img src="{{ asset('assets/Anime3.jpg') }}" alt="Budi Santoso Alumni"
                                class="w-full h-full object-cover">
                        </div>
                        <h4 class="font-bold text-gray-900 text-base md:text-lg">Budi Santoso</h4>
                        <p class="text-sm text-gray-500">Alumni 2022</p>
                    </div>
                    <!-- Quote -->
                    <div class="relative">
                        <svg class="absolute -top-2 -left-2 w-8 h-8 text-yellow-400/20" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path d="M6 17h3l2-4V7H5v6h3zm8 0h3l2-4V7h-6v6h3z" />
                        </svg>
                        <p class="text-gray-700 text-sm md:text-base leading-relaxed italic pl-6">
                            "Program IB yang ditawarkan sangat membantu saya untuk diterima di universitas luar negeri.
                            Terima kasih atas bimbingan guru-guru hebat!"
                        </p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="/testimonials"
                    class="mt-10 group inline-flex items-center gap-2 bg-yellow-400 hover:bg-yellow-500 text-black font-bold px-8 py-3 rounded-full transition-all duration-300 hover:gap-4 shadow-lg shadow-yellow-900/30 text-sm md:text-base">
                    Selengkapnya
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 md:h-5 md:w-5" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>

    </div>
</section>
