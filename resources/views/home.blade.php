<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMAN 1 Matauli Pandan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="w-full sticky top-0 z-50 shadow-md">
        <div class="text-sm text-white w-full">
            <div
                class="text-center font-medium py-2 pb-2 bg-white text-[#000000] flex items-center justify-between px-6 md:px-16 lg:px-32 text-sm h-13">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/Logo_Yayasan.png') }}" alt="Logo 1" class="h-10 w-auto object-contain">
                    <img src="{{ asset('assets/Logo_SMAN_Matauli.png') }}" alt="Logo 2"
                        class="h-10 w-auto object-contain">
                    <img src="{{ asset('assets/Logo_Provinsi.png') }}" alt="Logo 3"
                        class="h-10 w-auto object-contain">
                </div>

                <div class="flex items-center gap-6">
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-orange-500" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                        </svg>
                        <a href="mailto:ppdbmatauli@gmail.com" class="hover:text-black">ppdbmatauli@gmail.com</a>
                    </div>

                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-orange-500" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                        </svg>
                        <a href="tel:+6282121313131" class="hover:text-black font-semibold">+62 821-2131-3131</a>
                    </div>
                </div>
            </div>

            <nav
                class="relative h-[70px] flex items-center justify-between px-6 md:px-16 lg:px-24 xl:px-32 py-4 bg-[#800000] text-gray-900 transition-all shadow">
                <div class="flex items-center gap-4">
                    <img src="{{ asset('assets/Logo_SMAN_Matauli.png') }}" alt="Logo" class="h-12 w-auto">

                    <div class="flex flex-col text-[#fff9f9]">
                        <h1 class="text-xl font-bold tracking-tight leading-tight">SMAN 1 MATAULI PANDAN</h1>
                        <span class="text-xs font-light">The center of excellence</span>
                    </div>
                </div>

                <ul class="hidden md:flex items-center space-x-10 md:pl-28 font-semibold text-lg text-[#fff9f9]">
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li><a href="{{ url('/tentang-kami') }}">Tentang Kami</a></li>
                    <li><a href="{{ url('/program') }}">Program</a></li>
                    <li><a href="{{ url('/dokumentasi') }}">Dokumentasi</a></li>
                </ul>

                <button aria-label="menu-btn" type="button"
                    class="menu-btn inline-block md:hidden active:scale-90 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                        class="fill-white">
                        <path
                            d="M3 7a1 1 0 1 0 0 2h24a1 1 0 1 0 0-2zm0 7a1 1 0 1 0 0 2h24a1 1 0 1 0 0-2zm0 7a1 1 0 1 0 0 2h24a1 1 0 1 0 0-2z" />
                    </svg>
                </button>

                <div class="mobile-menu absolute top-[70px] right-0 w-40 bg-white shadow-sm p-6 hidden md:hidden">
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

    <section
        class="relative flex flex-col items-center justify-center text-center py-24 px-6 bg-[url('https://raw.githubusercontent.com/prebuiltui/prebuiltui/main/assets/banners/image-1.png')] bg-cover bg-center h-screen">
        <h1 class="text-2xl md:text-3xl font-medium text-white max-w-2xl">
            Empower Your Sales & Marketing with a Next-Gen AI Workforce
        </h1>
        <div class="h-[3px] w-32 my-1 bg-gradient-to-l from-transparent to-indigo-600"></div>
        <p class="text-sm md:text-base text-white max-w-xl">
            Leverage AI Agents for real-time calling and unified multi-channel engagement, optimizing customer
            interactions at scale.
        </p>
        <button
            class="px-8 py-2.5 mt-4 text-sm bg-gradient-to-r from-indigo-600 to-violet-500 hover:scale-105 transition duration-300 text-white rounded-full">
            Get Started
        </button>
    </section>

    <script>
        const menuButtons = document.querySelectorAll(".menu-btn");
        const mobileMenus = document.querySelectorAll(".mobile-menu");

        menuButtons.forEach((btn, index) => {
            btn.addEventListener("click", () => {
                mobileMenus[index].classList.toggle("hidden");
            });
        });
    </script>
</body>

</html>
