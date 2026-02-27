<!-- ============================================ -->
<!-- PEMINATAN JURUSAN SECTION - START -->
<!-- ============================================ -->
<section id="peminatan-jurusan" class="py-12 md:py-16 lg:py-20 bg-white">
    <div class="relative mx-auto px-4 sm:px-6 md:px-12 lg:px-24 xl:px-32">

        {{-- ===================== --}}
        {{-- SECTION HEADER --}}
        {{-- ===================== --}}
        <div class="text-center mb-12 md:mb-16">
            <h2 class="mt-3 text-3xl md:text-4xl lg:text-5xl font-bold text-black">Program Sekolah</h2>
            <div class="mt-4 mx-auto w-14 h-1 bg-yellow-400 rounded-full"></div>
        </div>

        {{-- ===================== --}}
        {{-- PROGRAM GRID --}}
        {{-- 1 kolom (mobile) → 2 kolom (tablet) → 3 kolom (desktop) --}}
        {{-- ===================== --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10 max-w-6xl mx-auto items-stretch">

            {{-- ===== CARD: Program Pre-IB ===== --}}
            <a href="{{ url('/program/pre-ib') }}" class="group block h-full">
                <div
                    class="relative bg-white rounded-2xl shadow-md overflow-hidden border border-gray-100 hover:-translate-y-2 hover:shadow-2xl hover:shadow-red-900/10 hover:border-red-100 transition-all duration-500 h-full flex flex-col">

                    {{-- IMAGE CONTAINER --}}
                    <div class="relative h-52 md:h-60 overflow-hidden">
                        <img src="{{ asset('assets/ipa-jurusan.jpg') }}" alt="Program Pre-IB"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                        <div class="absolute inset-0 bg-linear-to-t from-black/30 to-transparent"></div>
                        <div
                            class="absolute top-4 left-4 bg-red-800 text-white text-xs font-semibold tracking-widest uppercase px-3 py-1 rounded-full">
                            Pre-IB
                        </div>
                    </div>

                    {{-- CARD CONTENT --}}
                    <div class="p-6 md:p-8 flex flex-col flex-1">
                        <h3
                            class="text-xl md:text-2xl font-bold text-gray-900 mb-3 group-hover:text-red-800 transition-colors duration-300 leading-snug">
                            Program Pre-Internasional Baccalaureate
                        </h3>
                        <div class="w-8 h-0.5 bg-yellow-400 mb-4 group-hover:w-14 transition-all duration-500"></div>
                        <p class="text-gray-500 text-sm md:text-base leading-relaxed mb-6 flex-1">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore beatae obcaecati dignissimos
                            molestias, accusamus laboriosam delectus vero aperiam qui earum voluptate cum deleniti.
                        </p>
                        <div
                            class="inline-flex items-center gap-2 text-red-800 font-semibold text-sm group-hover:gap-4 transition-all duration-300">
                            <span>Selengkapnya</span>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 group-hover:translate-x-1 transition-transform duration-300"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>
            </a>

            {{-- ===== CARD: Program Kemataulian ===== --}}
            <a href="{{ url('/program/kemataulian') }}" class="group block h-full">
                <div
                    class="relative bg-white rounded-2xl shadow-md overflow-hidden border border-gray-100 hover:-translate-y-2 hover:shadow-2xl hover:shadow-red-900/10 hover:border-red-100 transition-all duration-500 h-full flex flex-col">

                    {{-- IMAGE CONTAINER --}}
                    <div class="relative h-52 md:h-60 overflow-hidden">
                        <img src="{{ asset('assets/ips-jurusan.jpg') }}" alt="Program Kemataulian"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                        <div class="absolute inset-0 bg-linear-to-t from-black/30 to-transparent"></div>
                        <div
                            class="absolute top-4 left-4 bg-red-800 text-white text-xs font-semibold tracking-widest uppercase px-3 py-1 rounded-full">
                            Kemataulian
                        </div>
                    </div>

                    {{-- CARD CONTENT --}}
                    <div class="p-6 md:p-8 flex flex-col flex-1">
                        <h3
                            class="text-xl md:text-2xl font-bold text-gray-900 mb-3 group-hover:text-red-800 transition-colors duration-300 leading-snug">
                            Program Khusus Kemataulian
                        </h3>
                        <div class="w-8 h-0.5 bg-yellow-400 mb-4 group-hover:w-14 transition-all duration-500"></div>
                        <p class="text-gray-500 text-sm md:text-base leading-relaxed mb-6 flex-1">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore beatae obcaecati dignissimos
                            molestias, accusamus laboriosam delectus vero aperiam qui earum voluptate cum deleniti.
                        </p>
                        <div
                            class="inline-flex items-center gap-2 text-red-800 font-semibold text-sm group-hover:gap-4 transition-all duration-300">
                            <span>Selengkapnya</span>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 group-hover:translate-x-1 transition-transform duration-300"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>
            </a>

            {{-- ===== CARD: Program Kemendikdasmen ===== --}}
            <a href="{{ url('/program/kemendikdasmen') }}" class="group block md:col-span-2 lg:col-span-1 h-full">
                <div
                    class="relative bg-white rounded-2xl shadow-md overflow-hidden border border-gray-100 hover:-translate-y-2 hover:shadow-2xl hover:shadow-red-900/10 hover:border-red-100 transition-all duration-500 h-full flex flex-col">

                    {{-- IMAGE CONTAINER --}}
                    <div class="relative h-52 md:h-60 overflow-hidden">
                        <img src="{{ asset('assets/ipa-jurusan.jpg') }}" alt="Program Kemendikdasmen"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                        <div class="absolute inset-0 bg-linear-to-t from-black/30 to-transparent"></div>
                        <div
                            class="absolute top-4 left-4 bg-red-800 text-white text-xs font-semibold tracking-widest uppercase px-3 py-1 rounded-full">
                            Kemendikdasmen
                        </div>
                    </div>

                    {{-- CARD CONTENT --}}
                    <div class="p-6 md:p-8 flex flex-col flex-1">
                        <h3
                            class="text-xl md:text-2xl font-bold text-gray-900 mb-3 group-hover:text-red-800 transition-colors duration-300 leading-snug">
                            Program Kemendikdasmen
                        </h3>
                        <div class="w-8 h-0.5 bg-yellow-400 mb-4 group-hover:w-14 transition-all duration-500"></div>
                        <p class="text-gray-500 text-sm md:text-base leading-relaxed mb-6 flex-1">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore beatae obcaecati dignissimos
                            molestias, accusamus laboriosam delectus vero aperiam qui earum voluptate cum deleniti.
                        </p>
                        <div
                            class="inline-flex items-center gap-2 text-red-800 font-semibold text-sm group-hover:gap-4 transition-all duration-300">
                            <span>Selengkapnya</span>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 group-hover:translate-x-1 transition-transform duration-300"
                                viewBox="0 0 20 20" fill="currentColor">
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
</section>
<!-- ============================================ -->
<!-- PEMINATAN JURUSAN SECTION - END -->
<!-- ============================================ -->
