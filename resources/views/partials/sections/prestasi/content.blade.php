<section class="pb-12 md:pb-16 lg:pb-20 bg-white">
    <div class="mx-auto px-4 sm:px-6 lg:px-12 xl:px-24">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        {{-- ===== CARD 1: Olimpiade Matematika ===== --}}
        <a href="{{ route('prestasi-detail') }}" class="group block">
            <div
                class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 hover:border-yellow-400 h-full">

                {{-- Image --}}
                <div class="relative h-48 md:h-52 overflow-hidden">
                    <img src="{{ asset('assets/Prestasi1.jpg') }}" alt="Olimpiade Matematika"
                        class="w-full h-full object-cover transition-transform duration-500">

                    {{-- Badge --}}
                    <div
                        class="absolute bottom-4 left-4 bg-yellow-400 text-black font-bold px-3 py-1.5 rounded-lg text-xs shadow-lg">
                        Olimpiade Matematika
                    </div>
                </div>

                {{-- Content --}}
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

                    {{-- CTA Arrow --}}
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

        {{-- ===== CARD 2: Karya Tulis Ilmiah ===== --}}
        <a href="{{ route('prestasi-detail') }}" class="group block">
            <div
                class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 hover:border-yellow-400 h-full">

                {{-- Image --}}
                <div class="relative h-48 md:h-52 overflow-hidden">
                    <img src="{{ asset('assets/Prestasi2.jpg') }}" alt="Karya Tulis Ilmiah"
                        class="w-full h-full object-cover transition-transform duration-500">

                    {{-- Badge --}}
                    <div
                        class="absolute bottom-4 left-4 bg-yellow-400 text-black font-bold px-3 py-1.5 rounded-lg text-xs shadow-lg">
                        Karya Tulis Ilmiah
                    </div>
                </div>

                {{-- Content --}}
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

                    {{-- CTA Arrow --}}
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

        {{-- ===== CARD 3: Kompetisi Robotika ===== --}}
        <a href="{{ route('prestasi-detail') }}" class="group block">
            <div
                class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 hover:border-yellow-400 h-full">

                {{-- Image --}}
                <div class="relative h-48 md:h-52 overflow-hidden">
                    <img src="{{ asset('assets/Prestasi3.jpg') }}" alt="Kompetisi Robotika"
                        class="w-full h-full object-cover transition-transform duration-500">

                    {{-- Badge --}}
                    <div
                        class="absolute bottom-4 left-4 bg-yellow-400 text-black font-bold px-3 py-1.5 rounded-lg text-xs shadow-lg">
                        Kompetisi Robotika
                    </div>
                </div>

                {{-- Content --}}
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

                    {{-- CTA Arrow --}}
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

        {{-- ===== CARD 4: Debat Bahasa Inggris ===== --}}
        <a href="{{ route('prestasi-detail') }}" class="group block">
            <div
                class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 hover:border-yellow-400 h-full">

                {{-- Image --}}
                <div class="relative h-48 md:h-52 overflow-hidden bg-linear-to-br from-red-800 to-red-900">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white/50" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z" />
                        </svg>
                    </div>

                    {{-- Badge --}}
                    <div
                        class="absolute bottom-4 left-4 bg-yellow-400 text-black font-bold px-3 py-1.5 rounded-lg text-xs shadow-lg">
                        Debat Bahasa Inggris
                    </div>
                </div>

                {{-- Content --}}
                <div class="p-6 flex flex-col justify-between h-47.5">
                    <div>
                        <h4
                            class="text-base md:text-lg font-bold text-gray-900 mb-2 group-hover:text-matauli-red-dark transition-colors">
                            Juara 1 Debat Bahasa Inggris
                        </h4>
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                            Tingkat Nasional.
                        </p>
                    </div>

                    {{-- CTA Arrow --}}
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

        {{-- ===== CARD 5: Olimpiade Fisika ===== --}}
        <a href="{{ route('prestasi-detail') }}" class="group block">
            <div
                class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 hover:border-yellow-400 h-full">

                {{-- Image --}}
                <div class="relative h-48 md:h-52 overflow-hidden bg-linear-to-br from-red-800 to-red-900">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white/50" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z" />
                        </svg>
                    </div>

                    {{-- Badge --}}
                    <div
                        class="absolute bottom-4 left-4 bg-yellow-400 text-black font-bold px-3 py-1.5 rounded-lg text-xs shadow-lg">
                        Olimpiade Fisika
                    </div>
                </div>

                {{-- Content --}}
                <div class="p-6 flex flex-col justify-between h-47.5">
                    <div>
                        <h4
                            class="text-base md:text-lg font-bold text-gray-900 mb-2 group-hover:text-matauli-red-dark transition-colors">
                            Juara 2 Olimpiade Fisika
                        </h4>
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                            Tingkat Provinsi Sumatera Utara.
                        </p>
                    </div>

                    {{-- CTA Arrow --}}
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

        {{-- ===== CARD 6: Lomba Cerdas Cermat ===== --}}
        <a href="{{ route('prestasi-detail') }}" class="group block">
            <div
                class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 hover:border-yellow-400 h-full">

                {{-- Image --}}
                <div class="relative h-48 md:h-52 overflow-hidden bg-linear-to-br from-red-800 to-red-900">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white/50" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z" />
                        </svg>
                    </div>

                    {{-- Badge --}}
                    <div
                        class="absolute bottom-4 left-4 bg-yellow-400 text-black font-bold px-3 py-1.5 rounded-lg text-xs shadow-lg">
                        Cerdas Cermat
                    </div>
                </div>

                {{-- Content --}}
                <div class="p-6 flex flex-col justify-between h-47.5">
                    <div>
                        <h4
                            class="text-base md:text-lg font-bold text-gray-900 mb-2 group-hover:text-matauli-red-dark transition-colors">
                            Juara 1 Lomba Cerdas Cermat
                        </h4>
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                            Tingkat Kabupaten.
                        </p>
                    </div>

                    {{-- CTA Arrow --}}
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

        {{-- ===== CARD 7: Olimpiade Biologi ===== --}}
        <a href="{{ route('prestasi-detail') }}" class="group block">
            <div
                class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 hover:border-yellow-400 h-full">

                {{-- Image --}}
                <div class="relative h-48 md:h-52 overflow-hidden bg-linear-to-br from-red-800 to-red-900">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white/50" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z" />
                        </svg>
                    </div>

                    {{-- Badge --}}
                    <div
                        class="absolute bottom-4 left-4 bg-yellow-400 text-black font-bold px-3 py-1.5 rounded-lg text-xs shadow-lg">
                        Olimpiade Biologi
                    </div>
                </div>

                {{-- Content --}}
                <div class="p-6 flex flex-col justify-between h-47.5">
                    <div>
                        <h4
                            class="text-base md:text-lg font-bold text-gray-900 mb-2 group-hover:text-matauli-red-dark transition-colors">
                            Juara 3 Olimpiade Biologi
                        </h4>
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                            Tingkat Nasional.
                        </p>
                    </div>

                    {{-- CTA Arrow --}}
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

        {{-- ===== CARD 8: Lomba Pidato ===== --}}
        <a href="{{ route('prestasi-detail') }}" class="group block">
            <div
                class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 hover:border-yellow-400 h-full">

                {{-- Image --}}
                <div class="relative h-48 md:h-52 overflow-hidden bg-linear-to-br from-red-800 to-red-900">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white/50" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z" />
                        </svg>
                    </div>

                    {{-- Badge --}}
                    <div
                        class="absolute bottom-4 left-4 bg-yellow-400 text-black font-bold px-3 py-1.5 rounded-lg text-xs shadow-lg">
                        Lomba Pidato
                    </div>
                </div>

                {{-- Content --}}
                <div class="p-6 flex flex-col justify-between h-47.5">
                    <div>
                        <h4
                            class="text-base md:text-lg font-bold text-gray-900 mb-2 group-hover:text-matauli-red-dark transition-colors">
                            Juara 1 Lomba Pidato
                        </h4>
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                            Tingkat Provinsi Sumatera Utara.
                        </p>
                    </div>

                    {{-- CTA Arrow --}}
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

        {{-- ===== CARD 9: Olimpiade Kimia ===== --}}
        <a href="{{ route('prestasi-detail') }}" class="group block">
            <div
                class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 hover:border-yellow-400 h-full">

                {{-- Image --}}
                <div class="relative h-48 md:h-52 overflow-hidden bg-linear-to-br from-red-800 to-red-900">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white/50" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z" />
                        </svg>
                    </div>

                    {{-- Badge --}}
                    <div
                        class="absolute bottom-4 left-4 bg-yellow-400 text-black font-bold px-3 py-1.5 rounded-lg text-xs shadow-lg">
                        Olimpiade Kimia
                    </div>
                </div>

                {{-- Content --}}
                <div class="p-6 flex flex-col justify-between h-47.5">
                    <div>
                        <h4
                            class="text-base md:text-lg font-bold text-gray-900 mb-2 group-hover:text-matauli-red-dark transition-colors">
                            Juara 2 Olimpiade Kimia
                        </h4>
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                            Tingkat Nasional.
                        </p>
                    </div>

                    {{-- CTA Arrow --}}
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
    </div>
</section>
