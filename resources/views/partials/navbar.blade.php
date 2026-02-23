<!-- HEADER SECTION - START -->
<!-- ============================================ -->
<header class="w-full sticky top-0 z-50 shadow-md">

    <!-- ========== TOP BAR - Contact Information ========== -->
    <div class="bg-white text-black py-2 hidden lg:block">
        <div class="relative mx-auto px-4 lg:px-12 xl:px-24">
            <div class="flex items-center justify-between">

                <!-- Logo Section -->
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/Logo_Yayasan.png') }}" alt="Logo Yayasan"
                        class="h-9 lg:h-10 w-auto object-contain">
                    <img src="{{ asset('assets/Logo_SMAN_Matauli.png') }}" alt="Logo SMAN Matauli"
                        class="h-9 lg:h-10 w-auto object-contain">
                    <img src="{{ asset('assets/Logo_Provinsi.png') }}" alt="Logo Provinsi"
                        class="h-9 lg:h-10 w-auto object-contain">
                </div>

                <!-- Contact & Language -->
                <div class="flex items-center gap-8 text-sm">

                    <!-- Email (Left) -->
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-orange-500" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                        </svg>
                        <a href="mailto:ppdbmatauli@gmail.com" class="hover:text-orange-500 transition">
                            ppdbmatauli@gmail.com
                        </a>
                    </div>

                    <!-- Phone (Center) -->
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-orange-500" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                        </svg>
                        <a href="tel:+6282121313131" class="hover:text-orange-500 font-semibold transition">
                            +62 821-2131-3131
                        </a>
                    </div>

                    <!-- Language Dropdown (Right) -->
                    <div class="relative group">
                        <button class="flex items-center gap-2 font-semibold hover:text-orange-500 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-orange-500" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2a10 10 0 100 20 10 10 0 000-20zm5.93 6h-3.09a15.3 15.3 0 00-1.1-3.07A8.03 8.03 0 0117.93 8zM12 4.07c.6.86 1.14 1.9 1.58 3.93h-3.16c.44-2.03.98-3.07 1.58-3.93zM6.07 8a8.03 8.03 0 014.19-3.07A15.3 15.3 0 009.16 8H6.07zM4.07 12c0-.69.08-1.36.23-2h3.44a17.8 17.8 0 000 4H4.3a8.07 8.07 0 01-.23-2zm2 4h3.09c.27 1.2.65 2.28 1.1 3.07A8.03 8.03 0 016.07 16zM12 19.93c-.6-.86-1.14-1.9-1.58-3.93h3.16c-.44 2.03-.98 3.07-1.58 3.93zM13.74 19.07c.45-.79.83-1.87 1.1-3.07h3.09a8.03 8.03 0 01-4.19 3.07zM16.49 14a17.8 17.8 0 000-4h3.44c.15.64.23 1.31.23 2s-.08 1.36-.23 2h-3.44z" />
                            </svg>
                            <span>ID</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>

                        <!-- Dropdown Menu -->
                        <div
                            class="absolute right-0 mt-2 w-32 bg-white border border-gray-200 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all z-99">
                            <a href="/lang/id"
                                class="block px-4 py-2 hover:bg-gray-100 text-sm hover:text-orange-500 font-semibold">
                                🇮🇩 Indonesia
                            </a>
                            <a href="/lang/en"
                                class="block px-4 py-2 hover:bg-gray-100 text-sm hover:text-orange-500 font-semibold">
                                en English
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- ========== MAIN NAVIGATION BAR ========== -->
    <nav
        class="relative flex items-center justify-between px-4 sm:px-6 lg:px-12 xl:px-24 py-3 lg:py-4 bg-matauli-red-dark text-gray-900 transition-all shadow">

        <!-- Brand Section -->
        <div class="flex items-center gap-2 sm:gap-3">
            <img src="{{ asset('assets/Logo_SMAN_Matauli.png') }}" alt="Logo SMAN" class="h-10 sm:h-11 lg:h-12 w-auto">

            <div class="flex flex-col text-[#fff9f9]">
                <h1 class="text-sm sm:text-base lg:text-xl font-bold tracking-tight leading-tight">
                    SMAN 1 MATAULI PANDAN
                </h1>
                <span class="text-[0.6rem] sm:text-[0.65rem] lg:text-xs font-light">
                    The center of excellence
                </span>
            </div>
        </div>

        <!-- Desktop Navigation Menu -->
        <ul class="hidden lg:flex items-center space-x-6 xl:space-x-10 font-semibold text-sm xl:text-base">

            <li>
                <a href="{{ url('/') }}" class="navlink-hover">Beranda</a>
            </li>

            <li class="relative group">
                <button class="navlink-hover flex items-center cursor-pointer focus:outline-none">
                    Tentang Kami
                    <svg class="ml-1 w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <ul class="nav-dropdown-content">
                    <li><a href="{{ route('sejarah') }}" class="dropdown-item">Sejarah
                            Sekolah</a></li>
                    <li><a href="{{ route('visi-misi') }}" class="dropdown-item">Visi & Misi</a></li>
                    <li><a href="{{ url('/struktur') }}" class="dropdown-item">Struktur Sekolah</a>
                    </li>
                    <li><a href="{{ url('/tendik') }}" class="dropdown-item">Tenaga Pendidik
                            & Kependidikan</a></li>
                    <li><a href="{{ url('/fasilitas') }}" class="dropdown-item">Fasilitas Sekolah</a>
                    </li>
                    <li><a href="{{ url('/tentang-kami#asrama') }}" class="dropdown-item">Ekstrakurikuler</a></li>
                    <li><a href="{{ url('/tentang-kami#kemitraan') }}" class="dropdown-item">Kemitraan Sekolah</a>
                    </li>
                </ul>
            </li>

            <!--dropdown program  -->
            <li class="relative group">
                <button class="navlink-hover flex items-center cursor-pointer focus:outline-none">
                    Program
                    <svg class="ml-1 w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <ul class="nav-dropdown-content">
                    <li><a href="{{ url('/program#prestasi-siswa') }}" class="dropdown-item">Program Kemataulian</a>
                    </li>
                    <li><a href="{{ url('/program#ekstrakulikuler') }}" class="dropdown-item">Program Pre-IB</a>
                    </li>
                </ul>
            </li>
            <!-- dropdown program end -->

            <!-- dropdown tentang asrama -->
            <li class="relative group">
                <button class="navlink-hover flex items-center cursor-pointer focus:outline-none">
                    Asrama
                    <svg class="ml-1 w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <ul class="nav-dropdown-content">
                    <li><a href="{{ url('/#') }}" class="dropdown-item">Fasilitas Asrama</a>
                    </li>
                    <li><a href="{{ url('/#') }}" class="dropdown-item">Kegiatan Asrama</a>
                    </li>
                </ul>
            </li>
            <!-- dropdown tentang asrama end -->


            <!-- dropdown alumni -->
            <li class="relative group">
                <button class="navlink-hover flex items-center cursor-pointer focus:outline-none">
                    Alumni
                    <svg class="ml-1 w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <ul class="nav-dropdown-content">
                    <li><a href="{{ url('/alumni#studi-lanjut') }}" class="dropdown-item">Studi Lanjut</a>
                    </li>
                    <li><a href="{{ url('/alumni#prestasi-alumni') }}" class="dropdown-item">Professional</a>
                    </li>
                </ul>
            </li>
            <!-- dropdown alumni end -->

            <li class="relative group">
                <button class="navlink-hover flex items-center cursor-pointer focus:outline-none">
                    Galeri
                    <svg class="ml-1 w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <ul class="nav-dropdown-content">
                    <li><a href="{{ url('/dokumentasi#galeri') }}" class="dropdown-item">Foto</a></li>
                    <li><a href="{{ url('/dokumentasi#berita') }}" class="dropdown-item">Video</a></li>
                    <li><a href="{{ url('/dokumentasi#kegiatan-sekolah') }}" class="dropdown-item">Kegiatan
                            Sekolah</a></li>
                </ul>
            </li>

        </ul>

        <!-- Mobile Menu Button -->
        <button id="menuToggle" aria-label="Toggle menu" type="button"
            class="inline-flex lg:hidden items-center justify-center p-2 rounded-md text-white hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white transition-colors">
            <svg id="menuIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg id="closeIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

    </nav>

