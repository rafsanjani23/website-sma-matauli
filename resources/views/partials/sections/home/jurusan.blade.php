<!-- ============================================ -->
<!-- PEMINATAN JURUSAN SECTION - START -->
<!-- ============================================ -->
<section id="peminatan-jurusan" class="py-12 md:py-16 lg:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 md:px-12 lg:px-24 xl:px-32">

        <!-- Section Title -->
        <div class="text-center mb-12 md:mb-16">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-matauli-red-dark mb-4">
                Peminatan Jurusan
            </h2>
            <div class="w-20 md:w-24 h-1 bg-yellow-400 mx-auto"></div>
        </div>

        <!-- Jurusan Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-10 max-w-4xl mx-auto">

            <!-- IPA Card -->
            <a href="{{ url('/program/ipa') }}" class="group block">
                <div
                    class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border-2 border-gray-100 hover:border-yellow-400 cursor-pointer">
                    <!-- Image Container -->
                    <div class="relative h-48 md:h-56 overflow-hidden">
                        <img src="{{ asset('assets/ipa-jurusan.jpg') }}" alt="Jurusan IPA"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <!-- Label Badge -->
                        <div
                            class="absolute top-4 left-4 bg-yellow-400 text-black font-bold px-4 py-2 rounded-lg shadow-lg">
                            IPA
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="p-6 md:p-8 text-center">
                        <h3
                            class="text-2xl md:text-3xl font-bold text-gray-900 mb-3 group-hover:text-matauli-red-dark transition-colors">
                            Ilmu Pengetahuan Alam</h3>
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed mb-4">
                            Fokus pada Matematika, Fisika, Kimia, dan Biologi untuk persiapan karir di bidang sains
                            dan teknologi.
                        </p>
                        <!-- CTA Arrow -->
                        <div
                            class="inline-flex items-center gap-2 text-matauli-red-dark font-semibold group-hover:gap-3 transition-all">
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

            <!-- IPS Card -->
            <a href="{{ url('/program/ips') }}" class="group block">
                <div
                    class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border-2 border-gray-100 hover:border-yellow-400 cursor-pointer">
                    <!-- Image Container -->
                    <div class="relative h-48 md:h-56 overflow-hidden">
                        <img src="{{ asset('assets/ips-jurusan.jpg') }}" alt="Jurusan IPS"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <!-- Label Badge -->
                        <div
                            class="absolute top-4 left-4 bg-yellow-400 text-black font-bold px-4 py-2 rounded-lg shadow-lg">
                            IPS
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="p-6 md:p-8 text-center">
                        <h3
                            class="text-2xl md:text-3xl font-bold text-gray-900 mb-3 group-hover:text-matauli-red-dark transition-colors">
                            Ilmu Pengetahuan Sosial</h3>
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed mb-4">
                            Fokus pada Ekonomi, Sosiologi, Geografi, dan Sejarah untuk persiapan karir di bidang
                            sosial dan humaniora.
                        </p>
                        <!-- CTA Arrow -->
                        <div
                            class="inline-flex items-center gap-2 text-matauli-red-dark font-semibold group-hover:gap-3 transition-all">
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
    </div>
    </div>

    </div>

    </div>
</section>
<!-- ============================================ -->
<!-- PEMINATAN JURUSAN SECTION - END -->
<!-- ============================================ -->
