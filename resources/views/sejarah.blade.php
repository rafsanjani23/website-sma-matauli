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