</header>
<!-- ============================================ -->
<!-- HEADER SECTION - END -->
<!-- ============================================ -->

<!-- ============================================ -->
<!-- MOBILE MENU - MOVED OUTSIDE HEADER -->
<!-- ============================================ -->

<!-- Mobile Menu Backdrop -->
<div id="menuBackdrop" class="lg:hidden"></div>

<!-- Mobile Menu Panel -->
<div id="mobileMenu" class="lg:hidden w-80 sm:w-96 bg-white shadow-2xl">

    <!-- Mobile Menu Header -->
    <div class="flex items-center justify-between px-6 py-4 bg-matauli-red-dark text-white">
        <h2 class="text-lg font-bold">Menu</h2>
        <button id="closeMenu" class="p-2 hover:bg-red-800 rounded-md transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Scrollable Menu Content -->
    <div class="h-[calc(100%-72px)] overflow-y-auto custom-scrollbar">
        <ul class="flex flex-col py-2">

            <!-- Menu Item: Beranda -->
            <li>
                <a href="{{ url('/') }}"
                    class="block px-6 py-4 text-base font-semibold text-gray-800 hover:bg-orange-50 hover:text-orange-600 transition-colors border-b border-gray-100">
                    Beranda
                </a>
            </li>

            <!-- Dropdown Menu: Tentang Kami -->
            <li class="border-b border-gray-100">
                <button
                    class="mobile-dropdown-trigger w-full flex items-center justify-between px-6 py-4 text-base font-semibold text-gray-800 hover:bg-orange-50 transition-colors">
                    <span>Tentang Kami</span>
                    <svg class="dropdown-arrow w-5 h-5 text-gray-500 transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <ul class="mobile-dropdown-content bg-gray-50">
                    <li><a href="{{ route('sejarah') }}"
                            class="block px-10 py-3 text-sm font-medium text-gray-700 hover:bg-orange-100 hover:text-orange-600 transition-colors">Sejarah
                            Sekolah</a></li>
                    <li><a href="{{ route('visi-misi') }}"
                            class="block px-10 py-3 text-sm font-medium text-gray-700 hover:bg-orange-100 hover:text-orange-600 transition-colors">Visi
                            & Misi</a></li>
                    <li><a href="{{ url('/struktur') }}"
                            class="block px-10 py-3 text-sm font-medium text-gray-700 hover:bg-orange-100 hover:text-orange-600 transition-colors">Struktur
                            Sekolah</a>
                    </li>
                    <li><a href="{{ url('/tendik') }}"
                            class="block px-10 py-3 text-sm font-medium text-gray-700 hover:bg-orange-100 hover:text-orange-600 transition-colors">Tenaga
                            Pendidik</a></li>
                    <li><a href="{{ url('/fasilitas') }}"
                            class="block px-10 py-3 text-sm font-medium text-gray-700 hover:bg-orange-100 hover:text-orange-600 transition-colors">Fasilitas</a>
                    </li>
                    <li><a href="{{ url('/tentang-kami#asrama') }}"
                            class="block px-10 py-3 text-sm font-medium text-gray-700 hover:bg-orange-100 hover:text-orange-600 transition-colors">Ekstrakulikuler</a>
                    </li>
                    <li><a href="{{ url('/tentang-kami#kemitraan') }}"
                            class="block px-10 py-3 text-sm font-medium text-gray-700 hover:bg-orange-100 hover:text-orange-600 transition-colors">Kemitraan</a>
                    </li>
                </ul>
            </li>

            <!-- dropdown program -->
            <li class="border-b border-gray-100">
                <button
                    class="mobile-dropdown-trigger w-full flex items-center justify-between px-6 py-4 text-base font-semibold text-gray-800 hover:bg-orange-50 transition-colors">
                    <span>Program</span>
                    <svg class="dropdown-arrow w-5 h-5 text-gray-500 transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <ul class="mobile-dropdown-content bg-gray-50">
                    <li><a href="{{ url('/program#prestasi-siswa') }}"
                            class="block px-10 py-3 text-sm font-medium text-gray-700 hover:bg-orange-100 hover:text-orange-600 transition-colors">Program
                            Kemataulian</a></li>
                    <li><a href="{{ url('/program#ekstrakulikuler') }}"
                            class="block px-10 py-3 text-sm font-medium text-gray-700 hover:bg-orange-100 hover:text-orange-600 transition-colors">Program
                            Pre-IB</a>
                    </li>
                </ul>
            </li>

            <!-- Dropdown Menu: tentang asrama-->
            <li class="border-b border-gray-100">
                <button
                    class="mobile-dropdown-trigger w-full flex items-center justify-between px-6 py-4 text-base font-semibold text-gray-800 hover:bg-orange-50 transition-colors">
                    <span>Asrama</span>
                    <svg class="dropdown-arrow w-5 h-5 text-gray-500 transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <ul class="mobile-dropdown-content bg-gray-50">
                    <li><a href="{{ url('/asrama#fasilitas-asrama') }}"
                            class="block px-10 py-3 text-sm font-medium text-gray-700 hover:bg-orange-100 hover:text-orange-600 transition-colors">Fasilitas
                            Asrama</a></li>
                    <li><a href="{{ url('/asrama#kegiatan-asrama') }}"
                            class="block px-10 py-3 text-sm font-medium text-gray-700 hover:bg-orange-100 hover:text-orange-600 transition-colors">Kegiatan
                            Asrama</a>
                    </li>
                </ul>
            </li>

            <!-- dropdown alumni -->
            <li class="border-b border-gray-100">
                <button
                    class="mobile-dropdown-trigger w-full flex items-center justify-between px-6 py-4 text-base font-semibold text-gray-800 hover:bg-orange-50 transition-colors">
                    <span>Alumni</span>
                    <svg class="dropdown-arrow w-5 h-5 text-gray-500 transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <ul class="mobile-dropdown-content bg-gray-50">
                    <li><a href="{{ url('/program#prestasi-siswa') }}"
                            class="block px-10 py-3 text-sm font-medium text-gray-700 hover:bg-orange-100 hover:text-orange-600 transition-colors">Study
                            Lanjut</a></li>
                    <li><a href="{{ url('/program#ekstrakulikuler') }}"
                            class="block px-10 py-3 text-sm font-medium text-gray-700 hover:bg-orange-100 hover:text-orange-600 transition-colors">Professional</a>
                    </li>
                </ul>
            </li>

            <!-- Dropdown Menu: Dokumentasi -->
            <li class="border-b border-gray-100">
                <button
                    class="mobile-dropdown-trigger w-full flex items-center justify-between px-6 py-4 text-base font-semibold text-gray-800 hover:bg-orange-50 transition-colors">
                    <span>Galeri</span>
                    <svg class="dropdown-arrow w-5 h-5 text-gray-500 transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <ul class="mobile-dropdown-content bg-gray-50">
                    <li><a href="{{ url('/dokumentasi#galeri') }}"
                            class="block px-10 py-3 text-sm font-medium text-gray-700 hover:bg-orange-100 hover:text-orange-600 transition-colors">Foto</a>
                    </li>
                    <li><a href="{{ url('/dokumentasi#berita') }}"
                            class="block px-10 py-3 text-sm font-medium text-gray-700 hover:bg-orange-100 hover:text-orange-600 transition-colors">Video</a>
                    </li>
                    <li><a href="{{ url('/dokumentasi#kegiatan-sekolah') }}"
                            class="block px-10 py-3 text-sm font-medium text-gray-700 hover:bg-orange-100 hover:text-orange-600 transition-colors">Kegiatan
                            Sekolah</a></li>
                </ul>
            </li>

            <!-- Contact & Language Info (Mobile) -->
            <li class="px-6 py-4 bg-gray-50 mt-4">
                <h3 class="text-sm font-bold text-gray-800 mb-3">
                    Hubungi Kami
                </h3>

                <!-- Contact -->
                <div class="space-y-3 mb-4">
                    <a href="mailto:ppdbmatauli@gmail.com"
                        class="flex items-center gap-2 text-sm text-gray-600 hover:text-orange-600 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                        </svg>
                        ppdbmatauli@gmail.com
                    </a>

                    <a href="tel:+6282121313131"
                        class="flex items-center gap-2 text-sm text-gray-600 hover:text-orange-600 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                        </svg>
                        +62 821-2131-3131
                    </a>
                </div>

                <!-- Language Selector (Mobile) -->
                <div class="border-t border-gray-200 pt-3">
                    <p class="text-xs font-semibold text-gray-700 mb-2">
                        Bahasa
                    </p>

                    <div class="flex gap-3">
                        <a href="/lang/id"
                            class="flex-1 text-center text-sm font-semibold px-4 py-2 rounded-lg bg-gray-100 text-gray-700 hover:bg-orange-500 hover:text-white transition">
                            🇮🇩 Indonesia
                        </a>

                        <a href="/lang/en"
                            class="flex-1 text-center text-sm font-semibold px-4 py-2 rounded-lg bg-gray-100 text-gray-700 hover:bg-orange-500 hover:text-white transition">
                            en English
                        </a>
                    </div>
                </div>


            </li>
        </ul>
    </div>
</div>
<!-- ============================================ -->
<!-- MOBILE MENU - END -->
<!-- ============================================ -->
