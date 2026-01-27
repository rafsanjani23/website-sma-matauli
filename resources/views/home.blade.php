<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMAN 1 Matauli Pandan - Beranda</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- ============================================ -->
    <!-- HEADER SECTION - START -->
    <!-- ============================================ -->
    <header class="w-full sticky top-0 z-50 shadow-md">

        <!-- ========== TOP BAR - Contact Information ========== -->
        <div class="text-sm text-white w-full">
            <div
                class="text-center font-medium py-2 pb-2 bg-white text-[#000000] flex items-center justify-between px-6 md:px-16 lg:px-32 text-sm h-13">

                <!-- Logo Section -->
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/Logo_Yayasan.png') }}" alt="Logo Yayasan"
                        class="h-10 w-auto object-contain">
                    <img src="{{ asset('assets/Logo_SMAN_Matauli.png') }}" alt="Logo SMAN Matauli"
                        class="h-10 w-auto object-contain">
                    <img src="{{ asset('assets/Logo_Provinsi.png') }}" alt="Logo Provinsi"
                        class="h-10 w-auto object-contain">
                </div>

                <!-- Contact Information -->
                <div class="flex items-center gap-6">

                    <!-- Email -->
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-orange-500" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                        </svg>
                        <a href="mailto:ppdbmatauli@gmail.com" class="hover:text-black">
                            ppdbmatauli@gmail.com
                        </a>
                    </div>

                    <!-- Phone -->
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-orange-500" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                        </svg>
                        <a href="tel:+6282121313131" class="hover:text-black font-semibold">
                            +62 821-2131-3131
                        </a>
                    </div>

                </div>
            </div>

            <!-- ========== MAIN NAVIGATION BAR ========== -->
            <nav
                class="relative h-17.5 flex items-center justify-between px-6 md:px-16 lg:px-24 xl:px-32 py-4 bg-matauli-red-dark text-gray-900 transition-all shadow">

                <!-- Brand Section -->
                <div class="flex items-center gap-4">
                    <img src="{{ asset('assets/Logo_SMAN_Matauli.png') }}" alt="Logo SMAN" class="h-12 w-auto">

                    <div class="flex flex-col text-[#fff9f9]">
                        <h1 class="text-xl font-bold tracking-tight leading-tight">
                            SMAN 1 MATAULI PANDAN
                        </h1>
                        <span class="text-xs font-light">
                            The center of excellence
                        </span>
                    </div>
                </div>

                <!-- Desktop Navigation Menu -->
                <ul class="hidden md:flex items-center space-x-10 md:pl-28 font-semibold text-lg">

                    <!-- Menu: Beranda -->
                    <li>
                        <a href="{{ url('/') }}" class="navlink-hover">
                            Beranda
                        </a>
                    </li>

                    <!-- Dropdown Menu: Tentang Kami -->
                    <li class="relative group">
                        <button class="navlink-hover flex items-center cursor-pointer focus:outline-none">
                            Tentang Kami
                            <svg class="ml-1 w-4 h-4 transition-transform duration-300 group-hover:rotate-180"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Dropdown Content -->
                        <ul class="nav-dropdown-content">
                            <li>
                                <a href="{{ url('/tentang-kami#sejarah-sekolah') }}" class="dropdown-item">
                                    Sejarah Sekolah
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/tentang-kami#visi-misi') }}" class="dropdown-item">
                                    Visi & Misi
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/tentang-kami#kurikulum') }}" class="dropdown-item">
                                    Kurikulum Sekolah
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/tentang-kami#tenaga-pendidik') }}" class="dropdown-item">
                                    Tenaga Pendidik & Kependidikan
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/tentang-kami#fasilitas') }}" class="dropdown-item">
                                    Fasilitas Sekolah
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/tentang-kami#kemitraan') }}" class="dropdown-item">
                                    Kemitraan Sekolah
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/tentang-kami#asrama') }}" class="dropdown-item">
                                    Tentang Asrama
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Dropdown Menu: Program -->
                    <li class="relative group">
                        <button class="navlink-hover flex items-center cursor-pointer focus:outline-none">
                            Program
                            <svg class="ml-1 w-4 h-4 transition-transform duration-300 group-hover:rotate-180"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Dropdown Content -->
                        <ul class="nav-dropdown-content">
                            <li>
                                <a href="{{ url('/program#prestasi-siswa') }}" class="dropdown-item">
                                    Prestasi Siswa
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/program#ekstrakulikuler') }}" class="dropdown-item">
                                    Ekstrakulikuler
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Dropdown Menu: Dokumentasi -->
                    <li class="relative group">
                        <button class="navlink-hover flex items-center cursor-pointer focus:outline-none">
                            Dokumentasi
                            <svg class="ml-1 w-4 h-4 transition-transform duration-300 group-hover:rotate-180"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Dropdown Content -->
                        <ul class="nav-dropdown-content">
                            <li>
                                <a href="{{ url('/dokumentasi#galeri') }}" class="dropdown-item">
                                    Galeri
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/dokumentasi#berita') }}" class="dropdown-item">
                                    Berita
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/dokumentasi#kegiatan-sekolah') }}" class="dropdown-item">
                                    Kegiatan Sekolah
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>

                <!-- Mobile Menu Button -->
                <button aria-label="menu-btn" type="button"
                    class="menu-btn inline-block md:hidden active:scale-90 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                        class="fill-white">
                        <path
                            d="M3 7a1 1 0 1 0 0 2h24a1 1 0 1 0 0-2zm0 7a1 1 0 1 0 0 2h24a1 1 0 1 0 0-2zm0 7a1 1 0 1 0 0 2h24a1 1 0 1 0 0-2z" />
                    </svg>
                </button>

                <!-- Mobile Menu Dropdown -->
                <div class="mobile-menu absolute top-17.5 right-0 w-40 bg-white shadow-sm p-6 hidden md:hidden">
                    <ul class="flex flex-col space-y-3 text-xl font-semibold">
                        <li><a href="{{ url('/') }}" class="text-sm">Beranda</a></li>
                        <li><a href="{{ url('/tentang-kami') }}" class="text-sm">Tentang Kami</a></li>
                        <li><a href="{{ url('/program') }}" class="text-sm">Program</a></li>
                        <li><a href="{{ url('/dokumentasi') }}" class="text-sm">Dokumentasi</a></li>
                    </ul>
                </div>

            </nav>
        </div>
    </header>
    <!-- ============================================ -->
    <!-- HEADER SECTION - END -->
    <!-- ============================================ -->

    <!-- ============================================ -->
    <!-- HERO SLIDER SECTION - START -->
    <!-- ============================================ -->
    <section class="relative h-screen overflow-hidden">

        <!-- Slides Container -->
        <div id="heroSlider" class="relative h-full">

            <!-- ========== SLIDE 1: Main Hero ========== -->
            <div class="hero-slide active absolute inset-0">
                <!-- Overlay Gradient -->
                <div class="absolute inset-0 bg-linear-to-r from-black/70 via-black/50 to-transparent z-10"></div>

                <!-- Background Image -->
                <img src="{{ asset('assets/Gerbang Depan Sekolah.jpeg') }}" alt="School Building"
                    class="w-full h-full object-cover">

                <!-- Content -->
                <div class="absolute inset-0 z-20 flex items-center">
                    <div class="container mx-auto px-6 md:px-16 lg:px-24 xl:px-32">
                        <div class="max-w-3xl">
                            <p class="text-yellow-400 font-bold text-lg md:text-xl mb-4 tracking-wider">
                                SMA NEGERI 1 MATAULI PANDAN
                            </p>
                            <h1 class="text-white text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                                Sekolah Unggul Berkarakter Pancasila & Berdaya Saing Global
                            </h1>
                            <p class="text-white/90 text-lg md:text-xl mb-8 italic">
                                Bergabung dan Tumbuh Bersama SMA Negeri 1 Matauli Pandan
                            </p>
                            <a href="{{ url('/ppdb') }}"
                                class="inline-flex items-center gap-3 bg-yellow-400 hover:bg-yellow-500 text-black font-bold px-8 py-4 rounded-lg transition-all hover:scale-105 shadow-lg">
                                Daftar Disini
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ========== SLIDE 2: IB Program ========== -->
            <div class="hero-slide absolute inset-0">
                <!-- Overlay Gradient -->
                <div class="absolute inset-0 bg-linear-to-r from-black/70 via-black/50 to-transparent z-10"></div>

                <!-- Background Image -->
                <img src="{{ asset('assets/Background IB Program.JPG') }}" alt="IB Program"
                    class="w-full h-full object-cover">

                <!-- Content -->
                <div class="absolute inset-0 z-20 flex items-center">
                    <div class="container mx-auto px-6 md:px-16 lg:px-24 xl:px-32">
                        <div class="max-w-3xl">
                            <p class="text-yellow-400 font-bold text-lg md:text-xl mb-4 tracking-wider">
                                SMA NEGERI 1 MATAULI PANDAN
                            </p>
                            <h1 class="text-white text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                                Mempersiapkan Siswa untuk Dunia Global melalui Program IB
                            </h1>
                            <p class="text-white/90 text-lg md:text-xl mb-8 italic">
                                Kurikulum internasional yang menumbuhkan kepemimpinan, riset, dan karakter pelajar
                                Pancasila.
                            </p>
                            <a href="{{ url('/program#ib-program') }}"
                                class="inline-flex items-center gap-3 bg-yellow-400 hover:bg-yellow-500 text-black font-bold px-8 py-4 rounded-lg transition-all hover:scale-105 shadow-lg">
                                Kenali Program IB
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ========== SLIDE 3: Facilities ========== -->
            <div class="hero-slide absolute inset-0">
                <!-- Overlay Gradient -->
                <div class="absolute inset-0 bg-linear-to-r from-black/70 via-black/50 to-transparent z-10"></div>

                <!-- Background Image -->
                <img src="{{ asset('assets/Asrama.jpg') }}" alt="School Activities"
                    class="w-full h-full object-cover">

                <!-- Content -->
                <div class="absolute inset-0 z-20 flex items-center">
                    <div class="container mx-auto px-6 md:px-16 lg:px-24 xl:px-32">
                        <div class="max-w-3xl">
                            <p class="text-yellow-400 font-bold text-lg md:text-xl mb-4 tracking-wider">
                                FASILITAS LENGKAP
                            </p>
                            <h1 class="text-white text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                                Lingkungan Belajar Modern dan Nyaman
                            </h1>
                            <p class="text-white/90 text-lg md:text-xl mb-8 italic">
                                Didukung Teknologi dan Tenaga Pengajar Profesional
                            </p>
                            <a href="{{ url('/tentang-kami#fasilitas') }}"
                                class="inline-flex items-center gap-3 bg-yellow-400 hover:bg-yellow-500 text-black font-bold px-8 py-4 rounded-lg transition-all hover:scale-105 shadow-lg">
                                Lihat Fasilitas
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
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
            class="absolute left-4 md:left-8 top-1/2 -translate-y-1/2 z-30 bg-white/20 hover:bg-white/40 backdrop-blur-sm text-white p-3 md:p-4 rounded-full transition-all shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
        </button>

        <button onclick="changeSlide(1)"
            class="absolute right-4 md:right-8 top-1/2 -translate-y-1/2 z-30 bg-white/20 hover:bg-white/40 backdrop-blur-sm text-white p-3 md:p-4 rounded-full transition-all shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </button>

        <!-- Dots Navigation -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-30 flex gap-3">
            <button onclick="goToSlide(0)"
                class="dot active w-3 h-3 rounded-full bg-white/50 hover:bg-white transition-all"></button>
            <button onclick="goToSlide(1)"
                class="dot w-3 h-3 rounded-full bg-white/50 hover:bg-white transition-all"></button>
            <button onclick="goToSlide(2)"
                class="dot w-3 h-3 rounded-full bg-white/50 hover:bg-white transition-all"></button>
        </div>

    </section>
    <!-- ============================================ -->
    <!-- HERO SLIDER SECTION - END -->
    <!-- ============================================ -->

    <!-- ============================================ -->
    <!-- ABOUT SECTION - START -->
    <!-- ============================================ -->
    <section id="tentang" class="py-20 bg-white">
        <div class="container mx-auto px-6 md:px-16 lg:px-24 xl:px-32">

            <!-- Section Title -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-matauli-red-dark mb-4">
                    Tentang Kami
                </h2>
                <div class="w-24 h-1 bg-yellow-400 mx-auto"></div>
            </div>

            <!-- ========== About Content Grid ========== -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 mb-16">

                <!-- Kepala Sekolah -->
                <div class="flex flex-col items-center">
                    <div class="relative mb-6">
                        <!-- Photo Container -->
                        <div
                            class="w-64 h-64 rounded-full overflow-hidden border-8 border-matauli-red-dark shadow-2xl">
                            <img src="{{ asset('assets/pak kepsek deden_merah maroon.png') }}" alt="Kepala Sekolah"
                                class="w-full h-full object-cover">
                        </div>

                        <!-- Name Badge -->
                        <div
                            class="absolute -bottom-4 left-1/2 -translate-x-1/2 bg-matauli-red-dark text-white px-6 py-2 rounded-full shadow-lg whitespace-nowrap">
                            <p class="text-sm font-semibold">DEDEN RACHMAWAN, S.Pd., M.M</p>
                            <p class="text-xs text-center">Kepala Sekolah SMAN 1</p>
                        </div>
                    </div>
                </div>

                <!-- School Description -->
                <div class="lg:col-span-1 flex items-center">
                    <div class="text-center lg:text-left">
                        <p class="text-gray-700 text-lg leading-relaxed">
                            SMA Negeri 1 Plus Matauli Pandan merupakan sekolah negeri unggulan di bawah naungan Yayasan
                            MATAULI dan Kementerian Pendidikan dan Kebudayaan Provinsi Sumatera Utara. Didirikan pada 14
                            Juni 1994, hingga tahun 2025 sekolah ini telah meluluskan 30 angkatan dengan lebih dari
                            8.000 alumni.
                        </p>
                    </div>
                </div>

                <!-- Ketua Umum -->
                <div class="flex flex-col items-center">
                    <div class="relative mb-6">
                        <!-- Photo Container -->
                        <div
                            class="w-64 h-64 rounded-full overflow-hidden border-8 border-matauli-red-dark shadow-2xl">
                            <img src="{{ asset('assets/bu ketum fitri_merah maroon.png') }}" alt="Ketua Umum"
                                class="w-full h-full object-cover">
                        </div>

                        <!-- Name Badge -->
                        <div
                            class="absolute -bottom-4 left-1/2 -translate-x-1/2 bg-matauli-red-dark text-white px-6 py-2 rounded-full shadow-lg whitespace-nowrap">
                            <p class="text-sm font-semibold">Fitri Krisnawati Tandjung, B.Sc</p>
                            <p class="text-xs text-center">Ketua Umum</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- ========== Statistics ========== -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">

                <!-- Stat 1: Peserta Didik -->
                <div class="text-center">
                    <div class="flex items-center justify-center gap-4">
                        <div>
                            <h3 class="text-5xl font-bold text-matauli-red-dark">2,550+</h3>
                            <p class="text-gray-600 text-lg mt-2">Peserta Didik</p>
                        </div>
                        <div class="hidden md:block w-1 h-20 bg-matauli-yellow"></div>
                    </div>
                </div>

                <!-- Stat 2: Guru -->
                <div class="text-center">
                    <div class="flex items-center justify-center gap-4">
                        <div>
                            <h3 class="text-5xl font-bold text-matauli-red-dark">999</h3>
                            <p class="text-gray-600 text-lg mt-2">Guru</p>
                        </div>
                        <div class="hidden md:block w-1 h-20 bg-matauli-yellow"></div>
                    </div>
                </div>

                <!-- Stat 3: Ruang Kelas -->
                <div class="text-center">
                    <div class="flex items-center justify-center gap-4">
                        <div>
                            <h3 class="text-5xl font-bold text-matauli-red-dark">999</h3>
                            <p class="text-gray-600 text-lg mt-2">Ruang Kelas</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- CTA Button -->
            <div class="text-center mt-12">
                <a href="{{ url('/tentang-kami') }}"
                    class="inline-flex items-center gap-3 bg-yellow-400 hover:bg-yellow-500 text-black font-bold px-8 py-4 rounded-lg transition-all hover:scale-105 shadow-lg">
                    Selengkapnya
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
    <!-- ABOUT SECTION - END -->
    <!-- ============================================ -->

    <!-- ============================================ -->
    <!-- FOOTER SECTION - START -->
    <!-- ============================================ -->
    <footer class="bg-matauli-red-dark text-white">

        <!-- Footer Content Container -->
        <div class="container mx-auto px-6 md:px-16 lg:px-24 xl:px-32 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">

                <!-- ========== COLUMN 1: Logo & School Name ========== -->
                <div class="flex flex-col items-start space-y-6">

                    <!-- Logo & Name Container -->
                    <div class="flex items-start gap-3">
                        <!-- Logo -->
                        <img src="{{ asset('assets/Logo_SMAN_Matauli.png') }}" alt="Logo SMAN Matauli"
                            class="h-32 w-auto shrink-0">

                        <!-- Vertical Divider -->
                        <div class="h-32 w-0.75 bg-matauli-yellow shrink-0"></div>

                        <!-- School Name -->
                        <div class="flex flex-col justify-center h-32">
                            <h2 class="text-3xl font-bold leading-tight text-white whitespace-nowrap">
                                <span class="block">
                                    <span class="tracking-widest">SMAN</span>
                                    <span class="ml-1.5">1</span>
                                </span>
                                <span class="block">MATAULI</span>
                                <span class="block tracking-wide">PANDAN</span>
                            </h2>
                        </div>
                    </div>

                    <!-- Copyright Section -->
                    <div class="text-sm text-gray-300 leading-relaxed">
                        <p>Copyright 2026. All right reserved.</p>
                        <p class="font-semibold text-white">SMAN 1 Matauli Pandan</p>
                    </div>
                </div>

                <!-- ========== COLUMN 2: Kunjungi Kami ========== -->
                <div class="flex flex-col">
                    <h3 class="text-xl font-bold mb-6 pb-2 border-b-2 border-matauli-yellow w-fit">
                        Kunjungi Kami
                    </h3>

                    <div class="space-y-4">
                        <!-- Address -->
                        <div class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-matauli-yellow shrink-0 mt-1"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <p class="text-gray-200 leading-relaxed text-sm">
                                Jl. Pendidikan No. 123, Pandan,<br>
                                Tapanuli Tengah, Sumatera Utara
                            </p>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-matauli-yellow shrink-0"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                            </svg>
                            <a href="tel:+628888888888"
                                class="text-gray-200 hover:text-matauli-yellow transition text-sm">
                                +62 888-8888-8888
                            </a>
                        </div>

                        <!-- Email -->
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-matauli-yellow shrink-0"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                            </svg>
                            <a href="mailto:examplematauli@gmail.com"
                                class="text-gray-200 hover:text-matauli-yellow transition text-sm">
                                examplematauli@gmail.com
                            </a>
                        </div>
                    </div>
                </div>

                <!-- ========== COLUMN 3: Link Terkait ========== -->
                <div class="flex flex-col">
                    <h3 class="text-xl font-bold mb-6 pb-2 border-b-2 border-matauli-yellow w-fit">
                        Link Terkait
                    </h3>

                    <ul class="space-y-3">
                        <li>
                            <a href="{{ url('/tentang-kami') }}"
                                class="text-gray-200 hover:text-matauli-yellow transition hover:translate-x-1 inline-block text-sm">
                                Tentang Kami
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/program#keahlian') }}"
                                class="text-gray-200 hover:text-matauli-yellow transition hover:translate-x-1 inline-block text-sm">
                                Program Keahlian
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/program#prestasi-siswa') }}"
                                class="text-gray-200 hover:text-matauli-yellow transition hover:translate-x-1 inline-block text-sm">
                                Prestasi Siswa
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/dokumentasi#berita') }}"
                                class="text-gray-200 hover:text-matauli-yellow transition hover:translate-x-1 inline-block text-sm">
                                Berita Terkini
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/tentang-kami#sejarah-sekolah') }}"
                                class="text-gray-200 hover:text-matauli-yellow transition hover:translate-x-1 inline-block text-sm">
                                Sejarah Sekolah
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/ppdb') }}"
                                class="text-gray-200 hover:text-matauli-yellow transition hover:translate-x-1 inline-block text-sm">
                                PPDB Online
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- ========== COLUMN 4: Ikuti Kami (Social Media) ========== -->
                <div class="flex flex-col">
                    <h3 class="text-xl font-bold mb-6 pb-2 border-b-2 border-matauli-yellow w-fit">
                        Ikuti Kami
                    </h3>

                    <div class="flex flex-wrap gap-3">
                        <!-- Facebook -->
                        <a href="https://facebook.com" target="_blank"
                            class="bg-white/10 hover:bg-matauli-yellow p-3 rounded-full transition-all hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>

                        <!-- Instagram -->
                        <a href="https://instagram.com" target="_blank"
                            class="bg-white/10 hover:bg-matauli-yellow p-3 rounded-full transition-all hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>

                        <!-- TikTok -->
                        <a href="https://tiktok.com" target="_blank"
                            class="bg-white/10 hover:bg-matauli-yellow p-3 rounded-full transition-all hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
                            </svg>
                        </a>

                        <!-- YouTube -->
                        <a href="https://youtube.com" target="_blank"
                            class="bg-white/10 hover:bg-matauli-yellow p-3 rounded-full transition-all hover:scale-110">
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
    <!-- JAVASCRIPT SECTION - START -->
    <!-- ============================================ -->

    <!-- ========== Hero Slider Script ========== -->
    <script>
        // Slider Variables
        let currentSlide = 0;
        const slides = document.querySelectorAll('.hero-slide');
        const dots = document.querySelectorAll('.dot');
        let autoSlideInterval;

        // Show specific slide
        function showSlide(n) {
            if (n >= slides.length) currentSlide = 0;
            if (n < 0) currentSlide = slides.length - 1;

            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));

            slides[currentSlide].classList.add('active');
            dots[currentSlide].classList.add('active');
        }

        // Change slide (next/previous)
        function changeSlide(n) {
            currentSlide += n;
            showSlide(currentSlide);
            resetAutoSlide();
        }

        // Go to specific slide
        function goToSlide(n) {
            currentSlide = n;
            showSlide(currentSlide);
            resetAutoSlide();
        }

        // Auto slide function
        function autoSlide() {
            currentSlide++;
            showSlide(currentSlide);
        }

        // Reset auto slide timer
        function resetAutoSlide() {
            clearInterval(autoSlideInterval);
            autoSlideInterval = setInterval(autoSlide, 5000);
        }

        // Initialize auto-slide (5 seconds interval)
        autoSlideInterval = setInterval(autoSlide, 5000);

        // Pause auto-slide on hover
        const heroSlider = document.getElementById('heroSlider');
        if (heroSlider) {
            heroSlider.addEventListener('mouseenter', () => {
                clearInterval(autoSlideInterval);
            });

            heroSlider.addEventListener('mouseleave', () => {
                resetAutoSlide();
            });
        }
    </script>

    <!-- ========== Mobile Menu Toggle Script ========== -->
    <script>
        // Select menu buttons and mobile menus
        const menuButtons = document.querySelectorAll(".menu-btn");
        const mobileMenus = document.querySelectorAll(".mobile-menu");

        // Add click event listener to toggle mobile menu
        menuButtons.forEach((btn, index) => {
            btn.addEventListener("click", () => {
                mobileMenus[index].classList.toggle("hidden");
            });
        });
    </script>

    <!-- ========== Hero Slider Styles ========== -->
    <style>
        /* Slide Animation */
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
    <!-- ============================================ -->
    <!-- JAVASCRIPT SECTION - END -->
    <!-- ============================================ -->

</body>

</html>
