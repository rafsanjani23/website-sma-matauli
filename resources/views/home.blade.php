<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMAN 1 Matauli Pandan - Beranda</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Custom Tailwind Config */
        @layer utilities {
            .navlink-hover {
                @apply text-white hover:text-orange-400 transition-colors duration-300;
            }

            .dropdown-item {
                @apply block px-4 py-2.5 text-sm text-gray-700 hover:bg-orange-50 hover:text-orange-600 transition-colors;
            }

            .nav-dropdown-content {
                @apply absolute left-0 mt-2 w-56 bg-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 translate-y-2 z-50;
            }
        }

        /* Custom Scrollbar */
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        /* Prevent body scroll when mobile menu is open */
        body.menu-open {
            overflow: hidden;
            position: fixed;
            width: 100%;
            height: 100%;
        }

        /* Mobile Menu Backdrop - CRITICAL FIXES */
        #menuBackdrop {
            visibility: hidden;
            opacity: 0;
            transition: opacity 0.3s ease-in-out, visibility 0s linear 0.3s;
            /* Force full viewport coverage */
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            bottom: 0 !important;
            width: 100vw !important;
            height: 100vh !important;
            height: 100dvh !important;
            /* For mobile browsers */
            margin: 0 !important;
            padding: 0 !important;
            background-color: rgba(0, 0, 0, 0.5) !important;
            z-index: 60 !important;
        }

        #menuBackdrop.active {
            visibility: visible;
            opacity: 1;
            transition: opacity 0.3s ease-in-out, visibility 0s linear 0s;
        }

        /* Mobile Menu Panel - CRITICAL FIXES */
        #mobileMenu {
            transform: translateX(100%);
            transition: transform 0.3s ease-in-out;
            /* Force proper positioning */
            position: fixed !important;
            top: 0 !important;
            right: 0 !important;
            height: 100vh !important;
            height: 100dvh !important;
            /* For mobile browsers */
            margin: 0 !important;
            z-index: 70 !important;
        }

        #mobileMenu.active {
            transform: translateX(0);
        }

        /* Hide mobile menu on desktop */
        @media (min-width: 1024px) {

            #menuBackdrop,
            #mobileMenu {
                display: none !important;
            }
        }

        /* Mobile Dropdown */
        .mobile-dropdown-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-in-out;
        }

        .mobile-dropdown-content.open {
            max-height: 500px;
        }

        /* Custom Colors */
        .bg-matauli-red-dark {
            background-color: #991b1b;
        }

        .text-matauli-orange {
            color: #ea580c;
        }

        .hover\:text-matauli-orange:hover {
            color: #ea580c;
        }

        /* Hero Slide Animation */
        .hero-slide {
            display: none;
            animation: fadeIn 0.5s ease-in-out;
        }

        .hero-slide.active {
            display: block;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        /* Dot Indicators */
        .dot {
            transition: all 0.3s ease;
        }

        .dot.active {
            background-color: white;
            transform: scale(1.2);
        }
    </style>
</head>

<body class="antialiased">
    <!-- ============================================ -->
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
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-orange-500"
                                    fill="currentColor" viewBox="0 0 24 24">
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
                                    class="block px-4 py-2 hover:bg-gray-100 text-sm dropdown-item font-semibold">
                                    🇮🇩 Indonesia
                                </a>
                                <a href="/lang/en"
                                    class="block px-4 py-2 hover:bg-gray-100 text-sm dropdown-item font-semibold">
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
                <img src="{{ asset('assets/Logo_SMAN_Matauli.png') }}" alt="Logo SMAN"
                    class="h-10 sm:h-11 lg:h-12 w-auto">

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
                        <svg class="ml-1 w-4 h-4 transition-transform duration-300 group-hover:rotate-180"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <ul class="nav-dropdown-content">
                        <li><a href="{{ url('/tentang-kami#sejarah-sekolah') }}" class="dropdown-item">Sejarah
                                Sekolah</a></li>
                        <li><a href="{{ url('/tentang-kami#visi-misi') }}" class="dropdown-item">Visi & Misi</a></li>
                        <li><a href="{{ url('/tentang-kami#kurikulum') }}" class="dropdown-item">Kurikulum Sekolah</a>
                        </li>
                        <li><a href="{{ url('/tentang-kami#tenaga-pendidik') }}" class="dropdown-item">Tenaga Pendidik
                                & Kependidikan</a></li>
                        <li><a href="{{ url('/tentang-kami#fasilitas') }}" class="dropdown-item">Fasilitas Sekolah</a>
                        </li>
                        <li><a href="{{ url('/tentang-kami#kemitraan') }}" class="dropdown-item">Kemitraan Sekolah</a>
                        </li>
                        <li><a href="{{ url('/tentang-kami#asrama') }}" class="dropdown-item">Tentang Asrama</a></li>
                    </ul>
                </li>

                <li class="relative group">
                    <button class="navlink-hover flex items-center cursor-pointer focus:outline-none">
                        Program
                        <svg class="ml-1 w-4 h-4 transition-transform duration-300 group-hover:rotate-180"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <ul class="nav-dropdown-content">
                        <li><a href="{{ url('/program#prestasi-siswa') }}" class="dropdown-item">Prestasi Siswa</a>
                        </li>
                        <li><a href="{{ url('/program#ekstrakulikuler') }}" class="dropdown-item">Ekstrakulikuler</a>
                        </li>
                    </ul>
                </li>

                <li class="relative group">
                    <button class="navlink-hover flex items-center cursor-pointer focus:outline-none">
                        Dokumentasi
                        <svg class="ml-1 w-4 h-4 transition-transform duration-300 group-hover:rotate-180"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <ul class="nav-dropdown-content">
                        <li><a href="{{ url('/dokumentasi#galeri') }}" class="dropdown-item">Galeri</a></li>
                        <li><a href="{{ url('/dokumentasi#berita') }}" class="dropdown-item">Berita</a></li>
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
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
                        <svg class="dropdown-arrow w-5 h-5 text-gray-500 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <ul class="mobile-dropdown-content bg-gray-50">
                        <li><a href="{{ url('/tentang-kami#sejarah-sekolah') }}"
                                class="block px-10 py-3 text-sm font-medium text-gray-700 hover:bg-orange-100 hover:text-orange-600 transition-colors">Sejarah
                                Sekolah</a></li>
                        <li><a href="{{ url('/tentang-kami#visi-misi') }}"
                                class="block px-10 py-3 text-sm font-medium text-gray-700 hover:bg-orange-100 hover:text-orange-600 transition-colors">Visi
                                & Misi</a></li>
                        <li><a href="{{ url('/tentang-kami#kurikulum') }}"
                                class="block px-10 py-3 text-sm font-medium text-gray-700 hover:bg-orange-100 hover:text-orange-600 transition-colors">Kurikulum</a>
                        </li>
                        <li><a href="{{ url('/tentang-kami#tenaga-pendidik') }}"
                                class="block px-10 py-3 text-sm font-medium text-gray-700 hover:bg-orange-100 hover:text-orange-600 transition-colors">Tenaga
                                Pendidik</a></li>
                        <li><a href="{{ url('/tentang-kami#fasilitas') }}"
                                class="block px-10 py-3 text-sm font-medium text-gray-700 hover:bg-orange-100 hover:text-orange-600 transition-colors">Fasilitas</a>
                        </li>
                        <li><a href="{{ url('/tentang-kami#kemitraan') }}"
                                class="block px-10 py-3 text-sm font-medium text-gray-700 hover:bg-orange-100 hover:text-orange-600 transition-colors">Kemitraan</a>
                        </li>
                        <li><a href="{{ url('/tentang-kami#asrama') }}"
                                class="block px-10 py-3 text-sm font-medium text-gray-700 hover:bg-orange-100 hover:text-orange-600 transition-colors">Tentang
                                Asrama</a></li>
                    </ul>
                </li>

                <!-- Dropdown Menu: Program -->
                <li class="border-b border-gray-100">
                    <button
                        class="mobile-dropdown-trigger w-full flex items-center justify-between px-6 py-4 text-base font-semibold text-gray-800 hover:bg-orange-50 transition-colors">
                        <span>Program</span>
                        <svg class="dropdown-arrow w-5 h-5 text-gray-500 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <ul class="mobile-dropdown-content bg-gray-50">
                        <li><a href="{{ url('/program#prestasi-siswa') }}"
                                class="block px-10 py-3 text-sm font-medium text-gray-700 hover:bg-orange-100 hover:text-orange-600 transition-colors">Prestasi
                                Siswa</a></li>
                        <li><a href="{{ url('/program#ekstrakulikuler') }}"
                                class="block px-10 py-3 text-sm font-medium text-gray-700 hover:bg-orange-100 hover:text-orange-600 transition-colors">Ekstrakurikuler</a>
                        </li>
                    </ul>
                </li>

                <!-- Dropdown Menu: Dokumentasi -->
                <li class="border-b border-gray-100">
                    <button
                        class="mobile-dropdown-trigger w-full flex items-center justify-between px-6 py-4 text-base font-semibold text-gray-800 hover:bg-orange-50 transition-colors">
                        <span>Dokumentasi</span>
                        <svg class="dropdown-arrow w-5 h-5 text-gray-500 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <ul class="mobile-dropdown-content bg-gray-50">
                        <li><a href="{{ url('/dokumentasi#galeri') }}"
                                class="block px-10 py-3 text-sm font-medium text-gray-700 hover:bg-orange-100 hover:text-orange-600 transition-colors">Galeri</a>
                        </li>
                        <li><a href="{{ url('/dokumentasi#berita') }}"
                                class="block px-10 py-3 text-sm font-medium text-gray-700 hover:bg-orange-100 hover:text-orange-600 transition-colors">Berita</a>
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

    <!-- ============================================ -->
    <!-- HERO SLIDER SECTION - START -->
    <!-- ============================================ -->
    <section class="relative h-screen overflow-hidden">
        <div id="heroSlider" class="relative h-full">

            <!-- Slide 1 - Daftar Disini -->
            <div class="hero-slide active absolute inset-0">
                <div class="absolute inset-0 bg-linear-to-r from-black/70 via-black/50 to-transparent z-10"></div>
                <img src="{{ asset('assets/Gerbang Depan Sekolah.jpeg') }}" alt="School Building"
                    class="w-full h-full object-cover">
                <div class="absolute inset-0 z-20 flex items-center">
                    <div class="container mx-auto px-4 sm:px-6 md:px-12 lg:px-24 xl:px-32">
                        <div class="max-w-3xl">
                            <p
                                class="text-yellow-400 font-bold text-sm sm:text-base md:text-lg lg:text-xl mb-3 md:mb-4 tracking-wider">
                                SMA NEGERI 1 MATAULI PANDAN
                            </p>
                            <h1
                                class="text-white text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight mb-4 md:mb-6">
                                Sekolah Unggul Berkarakter Pancasila & Berdaya Saing Global
                            </h1>
                            <p class="text-white/90 text-base sm:text-lg md:text-xl mb-6 md:mb-8 italic">
                                Bergabung dan Tumbuh Bersama SMA Negeri 1 Matauli Pandan
                            </p>
                            <a href="{{ url('/ppdb') }}"
                                class="inline-flex items-center gap-2 md:gap-3 bg-yellow-400 hover:bg-yellow-500 text-black font-bold px-6 py-3 md:px-8 md:py-4 rounded-lg transition-all hover:scale-105 shadow-lg text-sm md:text-base">
                                Daftar Disini
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 md:h-5 md:w-5"
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

            <!-- Slide 2 - Program IB -->
            <div class="hero-slide absolute inset-0">
                <div class="absolute inset-0 bg-linear-to-r from-black/70 via-black/50 to-transparent z-10"></div>
                <img src="{{ asset('assets/Background IB Program.JPG') }}" alt="IB Program"
                    class="w-full h-full object-cover">
                <div class="absolute inset-0 z-20 flex items-center">
                    <div class="container mx-auto px-4 sm:px-6 md:px-12 lg:px-24 xl:px-32">
                        <div class="max-w-3xl">
                            <p
                                class="text-yellow-400 font-bold text-sm sm:text-base md:text-lg lg:text-xl mb-3 md:mb-4 tracking-wider">
                                SMA NEGERI 1 MATAULI PANDAN
                            </p>
                            <h1
                                class="text-white text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight mb-4 md:mb-6">
                                Mempersiapkan Siswa untuk Dunia Global melalui Program IB
                            </h1>
                            <p class="text-white/90 text-base sm:text-lg md:text-xl mb-6 md:mb-8 italic">
                                Kurikulum internasional yang menumbuhkan kepemimpinan, riset, dan karakter pelajar
                                Pancasila.
                            </p>
                            <a href="{{ url('/program#ib-program') }}"
                                class="inline-flex items-center gap-2 md:gap-3 bg-yellow-400 hover:bg-yellow-500 text-black font-bold px-6 py-3 md:px-8 md:py-4 rounded-lg transition-all hover:scale-105 shadow-lg text-sm md:text-base">
                                Kenali Program IB
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 md:h-5 md:w-5"
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

            <!-- Slide 3 - Fasilitas -->
            <div class="hero-slide absolute inset-0">
                <div class="absolute inset-0 bg-linear-to-r from-black/70 via-black/50 to-transparent z-10"></div>
                <img src="{{ asset('assets/Asrama.jpg') }}" alt="School Activities"
                    class="w-full h-full object-cover">
                <div class="absolute inset-0 z-20 flex items-center">
                    <div class="container mx-auto px-4 sm:px-6 md:px-12 lg:px-24 xl:px-32">
                        <div class="max-w-3xl">
                            <p
                                class="text-yellow-400 font-bold text-sm sm:text-base md:text-lg lg:text-xl mb-3 md:mb-4 tracking-wider">
                                FASILITAS LENGKAP
                            </p>
                            <h1
                                class="text-white text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight mb-4 md:mb-6">
                                Lingkungan Belajar Modern dan Nyaman
                            </h1>
                            <p class="text-white/90 text-base sm:text-lg md:text-xl mb-6 md:mb-8 italic">
                                Didukung Teknologi dan Tenaga Pengajar Profesional
                            </p>
                            <a href="{{ url('/tentang-kami#fasilitas') }}"
                                class="inline-flex items-center gap-2 md:gap-3 bg-yellow-400 hover:bg-yellow-500 text-black font-bold px-6 py-3 md:px-8 md:py-4 rounded-lg transition-all hover:scale-105 shadow-lg text-sm md:text-base">
                                Lihat Fasilitas
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 md:h-5 md:w-5"
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

        <!-- Navigation Arrows -->
        <button onclick="changeSlide(-1)"
            class="absolute left-2 md:left-6 lg:left-8 top-1/2 -translate-y-1/2 z-30 bg-white/30 hover:bg-white/50 backdrop-blur-sm text-white p-2 md:p-3 lg:p-4 rounded-full transition-all shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 md:h-5 md:w-5 lg:h-6 lg:w-6" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        <button onclick="changeSlide(1)"
            class="absolute right-2 md:right-6 lg:right-8 top-1/2 -translate-y-1/2 z-30 bg-white/30 hover:bg-white/50 backdrop-blur-sm text-white p-2 md:p-3 lg:p-4 rounded-full transition-all shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 md:h-5 md:w-5 lg:h-6 lg:w-6" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </button>

        <!-- Dots Navigation -->
        <div class="absolute bottom-6 md:bottom-8 left-1/2 -translate-x-1/2 z-30 flex gap-2 md:gap-3">
            <button onclick="goToSlide(0)"
                class="dot active w-2.5 h-2.5 md:w-3 md:h-3 rounded-full bg-white/50 hover:bg-white transition-all"></button>
            <button onclick="goToSlide(1)"
                class="dot w-2.5 h-2.5 md:w-3 md:h-3 rounded-full bg-white/50 hover:bg-white transition-all"></button>
            <button onclick="goToSlide(2)"
                class="dot w-2.5 h-2.5 md:w-3 md:h-3 rounded-full bg-white/50 hover:bg-white transition-all"></button>
        </div>
    </section>
    <!-- ============================================ -->
    <!-- HERO SLIDER SECTION - END -->
    <!-- ============================================ -->

    <!-- ============================================ -->
    <!-- TENTANG KAMI SECTION - START -->
    <!-- ============================================ -->
    <section id="tentang-kami" class="py-12 md:py-16 lg:py-20 bg-[#fff9f9]">
        <div class="container mx-auto px-4 sm:px-6 md:px-12 lg:px-24 xl:px-32">

            <!-- Section Title -->
            <div class="text-center mb-12 md:mb-16">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-matauli-red-dark mb-4">
                    Tentang Kami
                </h2>
                <div class="w-20 md:w-24 h-1 bg-yellow-400 mx-auto"></div>
            </div>

            <!-- Tentang Kami Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 md:gap-10 lg:gap-12 mb-12 md:mb-16">

                <!-- Kepala Sekolah -->
                <div class="flex flex-col items-center">
                    <div class="relative mb-8 md:mb-10">
                        <div
                            class="w-48 h-48 md:w-56 md:h-56 lg:w-64 lg:h-64 rounded-full overflow-hidden border-4 md:border-6 lg:border-8 border-matauli-red-dark shadow-2xl">
                            <img src="assets/pak kepsek deden_merah maroon.png" alt="Kepala Sekolah"
                                class="w-full h-full object-cover">
                        </div>
                        <div
                            class="absolute -bottom-4 left-1/2 -translate-x-1/2 bg-matauli-red-dark text-white px-4 md:px-6 py-2 rounded-full shadow-lg">
                            <p class="text-xs md:text-sm font-semibold whitespace-nowrap">DEDEN RACHMAWAN, S.Pd., M.M
                            </p>
                            <p class="text-[10px] md:text-xs text-center">Kepala Sekolah SMAN 1</p>
                        </div>
                    </div>
                </div>

                <!-- School Description -->
                <div class="lg:col-span-1 flex items-center">
                    <div class="text-center lg:text-left">
                        <p class="text-gray-700 text-base md:text-lg leading-relaxed text-justify">
                            SMA Negeri 1 Plus Matauli Pandan merupakan sekolah negeri unggulan di bawah naungan Yayasan
                            MATAULI dan Kementerian Pendidikan dan Kebudayaan Provinsi Sumatera Utara. Didirikan pada 14
                            Juni 1994, hingga tahun 2025 sekolah ini telah meluluskan 30 angkatan dengan lebih dari
                            8.000 alumni.
                        </p>
                    </div>
                </div>

                <!-- Ketua Umum -->
                <div class="flex flex-col items-center">
                    <div class="relative mb-8 md:mb-10">
                        <div
                            class="w-48 h-48 md:w-56 md:h-56 lg:w-64 lg:h-64 rounded-full overflow-hidden border-4 md:border-6 lg:border-8 border-matauli-red-dark shadow-2xl">
                            <img src="assets/bu ketum fitri_merah maroon.png" alt="Ketua Umum"
                                class="w-full h-full object-cover">
                        </div>
                        <div
                            class="absolute -bottom-4 left-1/2 -translate-x-1/2 bg-matauli-red-dark text-white px-4 md:px-6 py-2 rounded-full shadow-lg">
                            <p class="text-xs md:text-sm font-semibold whitespace-nowrap">Fitri Krisnawati Tandjung,
                                B.Sc</p>
                            <p class="text-[10px] md:text-xs text-center">Ketua Umum</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Statistics -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12 lg:gap-16 max-w-5xl mx-auto">
                <div class="text-center">
                    <div class="flex items-center justify-center gap-6 md:gap-8">
                        <div class="flex-1">
                            <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold text-matauli-red-dark mb-3">2,550+
                            </h3>
                            <p class="text-gray-600 text-base md:text-lg">Peserta Didik</p>
                        </div>
                        <div class="hidden md:block w-1 h-20 lg:h-24 bg-yellow-400"></div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="flex items-center justify-center gap-6 md:gap-8">
                        <div class="flex-1">
                            <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold text-matauli-red-dark mb-3">999</h3>
                            <p class="text-gray-600 text-base md:text-lg">Guru</p>
                        </div>
                        <div class="hidden md:block w-1 h-20 lg:h-24 bg-yellow-400"></div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="flex items-center justify-center">
                        <div class="flex-1">
                            <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold text-matauli-red-dark mb-3">999</h3>
                            <p class="text-gray-600 text-base md:text-lg">Ruang Kelas</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="text-center mt-10 md:mt-12">
                <a href="/tentang-kami"
                    class="inline-flex items-center gap-2 md:gap-3 bg-yellow-400 hover:bg-yellow-500 text-black font-bold px-6 py-3 md:px-8 md:py-4 rounded-lg transition-all hover:scale-105 shadow-lg text-sm md:text-base">
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
    </section>
    <!-- ============================================ -->
    <!-- TENTANG KAMI SECTION - END -->
    <!-- ============================================ -->

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

    <!-- ============================================ -->
    <!-- PRESTASI SECTION - START -->
    <!-- ============================================ -->
    <section id="prestasi" class="py-12 md:py-16 lg:py-20 bg-[#fff9f9]">
        <div class="container mx-auto px-4 sm:px-6 md:px-12 lg:px-24 xl:px-32">

            <!-- Section Title -->
            <div class="text-center mb-12 md:mb-16">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-matauli-red-dark mb-4">
                    Prestasi
                </h2>
                <div class="w-20 md:w-24 h-1 bg-yellow-400 mx-auto"></div>
            </div>

            <!-- Prestasi Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 mb-12">

                <!-- Prestasi Card 1 -->
                <a href="/prestasi/olimpiade-matematika" class="group block">
                    <div
                        class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 hover:border-yellow-400 h-full">

                        <!-- Image -->
                        <div class="relative h-48 overflow-hidden">
                            <img src="{{ asset('assets/Test Gambar.jpeg') }}" alt="Prestasi Olimpiade Matematika"
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
                            <img src="{{ asset('assets/Test Gambar.jpeg') }}" alt="Prestasi Karya Tulis Ilmiah"
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
                            <img src="{{ asset('assets/Test Gambar.jpeg') }}" alt="Prestasi Kompetisi Robotika"
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

            <!-- CTA Global -->
            <div class="text-center">
                <a href="/program#prestasi-siswa"
                    class="inline-flex items-center gap-2 md:gap-3 bg-yellow-400 hover:bg-yellow-500 text-black font-bold px-6 py-3 md:px-8 md:py-4 rounded-lg transition-all hover:scale-105 shadow-lg">
                    Lihat Semua Prestasi
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>

        </div>
    </section>
    <!-- ============================================ -->
    <!-- PRESTASI SECTION - END -->
    <!-- ============================================ -->


    <!-- ============================================ -->
    <!-- TESTIMONIALS SECTION - START -->
    <!-- ============================================ -->
    <section id="testimonials" class="py-12 md:py-16 lg:py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 md:px-12 lg:px-24 xl:px-32">

            <!-- Section Title -->
            <div class="text-center mb-12 md:mb-16">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-matauli-red-dark mb-4">
                    Testimonials
                </h2>
                <div class="w-20 md:w-24 h-1 bg-yellow-400 mx-auto"></div>
            </div>

            <!-- Testimonials Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 mb-10">

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

            <!-- CTA Button -->
            <div class="text-center">
                <a href="/testimonials"
                    class="inline-flex items-center gap-2 md:gap-3 bg-yellow-400 hover:bg-yellow-500 text-black font-bold px-6 py-3 md:px-8 md:py-4 rounded-lg transition-all hover:scale-105 shadow-lg text-sm md:text-base">
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
    </section>
    <!-- ============================================ -->
    <!-- TESTIMONIALS SECTION - END -->
    <!-- ============================================ -->

    <!-- ============================================ -->
    <!-- BERITA TERKINI SECTION - START -->
    <!-- ============================================ -->
    <section id="berita-terkini" class="py-12 md:py-16 lg:py-20 bg-[#fff9f9]">
        <div class="container mx-auto px-4 sm:px-6 md:px-12 lg:px-24 xl:px-32">

            <!-- Section Title -->
            <div class="text-center mb-12 md:mb-16">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-matauli-red-dark mb-4">
                    Berita Terkini
                </h2>
                <div class="w-20 md:w-24 h-1 bg-yellow-400 mx-auto"></div>
            </div>

            <!-- Berita Grid - Row 1 -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 mb-6 md:mb-8">

                <!-- Berita Card 1 -->
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

                <!-- Berita Card 2 -->
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

                <!-- Berita Card 3 -->
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

            <!-- Berita Grid - Row 2 (Facebook Style) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 mb-10">

                <!-- Berita Facebook Card 1 -->
                <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden">
                    <!-- Image -->
                    <div class="relative h-48 md:h-52 bg-linear-to-br from-red-800 to-red-900 overflow-hidden">
                        <div class="absolute inset-0 bg-black/30"></div>
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

                <!-- Berita Facebook Card 2 -->
                <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden">
                    <!-- Image -->
                    <div class="relative h-48 md:h-52 bg-linear-to-br from-red-800 to-red-900 overflow-hidden">
                        <div class="absolute inset-0 bg-black/30"></div>
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

                <!-- Berita Facebook Card 3 -->
                <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden">
                    <!-- Image -->
                    <div class="relative h-48 md:h-52 bg-linear-to-br from-red-800 to-red-900 overflow-hidden">
                        <div class="absolute inset-0 bg-black/30"></div>
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

            <!-- CTA Button -->
            <div class="text-center">
                <a href="/dokumentasi#berita"
                    class="inline-flex items-center gap-2 md:gap-3 bg-yellow-400 hover:bg-yellow-500 text-black font-bold px-6 py-3 md:px-8 md:py-4 rounded-lg transition-all hover:scale-105 shadow-lg text-sm md:text-base">
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
    </section>
    <!-- ============================================ -->
    <!-- BERITA TERKINI SECTION - END -->
    <!-- ============================================ -->

    <!-- ============================================ -->
    <!-- FOOTER SECTION - START -->
    <!-- ============================================ -->
    <footer class="bg-matauli-red-dark text-white">
        <div class="relative mx-auto px-4 sm:px-6 md:px-12 lg:px-24 xl:px-32 py-12 md:py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-25">

                <!-- Column 1: Logo & School Name -->
                <div class="flex flex-col items-start gap-6 lg:pl-6">

                    <div class="flex items-center gap-3">

                        <!-- Logo wrapper -->
                        <div
                            class="w-20 h-20 md:w-24 md:h-24 lg:w-28 lg:h-28 flex items-center justify-center shrink-0 -ml-4">
                            <img src="assets/Logo_SMAN_Matauli.png" alt="Logo SMAN Matauli"
                                class="max-w-full max-h-full object-contain">
                        </div>

                        <!-- Divider -->
                        <div class="w-0.5 h-20 md:h-24 lg:h-28 bg-yellow-400 shrink-0"></div>

                        <!-- Text -->
                        <div class="flex flex-col justify-center leading-tight">
                            <h2 class="text-2xl md:text-3xl font-bold text-white">
                                <span class="inline-flex items-center tracking-widest">
                                    SMAN <span class="ml-3.5">1</span>
                                </span>
                                <span class="block">MATAULI</span>
                                <span class="block tracking-wide">PANDAN</span>
                            </h2>
                        </div>
                    </div>

                    <!-- Copyright -->
                    <div class="text-xs md:text-sm leading-relaxed">
                        <p>&copy; 2026. All right reserved.</p>
                        <p class="font-bold text-yellow-400">SMAN 1 Matauli Pandan</p>
                    </div>

                </div>


                <!-- Column 2: Kunjungi Kami -->
                <div class="flex flex-col lg:pl-6">
                    <h3 class="text-lg md:text-xl font-bold mb-4 md:mb-6 pb-2 border-b-2 border-yellow-400 w-fit">
                        Kunjungi Kami
                    </h3>
                    <div class="space-y-3 md:space-y-4">
                        <div class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400 shrink-0 mt-1"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <p class="text-gray-200 leading-relaxed text-xs md:text-sm">
                                Jl. Pendidikan No. 123, Pandan,<br>
                                Tapanuli Tengah, Sumatera Utara
                            </p>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400 shrink-0"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                            </svg>
                            <a href="tel:+628888888888"
                                class="text-gray-200 hover:text-yellow-400 transition text-xs md:text-sm">
                                +62 888-8888-8888
                            </a>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400 shrink-0"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                            </svg>
                            <a href="mailto:examplematauli@gmail.com"
                                class="text-gray-200 hover:text-yellow-400 transition text-xs md:text-sm">
                                examplematauli@gmail.com
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Column 3: Link Terkait -->
                <div class="flex flex-col lg:pl-6">
                    <h3 class="text-lg md:text-xl font-bold mb-4 md:mb-6 pb-2 border-b-2 border-yellow-400 w-fit">
                        Link Terkait
                    </h3>
                    <ul class="space-y-2 md:space-y-3">
                        <li><a href="/tentang-kami"
                                class="text-gray-200 hover:text-yellow-400 transition hover:translate-x-1 inline-block text-xs md:text-sm">Tentang
                                Kami</a></li>
                        <li><a href="/program#keahlian"
                                class="text-gray-200 hover:text-yellow-400 transition hover:translate-x-1 inline-block text-xs md:text-sm">Program
                                Keahlian</a></li>
                        <li><a href="/program#prestasi-siswa"
                                class="text-gray-200 hover:text-yellow-400 transition hover:translate-x-1 inline-block text-xs md:text-sm">Prestasi
                                Siswa</a></li>
                        <li><a href="/dokumentasi#berita"
                                class="text-gray-200 hover:text-yellow-400 transition hover:translate-x-1 inline-block text-xs md:text-sm">Berita
                                Terkini</a></li>
                        <li><a href="/tentang-kami#sejarah-sekolah"
                                class="text-gray-200 hover:text-yellow-400 transition hover:translate-x-1 inline-block text-xs md:text-sm">Sejarah
                                Sekolah</a></li>
                        <li><a href="/ppdb"
                                class="text-gray-200 hover:text-yellow-400 transition hover:translate-x-1 inline-block text-xs md:text-sm">PPDB
                                Online</a></li>
                    </ul>
                </div>

                <!-- Column 4: Ikuti Kami -->
                <div class="flex flex-col lg:pl-6">
                    <h3 class="text-lg md:text-xl font-bold mb-4 md:mb-6 pb-2 border-b-2 border-yellow-400 w-fit">
                        Ikuti Kami
                    </h3>
                    <div class="flex flex-wrap gap-3">
                        <a href="https://facebook.com" target="_blank"
                            class="bg-white/10 hover:bg-yellow-400 p-3 rounded-full transition-all hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="https://instagram.com" target="_blank"
                            class="bg-white/10 hover:bg-yellow-400 p-3 rounded-full transition-all hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                        <a href="https://tiktok.com" target="_blank"
                            class="bg-white/10 hover:bg-yellow-400 p-3 rounded-full transition-all hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
                            </svg>
                        </a>
                        <a href="https://youtube.com" target="_blank"
                            class="bg-white/10 hover:bg-yellow-400 p-3 rounded-full transition-all hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- ============================================ -->
    <!-- FOOTER SECTION - END -->
    <!-- ============================================ -->

    <!-- ============================================ -->
    <!-- JAVASCRIPT - START -->
    <!-- ============================================ -->
    <script>
        // ========== HERO SLIDER ==========
        let currentSlide = 0;
        const slides = document.querySelectorAll('.hero-slide');
        const dots = document.querySelectorAll('.dot');
        let autoSlideInterval;

        function showSlide(n) {
            if (n >= slides.length) currentSlide = 0;
            if (n < 0) currentSlide = slides.length - 1;
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));
            slides[currentSlide].classList.add('active');
            dots[currentSlide].classList.add('active');
        }

        function changeSlide(n) {
            currentSlide += n;
            showSlide(currentSlide);
            resetAutoSlide();
        }

        function goToSlide(n) {
            currentSlide = n;
            showSlide(currentSlide);
            resetAutoSlide();
        }

        function autoSlide() {
            currentSlide++;
            showSlide(currentSlide);
        }

        function resetAutoSlide() {
            clearInterval(autoSlideInterval);
            autoSlideInterval = setInterval(autoSlide, 5000);
        }

        // Start auto slide
        autoSlideInterval = setInterval(autoSlide, 5000);

        // Pause on hover
        const heroSlider = document.getElementById('heroSlider');
        if (heroSlider) {
            heroSlider.addEventListener('mouseenter', () => clearInterval(autoSlideInterval));
            heroSlider.addEventListener('mouseleave', () => resetAutoSlide());
        }

        // ========== MOBILE MENU - FIXED VERSION ==========
        const menuToggle = document.getElementById('menuToggle');
        const closeMenu = document.getElementById('closeMenu');
        const mobileMenu = document.getElementById('mobileMenu');
        const menuBackdrop = document.getElementById('menuBackdrop');
        const menuIcon = document.getElementById('menuIcon');
        const closeIcon = document.getElementById('closeIcon');

        function openMenu() {
            mobileMenu.classList.add('active');
            menuBackdrop.classList.add('active');
            document.body.classList.add('menu-open');
            menuIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
        }

        function closeMenuFunc() {
            mobileMenu.classList.remove('active');
            menuBackdrop.classList.remove('active');
            document.body.classList.remove('menu-open');
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        }

        if (menuToggle) {
            menuToggle.addEventListener('click', function() {
                if (mobileMenu.classList.contains('active')) {
                    closeMenuFunc();
                } else {
                    openMenu();
                }
            });
        }

        if (closeMenu) {
            closeMenu.addEventListener('click', closeMenuFunc);
        }

        if (menuBackdrop) {
            menuBackdrop.addEventListener('click', closeMenuFunc);
        }

        // Mobile Dropdown
        document.querySelectorAll('.mobile-dropdown-trigger').forEach(trigger => {
            trigger.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const arrow = this.querySelector('.dropdown-arrow');
                const isOpen = content.classList.contains('open');

                // Close all
                document.querySelectorAll('.mobile-dropdown-content').forEach(el => el.classList.remove(
                    'open'));
                document.querySelectorAll('.dropdown-arrow').forEach(el => el.classList.remove(
                    'rotate-180'));

                // Toggle current
                if (!isOpen) {
                    content.classList.add('open');
                    arrow.classList.add('rotate-180');
                }
            });
        });

        // Close menu on link click
        document.querySelectorAll('#mobileMenu a').forEach(link => {
            link.addEventListener('click', closeMenuFunc);
        });

        // Close on resize
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 1024) {
                closeMenuFunc();
            }
        });
    </script>
    <!-- ============================================ -->
    <!-- JAVASCRIPT - END -->
    <!-- ============================================ -->


</body>

</html>
