<footer
    class="w-full bg-linear-to-br from-matauli-red-dark via-red-900 to-matauli-red-dark text-white relative overflow-hidden">

    <!-- Decorative Elements -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-0 left-0 w-64 h-64 bg-yellow-400 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-yellow-400 rounded-full blur-3xl"></div>
    </div>

    <div class="relative mx-auto px-4 sm:px-6 md:px-12 lg:px-24 pt-12 md:pt-16 lg:pt-20 pb-6 md:pb-8">

        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 md:gap-10 lg:gap-12">

            <!-- Column 1: Logo & School Name -->
            <div class="flex flex-col items-center sm:items-start gap-6 lg:col-span-1">

                <!-- Logo & Text -->
                <div class="flex items-center gap-4">

                    <!-- Logo wrapper with glow effect -->
                    <div class="w-20 h-20 md:w-24 md:h-24 flex items-center justify-center shrink-0 relative">
                        <div class="absolute inset-0 bg-yellow-400/20 rounded-full blur-xl"></div>
                        <img src="{{ asset('assets/Logo_SMAN_Matauli.png') }}" alt="Logo SMAN Matauli"
                            class="max-w-full max-h-full object-contain relative z-10 drop-shadow-2xl">
                    </div>

                    <!-- Divider -->
                    <div
                        class="w-1 h-20 md:h-24 bg-linear-to-b from-yellow-400 via-yellow-500 to-yellow-400 shrink-0 rounded-full shadow-lg shadow-yellow-400/50">
                    </div>

                    <!-- Text -->
                    <div class="flex flex-col justify-center leading-tight">
                        <h2 class="text-2xl lg:text-3xl font-bold text-white">
                            <span class="inline-flex items-center tracking-widest">
                                SMAN <span class="ml-2.5 lg:ml-3.5">1</span>
                            </span>
                            <span class="block">MATAULI</span>
                            <span class="block tracking-wide">PANDAN</span>
                        </h2>
                    </div>
                </div>

                <!-- Copyright with icon -->
                <div class="text-xs md:text-sm leading-relaxed text-center sm:text-left">
                    <p class="text-gray-300 flex items-center gap-2 justify-center sm:justify-start">
                        &copy; 2026. All rights reserved.
                    </p>
                    <p class="font-bold text-yellow-400 text-sm md:text-base mt-1">SMAN 1 Matauli Pandan</p>
                </div>

            </div>


            <!-- Column 2: Kunjungi Kami -->
            <div class="flex flex-col">
                <h3 class="text-lg md:text-xl font-bold mb-6 pb-3 border-b-2 border-yellow-400 w-fit relative">
                    <span class="relative z-10">Kunjungi Kami</span>
                    <div class="absolute bottom-0 left-0 w-full h-0.5 bg-linear-to-r from-yellow-400 to-transparent">
                    </div>
                </h3>
                <div class="space-y-4">

                    <!-- Address -->
                    <div class="flex items-start gap-3 group hover:translate-x-1 transition-transform duration-300">
                        <div
                            class="shrink-0 w-10 h-10 rounded-lg bg-white/10 backdrop-blur-sm flex items-center justify-center group-hover:bg-yellow-400 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-yellow-400 group-hover:text-matauli-red-dark transition-colors"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="text-xs text-yellow-400 font-semibold mb-1">Alamat</p>
                            <p class="text-gray-200 leading-relaxed text-sm">
                                Jl. Pendidikan No. 123, Pandan,<br>
                                Tapanuli Tengah, Sumatera Utara
                            </p>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="flex items-center gap-3 group hover:translate-x-1 transition-transform duration-300">
                        <div
                            class="shrink-0 w-10 h-10 rounded-lg bg-white/10 backdrop-blur-sm flex items-center justify-center group-hover:bg-yellow-400 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-yellow-400 group-hover:text-matauli-red-dark transition-colors"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="text-xs text-yellow-400 font-semibold mb-1">Telepon</p>
                            <a href="tel:+628888888888"
                                class="text-gray-200 hover:text-yellow-400 transition text-sm font-medium">
                                +62 888-8888-8888
                            </a>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-center gap-3 group hover:translate-x-1 transition-transform duration-300">
                        <div
                            class="shrink-0 w-10 h-10 rounded-lg bg-white/10 backdrop-blur-sm flex items-center justify-center group-hover:bg-yellow-400 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-yellow-400 group-hover:text-matauli-red-dark transition-colors"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="text-xs text-yellow-400 font-semibold mb-1">Email</p>
                            <a href="mailto:examplematauli@gmail.com"
                                class="text-gray-200 hover:text-yellow-400 transition text-sm font-medium break-all">
                                examplematauli@gmail.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Column 3: Link Terkait -->
            <div class="flex flex-col">
                <h3 class="text-lg md:text-xl font-bold mb-6 pb-3 border-b-2 border-yellow-400 w-fit relative">
                    <span class="relative z-10">Link Terkait</span>
                    <div class="absolute bottom-0 left-0 w-full h-0.5 bg-linear-to-r from-yellow-400 to-transparent">
                    </div>
                </h3>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ url('/tentang-kami') }}"
                            class="group flex items-center gap-2 text-gray-200 hover:text-yellow-400 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 transform group-hover:translate-x-1 transition-transform" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                            <span class="text-sm font-medium">Tentang Kami</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/program#keahlian') }}"
                            class="group flex items-center gap-2 text-gray-200 hover:text-yellow-400 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 transform group-hover:translate-x-1 transition-transform" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                            <span class="text-sm font-medium">Program Keahlian</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/program#prestasi-siswa') }}"
                            class="group flex items-center gap-2 text-gray-200 hover:text-yellow-400 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 transform group-hover:translate-x-1 transition-transform" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                            <span class="text-sm font-medium">Prestasi Siswa</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/dokumentasi#berita') }}"
                            class="group flex items-center gap-2 text-gray-200 hover:text-yellow-400 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 transform group-hover:translate-x-1 transition-transform"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                            <span class="text-sm font-medium">Berita Terkini</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/sejarah-sekolah') }}"
                            class="group flex items-center gap-2 text-gray-200 hover:text-yellow-400 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 transform group-hover:translate-x-1 transition-transform"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                            <span class="text-sm font-medium">Sejarah Sekolah</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/ppdb') }}"
                            class="group flex items-center gap-2 text-yellow-400 hover:text-yellow-300 transition-all duration-300 font-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 transform group-hover:translate-x-1 transition-transform"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                            <span class="text-sm">PPDB Online</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Column 4: Ikuti Kami -->
            <div class="flex flex-col">
                <h3 class="text-lg md:text-xl font-bold mb-6 pb-3 border-b-2 border-yellow-400 w-fit relative">
                    <span class="relative z-10">Ikuti Kami</span>
                    <div class="absolute bottom-0 left-0 w-full h-0.5 bg-linear-to-r from-yellow-400 to-transparent">
                    </div>
                </h3>

                <!-- Social Media Icons -->
                <div class="flex flex-wrap gap-3">

                    <!-- Facebook -->
                    <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" aria-label="Facebook"
                        class="group relative w-12 h-12 rounded-xl bg-white/10 backdrop-blur-sm hover:bg-blue-600 flex items-center justify-center transition-all duration-300 hover:scale-110 hover:-translate-y-1">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white transition-colors"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>

                        <div
                            class="absolute -bottom-1 -right-1 w-3 h-3 bg-green-400 rounded-full border-2 border-matauli-red-dark opacity-0 group-hover:opacity-100 transition-opacity">
                        </div>
                    </a>


                    <!-- Instagram -->
                    <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" aria-label="Instagram"
                        class="group relative w-12 h-12 rounded-xl bg-white/10 backdrop-blur-sm hover:bg-linear-to-br hover:from-purple-500 hover:via-pink-500 hover:to-orange-500 flex items-center justify-center transition-all duration-300 hover:scale-110 hover:-translate-y-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white transition-colors"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                        <div
                            class="absolute -bottom-1 -right-1 w-3 h-3 bg-green-400 rounded-full border-2 border-matauli-red-dark opacity-0 group-hover:opacity-100 transition-opacity">
                        </div>
                    </a>

                    <!-- TikTok -->
                    <a href="https://tiktok.com" target="_blank" rel="noopener noreferrer" aria-label="TikTok"
                        class="group relative w-12 h-12 rounded-xl bg-white/10 backdrop-blur-sm hover:bg-black flex items-center justify-center transition-all duration-300 hover:scale-110 hover:-translate-y-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white transition-colors"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
                        </svg>
                        <div
                            class="absolute -bottom-1 -right-1 w-3 h-3 bg-green-400 rounded-full border-2 border-matauli-red-dark opacity-0 group-hover:opacity-100 transition-opacity">
                        </div>
                    </a>

                    <!-- YouTube -->
                    <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" aria-label="YouTube"
                        class="group relative w-12 h-12 rounded-xl bg-white/10 backdrop-blur-sm hover:bg-red-600 flex items-center justify-center transition-all duration-300 hover:scale-110 hover:-translate-y-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white transition-colors"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                        </svg>
                        <div
                            class="absolute -bottom-1 -right-1 w-3 h-3 bg-green-400 rounded-full border-2 border-matauli-red-dark opacity-0 group-hover:opacity-100 transition-opacity">
                        </div>
                    </a>
                </div>

                {{-- <!-- Newsletter (Optional) -->
                <div class="mt-4">
                    <p class="text-xs text-gray-300 mb-3">Dapatkan update terbaru langsung di inbox Anda</p>
                    <div class="flex gap-2">
                        <input type="email" placeholder="Email Anda"
                            class="flex-1 px-3 py-2 rounded-lg bg-white/10 backdrop-blur-sm border border-white/20 text-white placeholder-gray-400 text-sm focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 transition-all">
                        <button
                            class="px-4 py-2 bg-yellow-400 hover:bg-yellow-500 text-matauli-red-dark font-bold rounded-lg transition-all hover:scale-105 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                            </svg>
                        </button>
                    </div>
                </div> --}}
            </div>

        </div>

        <!-- Bottom Bar -->
        <div class="mt-8 pt-5 border-t border-white/10">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-xs">
                <p class="text-gray-300 text-center md:text-left flex items-center gap-1">
                    Dikembangkan dengan<span class="text-yellow-400 font-bold">YANG IT IT AJA</span>
                </p>
                {{-- <div class="flex gap-4 text-gray-300">
                    <a href="{{ url('/privacy-policy') }}" class="hover:text-yellow-400 transition text-sm">Kebijakan
                        Privasi</a>
                    <span>•</span>
                    <a href="{{ url('/terms') }}" class="hover:text-yellow-400 transition text-sm">Syarat &
                        Ketentuan</a>
                </div> --}}
            </div>
        </div>

    </div>
</footer>
