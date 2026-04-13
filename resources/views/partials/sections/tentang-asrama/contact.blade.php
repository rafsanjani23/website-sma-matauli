<section id="pengasuh" class="py-15 md:py-20">
    <div class="container bg-gray-50 rounded-2xl p-8 md:p-10 border border-gray-100 mx-auto">
        <div class="mb-10 mx-auto">
            <div class="text-center mb-10">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                    {{ __('Kontak Kami') }}
                </h2>
                <div class="w-16 h-1 bg-yellow-400 mx-auto mt-4 rounded-full"></div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 mx-auto justify-center px-5 md:px-26">
            <div
                class="group relative bg-white border border-gray-100 rounded-xl shadow-sm overflow-hidden mx-auto w-full max-w-sm scroll-animate transition-all duration-700 ease-in-out translate-x-10 opacity-0 hover:-translate-y-2 hover:shadow-2xl hover:shadow-red-900/10 hover:border-red-100 cursor-pointer">

                {{-- TOP BAR: Garis gradient muncul dari kiri saat hover --}}
                <div
                    class="absolute top-0 inset-x-0 h-1 bg-linear-to-r from-red-800 to-yellow-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-500 ease-out origin-left">
                </div>

                {{-- CARD CONTENT --}}

                <a href="tel:+6281234567890">
                    <div class="p-7 flex flex-col justify-center items-center text-center">
                        {{-- ICON CIRCLE: Lingkaran membesar saat hover --}}
                        <div
                            class="shrink-0 w-10 h-10 rounded-lg bg-white/10 backdrop-blur-sm flex items-center justify-center group-hover:bg-yellow-400 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-30 w-30 text-yellow-400 group-hover:text-matauli-red-dark transition-colors"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                            </svg>
                        </div>

                        {{-- JUDUL & DESKRIPSI --}}
                        <h3 class="text-lg text-grey-900 font-semibold mb-1 mt-2">{{ __('Telp. Asrama') }}</h3>
                        <p class="text-slate-950 transition text-md font-medium">
                            +62 812-3456-7890
                        </p>
                    </div>


                </a>
            </div>
            <div
                class="group relative bg-white border border-gray-100 rounded-xl shadow-sm overflow-hidden mx-auto w-full max-w-sm scroll-animate transition-all duration-700 ease-in-out translate-x-10 opacity-0 hover:-translate-y-2 hover:shadow-2xl hover:shadow-red-900/10 hover:border-red-100 cursor-pointer">

                {{-- TOP BAR: Garis gradient muncul dari kiri saat hover --}}
                <div
                    class="absolute top-0 inset-x-0 h-1 bg-linear-to-r from-red-800 to-yellow-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-500 ease-out origin-left">
                </div>

                {{-- CARD CONTENT --}}

                <a href="mailto:sekret.asramamtn@gmail.com">
                    <div class="p-7 flex flex-col justify-center items-center text-center">
                        {{-- ICON CIRCLE: Lingkaran membesar saat hover --}}
                        <div
                            class="shrink-0 w-10 h-10 rounded-lg bg-white/10 backdrop-blur-sm flex items-center justify-center group-hover:bg-yellow-400 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-30 w-30 text-yellow-400 group-hover:text-matauli-red-dark transition-colors"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                            </svg>
                        </div>

                        {{-- JUDUL & DESKRIPSI --}}
                        <h3 class="text-lg text-grey-900 font-semibold mb-1 mt-2">{{ __('Email Asrama') }}</h3>
                        <p class="text-slate-950 transition text-md font-medium">
                            sekret.asramamtn@gmail.com
                        </p>
                    </div>


                </a>
            </div>
        </div>

    </div>

</section>
