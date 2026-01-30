<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah Sekolah - SMAN 1 Matauli Pandan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Custom Colors */
        .bg-matauli-red-dark {
            background-color: #991b1b;
        }

        .text-matauli-red-dark {
            color: #991b1b;
        }

        .border-matauli-red-dark {
            border-color: #991b1b;
        }

        /* Timeline Line Animation */
        .timeline-line {
            position: relative;
            background: linear-gradient(180deg, #991b1b 0%, #7f1d1d 100%);
        }

        .timeline-line::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 0;
            background: linear-gradient(180deg, #fbbf24 0%, #f59e0b 100%);
            animation: fillTimeline 2s ease-out forwards;
        }

        @keyframes fillTimeline {
            to {
                height: 100%;
            }
        }

        /* Timeline Dot Pulse Animation */
        .timeline-dot {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.7;
            }
        }

        /* Card Fade In Animation */
        .timeline-card {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .timeline-card:nth-child(1) {
            animation-delay: 0.2s;
        }

        .timeline-card:nth-child(2) {
            animation-delay: 0.4s;
        }

        .timeline-card:nth-child(3) {
            animation-delay: 0.6s;
        }

        .timeline-card:nth-child(4) {
            animation-delay: 0.8s;
        }

        .timeline-card:nth-child(5) {
            animation-delay: 1s;
        }

        .timeline-card:nth-child(6) {
            animation-delay: 1.2s;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Hover Effect for Cards */
        .timeline-card:hover {
            transform: translateY(-5px) scale(1.02);
        }

        /* Gradient Text */
        .gradient-text {
            background: linear-gradient(135deg, #991b1b 0%, #dc2626 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>

<body class="bg-gray-50">

    <!-- ============================================ -->
    <!-- HEADER/NAVIGATION - Reuse from main page -->
    <!-- ============================================ -->
    <!-- (Copy header dari welcome.blade.php) -->
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
                        <li><a href="{{ url('/sejarah') }}" class="dropdown-item">Sejarah
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
    <div id="menuBackdrop"
     class="fixed inset-0 bg-black/50 z-40 hidden lg:hidden"></div>

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
                        <li><a href="{{ url('/sejarah') }}"
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
    <!-- SEJARAH SEKOLAH SECTION - START -->
    <!-- ============================================ -->
    <section class="py-16 md:py-20 lg:py-24 bg-linear-to-b from-white to-gray-50">
        <div class="container mx-auto px-4 sm:px-6 md:px-12 lg:px-24 xl:px-32">

            <!-- Page Title -->
            <div class="text-center mb-16 md:mb-20">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold gradient-text mb-6">
                    Sejarah Sekolah
                </h1>
                <div class="w-24 md:w-32 h-1.5 bg-linear-to-r from-yellow-400 via-yellow-500 to-yellow-400 mx-auto mb-6">
                </div>
                <p class="text-gray-600 text-base md:text-lg max-w-3xl mx-auto leading-relaxed">
                    Perjalanan panjang SMAN 1 Matauli Pandan dalam mencetak generasi unggul dan berkarakter sejak tahun
                    1994
                </p>
            </div>

            <!-- Timeline Container -->
            <div class="relative max-w-6xl mx-auto">

                <!-- Timeline Line (Center) -->
                <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full timeline-line hidden md:block">
                </div>

                <!-- Timeline Items -->
                <div class="space-y-12 md:space-y-16">

                    <!-- 1994 - Pendirian -->
                    <div class="timeline-card relative">
                        <div class="md:grid md:grid-cols-2 md:gap-8 items-center">
                            <!-- Left Content (Desktop) / Top (Mobile) -->
                            <div class="md:text-right mb-8 md:mb-0">
                                <div
                                    class="bg-white rounded-2xl shadow-xl p-6 md:p-8 hover:shadow-2xl transition-all duration-300 border-l-4 md:border-l-0 md:border-r-4 border-matauli-red-dark">
                                    <h3 class="text-2xl md:text-3xl font-bold text-matauli-red-dark mb-3">
                                        1994 - Pendirian SMAN 1 Matauli Pandan
                                    </h3>
                                    <p class="text-gray-700 leading-relaxed">
                                        SMA Negeri 1 (Plus) Matauli Pandan didirikan pada tahun 1994 di Jl. K. H.
                                        Dewantara No. 01 Pandan, Kabupaten Tapanuli Tengah, Provinsi Sumatera Utara
                                    </p>
                                </div>
                            </div>

                            <!-- Timeline Dot -->
                            <div class="absolute left-0 md:left-1/2 transform md:-translate-x-1/2 -ml-2 md:ml-0">
                                <div class="flex items-center justify-center">
                                    <div
                                        class="w-16 h-16 md:w-20 md:h-20 rounded-full bg-linear-to-br from-matauli-red-dark to-red-900 flex items-center justify-center shadow-xl timeline-dot ring-4 ring-white">
                                        <span class="text-white font-bold text-lg md:text-xl">94</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Space (Desktop) -->
                            <div class="hidden md:block"></div>
                        </div>
                    </div>

                    <!-- 2008 - Sertifikasi -->
                    <div class="timeline-card relative">
                        <div class="md:grid md:grid-cols-2 md:gap-8 items-center">
                            <!-- Left Space (Desktop) -->
                            <div class="hidden md:block"></div>

                            <!-- Timeline Dot -->
                            <div class="absolute left-0 md:left-1/2 transform md:-translate-x-1/2 -ml-2 md:ml-0">
                                <div class="flex items-center justify-center">
                                    <div
                                        class="w-16 h-16 md:w-20 md:h-20 rounded-full bg-linear-to-br from-matauli-red-dark to-red-900 flex items-center justify-center shadow-xl timeline-dot ring-4 ring-white">
                                        <span class="text-white font-bold text-lg md:text-xl">08</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Content (Desktop) / Bottom (Mobile) -->
                            <div class="md:text-left ml-20 md:ml-0">
                                <div
                                    class="bg-white rounded-2xl shadow-xl p-6 md:p-8 hover:shadow-2xl transition-all duration-300 border-l-4 border-matauli-red-dark">
                                    <h3 class="text-2xl md:text-3xl font-bold text-matauli-red-dark mb-3">
                                        2008 - Mendapatkan Sertifikat Sistem Manajemen Mutu
                                    </h3>
                                    <p class="text-gray-700 leading-relaxed">
                                        SMA Negeri 1 (Plus) Matauli Pandan telah mendapatkan sertifikat Sistem Manajemen
                                        Mutu (SMM) ISO 9001 : 2008 yang menjadi pedoman penyelenggaraan sistem manajemen
                                        sekolah.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2012 - Sekolah Penyedia IT -->
                    <div class="timeline-card relative">
                        <div class="md:grid md:grid-cols-2 md:gap-8 items-center">
                            <!-- Left Content (Desktop) / Top (Mobile) -->
                            <div class="md:text-right mb-8 md:mb-0">
                                <div
                                    class="bg-white rounded-2xl shadow-xl p-6 md:p-8 hover:shadow-2xl transition-all duration-300 border-l-4 md:border-l-0 md:border-r-4 border-matauli-red-dark">
                                    <h3 class="text-2xl md:text-3xl font-bold text-matauli-red-dark mb-3">
                                        2012 - Menjadi Sekolah Penyedia Layanan Data Berbasis IT
                                    </h3>
                                    <p class="text-gray-700 leading-relaxed">
                                        Sejak tahun 2012, SMA Negeri 1 (Plus) Matauli Pandan dipercaya sebagai penyedia
                                        layanan data berbasis IT bagi seluruh SMA di Kabupaten Tapanuli Tengah.
                                    </p>
                                </div>
                            </div>

                            <!-- Timeline Dot -->
                            <div class="absolute left-0 md:left-1/2 transform md:-translate-x-1/2 -ml-2 md:ml-0">
                                <div class="flex items-center justify-center">
                                    <div
                                        class="w-16 h-16 md:w-20 md:h-20 rounded-full bg-linear-to-br from-matauli-red-dark to-red-900 flex items-center justify-center shadow-xl timeline-dot ring-4 ring-white">
                                        <span class="text-white font-bold text-lg md:text-xl">12</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Space (Desktop) -->
                            <div class="hidden md:block"></div>
                        </div>
                    </div>

                    <!-- 2014 - Sekolah Bertaraf Internasional -->
                    <div class="timeline-card relative">
                        <div class="md:grid md:grid-cols-2 md:gap-8 items-center">
                            <!-- Left Space (Desktop) -->
                            <div class="hidden md:block"></div>

                            <!-- Timeline Dot -->
                            <div class="absolute left-0 md:left-1/2 transform md:-translate-x-1/2 -ml-2 md:ml-0">
                                <div class="flex items-center justify-center">
                                    <div
                                        class="w-16 h-16 md:w-20 md:h-20 rounded-full bg-linear-to-br from-matauli-red-dark to-red-900 flex items-center justify-center shadow-xl timeline-dot ring-4 ring-white">
                                        <span class="text-white font-bold text-lg md:text-xl">14</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Content (Desktop) / Bottom (Mobile) -->
                            <div class="md:text-left ml-20 md:ml-0">
                                <div
                                    class="bg-white rounded-2xl shadow-xl p-6 md:p-8 hover:shadow-2xl transition-all duration-300 border-l-4 border-matauli-red-dark">
                                    <h3 class="text-2xl md:text-3xl font-bold text-matauli-red-dark mb-3">
                                        2014 - Menjadi Sekolah Bertaraf Internasional
                                    </h3>
                                    <p class="text-gray-700 leading-relaxed">
                                        Direncanakan pada tahun 2014 SMA Negeri 1 (Plus) Matauli Pandan menjadi Sekolah
                                        Bertaraf Internasional
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2021 - Akreditasi A -->
                    <div class="timeline-card relative">
                        <div class="md:grid md:grid-cols-2 md:gap-8 items-center">
                            <!-- Left Content (Desktop) / Top (Mobile) -->
                            <div class="md:text-right mb-8 md:mb-0">
                                <div
                                    class="bg-white rounded-2xl shadow-xl p-6 md:p-8 hover:shadow-2xl transition-all duration-300 border-l-4 md:border-l-0 md:border-r-4 border-matauli-red-dark">
                                    <h3 class="text-2xl md:text-3xl font-bold text-matauli-red-dark mb-3">
                                        2021 - Telah Mendapatkan Akreditasi A
                                    </h3>
                                    <p class="text-gray-700 leading-relaxed">
                                        Sekolah ini telah terakreditasi A dengan Nomor SK Akreditasi 1347/BAN-SM/SK/2021
                                        pada tanggal 8 Desember 2021.
                                    </p>
                                </div>
                            </div>

                            <!-- Timeline Dot -->
                            <div class="absolute left-0 md:left-1/2 transform md:-translate-x-1/2 -ml-2 md:ml-0">
                                <div class="flex items-center justify-center">
                                    <div
                                        class="w-16 h-16 md:w-20 md:h-20 rounded-full bg-linear-to-br from-matauli-red-dark to-red-900 flex items-center justify-center shadow-xl timeline-dot ring-4 ring-white">
                                        <span class="text-white font-bold text-lg md:text-xl">21</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Space (Desktop) -->
                            <div class="hidden md:block"></div>
                        </div>
                    </div>

                    <!-- 2025 - Transformasi Edukasi -->
                    <div class="timeline-card relative">
                        <div class="md:grid md:grid-cols-2 md:gap-8 items-center">
                            <!-- Left Space (Desktop) -->
                            <div class="hidden md:block"></div>

                            <!-- Timeline Dot -->
                            <div class="absolute left-0 md:left-1/2 transform md:-translate-x-1/2 -ml-2 md:ml-0">
                                <div class="flex items-center justify-center">
                                    <div
                                        class="w-16 h-16 md:w-20 md:h-20 rounded-full bg-linear-to-br from-yellow-500 to-yellow-600 flex items-center justify-center shadow-xl ring-4 ring-white animate-pulse">
                                        <span class="text-white font-bold text-lg md:text-xl">25</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Content (Desktop) / Bottom (Mobile) -->
                            <div class="md:text-left ml-20 md:ml-0">
                                <div
                                    class="bg-linear-to-br from-yellow-50 to-orange-50 rounded-2xl shadow-xl p-6 md:p-8 hover:shadow-2xl transition-all duration-300 border-l-4 border-yellow-500">
                                    <div class="flex items-center gap-2 mb-3">
                                        <h3 class="text-2xl md:text-3xl font-bold text-yellow-600">
                                            2025 - Transformasi Edukasi
                                        </h3>
                                        <span
                                            class="bg-yellow-500 text-white text-xs font-bold px-3 py-1 rounded-full animate-pulse">
                                            NOW
                                        </span>
                                    </div>
                                    <p class="text-gray-700 leading-relaxed">
                                        Penerapan Kurikulum Merdeka dan <span
                                            class="font-semibold text-yellow-700">International Baccalaureate</span> dan
                                        transformasi digital di seluruh aspek pembelajaran.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Statistics Section -->
            <div class="mt-20 md:mt-24">
                <div class="bg-linear-to-br from-matauli-red-dark to-red-900 rounded-3xl shadow-2xl p-8 md:p-12">
                    <h2 class="text-2xl md:text-3xl font-bold text-white text-center mb-8 md:mb-12">
                        31 Tahun Perjalanan Mencerdaskan Bangsa
                    </h2>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
                        <!-- Stat 1 -->
                        <div class="text-center">
                            <div class="text-4xl md:text-5xl font-bold text-yellow-400 mb-2">31+</div>
                            <div class="text-white text-sm md:text-base">Tahun Berdiri</div>
                        </div>
                        <!-- Stat 2 -->
                        <div class="text-center">
                            <div class="text-4xl md:text-5xl font-bold text-yellow-400 mb-2">30+</div>
                            <div class="text-white text-sm md:text-base">Angkatan Lulus</div>
                        </div>
                        <!-- Stat 3 -->
                        <div class="text-center">
                            <div class="text-4xl md:text-5xl font-bold text-yellow-400 mb-2">8K+</div>
                            <div class="text-white text-sm md:text-base">Alumni</div>
                        </div>
                        <!-- Stat 4 -->
                        <div class="text-center">
                            <div class="text-4xl md:text-5xl font-bold text-yellow-400 mb-2">A</div>
                            <div class="text-white text-sm md:text-base">Akreditasi</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Back to Home Button -->
            <div class="text-center mt-12 md:mt-16">
                <a href="{{ url('/') }}"
                    class="inline-flex items-center gap-3 bg-yellow-400 hover:bg-yellow-500 text-black font-bold px-8 py-4 rounded-xl transition-all hover:scale-105 shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                            clip-rule="evenodd" />
                    </svg>
                    Kembali ke Beranda
                </a>
            </div>

        </div>
    </section>
    <!-- ============================================ -->
    <!-- SEJARAH SEKOLAH SECTION - END -->
    <!-- ============================================ -->

    <!-- ============================================ -->
    <!-- FOOTER SECTION - START -->
    <!-- ============================================ -->
    <footer class="bg-matauli-red-dark text-white">
        <div class="relative mx-auto px-4 sm:px-6 md:px-12 lg:px-24 xl:px-32 py-12 md:py-16">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-25">

                <!-- Column 1: Logo & School Name -->
                <div class="flex flex-col items-start gap-6 pl-3 lg:pl-6">

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
                            <h2 class="text-2xl lg:text-3xl font-bold text-white">
                                <span class="inline-flex items-center tracking-widest">
                                    SMAN <span class="ml-2.5 lg:ml-3.5">1</span>
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
                        <li><a href="/sejarah"
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