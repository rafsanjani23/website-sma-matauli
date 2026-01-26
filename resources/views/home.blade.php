<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMAN 1 Matauli Pandan</title>
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

                <!-- ========== DESKTOP NAVIGATION MENU ========== -->
                <ul class="hidden md:flex items-center space-x-10 md:pl-28 font-semibold text-lg">

                    <!-- MENU BERANDA -->
                    <li>
                        <a href="{{ url('/') }}" class="navlink-hover">
                            Beranda
                        </a>
                    </li>

                    <!-- DROPDOWN MENU: TENTANG KAMI -->
                    <li class="relative group">
                        <button class="navlink-hover flex items-center cursor-pointer focus:outline-none">
                            Tentang Kami
                            <svg class="ml-1 w-4 h-4 transition-transform duration-300 group-hover:rotate-180"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Dropdown Content: Tentang Kami -->
                        <ul class="nav-dropdown-content">
                            <!-- 1. Sejarah Sekolah -->
                            <li>
                                <a href="{{ url('/tentang-kami#sejarah-sekolah') }}" class="dropdown-item">
                                    Sejarah Sekolah
                                </a>
                            </li>

                            <!-- 2. Visi & Misi -->
                            <li>
                                <a href="{{ url('/tentang-kami#visi-misi') }}" class="dropdown-item">
                                    Visi & Misi
                                </a>
                            </li>

                            <!-- 3. Kurikulum Sekolah -->
                            <li>
                                <a href="{{ url('/tentang-kami#kurikulum') }}" class="dropdown-item">
                                    Kurikulum Sekolah
                                </a>
                            </li>

                            <!-- 4. Tenaga Pendidik & Kependidikan -->
                            <li>
                                <a href="{{ url('/tentang-kami#tenaga-pendidik') }}" class="dropdown-item">
                                    Tenaga Pendidik & Kependidikan
                                </a>
                            </li>

                            <!-- 5. Fasilitas Sekolah -->
                            <li>
                                <a href="{{ url('/tentang-kami#fasilitas') }}" class="dropdown-item">
                                    Fasilitas Sekolah
                                </a>
                            </li>

                            <!-- 6. Kemitraan Sekolah -->
                            <li>
                                <a href="{{ url('/tentang-kami#kemitraan') }}" class="dropdown-item">
                                    Kemitraan Sekolah
                                </a>
                            </li>

                            <!-- 7. Tentang Asrama -->
                            <li>
                                <a href="{{ url('/tentang-kami#asrama') }}" class="dropdown-item">
                                    Tentang Asrama
                                </a>
                            </li>
                        </ul>

                        <!-- DROPDOWN MENU: PROGRAM -->
                    <li class="relative group">
                        <button class="navlink-hover flex items-center cursor-pointer focus:outline-none">
                            Program
                            <svg class="ml-1 w-4 h-4 transition-transform duration-300 group-hover:rotate-180"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Dropdown Content: Program -->
                        <ul class="nav-dropdown-content">
                            <!-- 1. Prestasi Siswa -->
                            <li>
                                <a href="{{ url('/program#prestasi-siswa') }}" class="dropdown-item">
                                    Prestasi Siswa
                                </a>
                            </li>

                            <!-- 2. Ekstrakulikuler -->
                            <li>
                                <a href="{{ url('/program#ekstrakulikuler') }}" class="dropdown-item">
                                    Ekstrakulikuler
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- DROPDOWN MENU: DOKUMENTASI -->
                    <li class="relative group">
                        <button class="navlink-hover flex items-center cursor-pointer focus:outline-none">
                            Dokumentasi
                            <svg class="ml-1 w-4 h-4 transition-transform duration-300 group-hover:rotate-180"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Dropdown Content: Dokumentasi -->
                        <ul class="nav-dropdown-content">
                            <!-- 1. Galeri -->
                            <li>
                                <a href="{{ url('/dokumentasi#galeri') }}" class="dropdown-item">
                                    Galeri
                                </a>
                            </li>

                            <!-- 2. Berita -->
                            <li>
                                <a href="{{ url('/dokumentasi#berita') }}" class="dropdown-item">
                                    Berita
                                </a>
                            </li>

                            <!-- 3. Kegiatan Sekolah -->
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
    <!-- HERO SECTION - START -->
    <!-- ============================================ -->
    <section
        class="relative flex flex-col items-center justify-center text-center py-24 px-6 bg-[url('https://raw.githubusercontent.com/prebuiltui/prebuiltui/main/assets/banners/image-1.png')] bg-cover bg-center h-screen">

        <!-- Hero Title -->
        <h1 class="text-2xl md:text-3xl font-medium text-white max-w-2xl">
            Empower Your Sales & Marketing with a Next-Gen AI Workforce
        </h1>

        <!-- Decorative Line -->
        <div class="h-[3px] w-32 my-1 bg-gradient-to-l from-transparent to-indigo-600"></div>

        <!-- Hero Description -->
        <p class="text-sm md:text-base text-white max-w-xl">
            Leverage AI Agents for real-time calling and unified multi-channel engagement,
            optimizing customer interactions at scale.
        </p>

        <!-- Call to Action Button -->
        <button
            class="px-8 py-2.5 mt-4 text-sm bg-gradient-to-r from-indigo-600 to-violet-500 hover:scale-105 transition duration-300 text-white rounded-full">
            Get Started
        </button>
    </section>
    <!-- ============================================ -->
    <!-- HERO SECTION - END -->
    <!-- ============================================ -->

    <!-- ============================================ -->
    <!-- JAVASCRIPT - Mobile Menu Toggle -->
    <!-- ============================================ -->
    <script>
        // Select all menu buttons and mobile menus
        const menuButtons = document.querySelectorAll(".menu-btn");
        const mobileMenus = document.querySelectorAll(".mobile-menu");

        // Add click event listener to each menu button
        menuButtons.forEach((btn, index) => {
            btn.addEventListener("click", () => {
                // Toggle visibility of corresponding mobile menu
                mobileMenus[index].classList.toggle("hidden");
            });
        });
    </script>
</body>

</html>
