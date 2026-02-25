<section class="py-12 md:py-20 lg:py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 md:px-12 lg:px-24 xl:px-32">

        {{-- ===================== --}}
        {{-- PAGE TITLE --}}
        {{-- ===================== --}}
        <div class="text-center mb-12 md:mb-20">
            <h1 class="mt-3 text-3xl md:text-5xl lg:text-6xl font-bold text-black mb-4 md:mb-6">
                Perjalanan Kami
            </h1>
            <p class="text-gray-500 text-sm md:text-lg max-w-3xl mx-auto leading-relaxed px-4">
                Perjalanan panjang SMAN 1 Matauli Pandan dalam mencetak generasi unggul dan berkarakter sejak tahun 1994
            </p>
            <div class="w-14 h-0.5 bg-yellow-400 mx-auto mt-4 md:mb-6 rounded-full">
            </div>
        </div>

        {{-- ===================== --}}
        {{-- TIMELINE --}}
        {{-- ===================== --}}
        <div class="relative max-w-6xl mx-auto">
            {{-- GARIS VERTIKAL DESKTOP (tengah) --}}
            <div
                class="absolute left-1/2 -translate-x-px top-0 bottom-0 w-0.5 bg-linear-to-b from-red-800 via-red-700 to-yellow-500 hidden md:block">
            </div>


            {{-- ============================================================ --}}
            {{-- MOBILE TIMELINE                                               --}}
            {{-- Kiri = kolom dot+garis (shrink-0), Kanan = card+foto (flex-1) --}}
            {{-- ============================================================ --}}
            <div class="md:hidden space-y-0">

                {{-- ITEM 1: 1991 --}}
                <div class="flex gap-4">
                    <div class="flex flex-col items-center shrink-0 w-12">
                        <div
                            class="w-12 h-12 rounded-full bg-linear-to-br from-red-800 to-red-950 flex items-center justify-center shadow-lg ring-4 ring-white z-10 shrink-0">
                            <span class="text-white font-bold text-sm">91</span>
                        </div>
                        <div class="w-0.5 flex-1 bg-linear-to-b from-red-800 to-yellow-500 mt-1"></div>
                    </div>

                    <div class="flex-1 pt-1">
                        <div class="bg-white rounded-2xl shadow-md border-l-4 border-red-800 overflow-hidden">

                            {{-- Gambar sekarang menyatu di dalam card --}}
                            <div class="h-44 w-full overflow-hidden">
                                <img src="{{ asset('assets/sejarah-1991.jpg') }}" alt="1991 Pendirian MATAULI"
                                    class="w-full h-full object-cover">
                            </div>

                            {{-- Konten teks --}}
                            <div class="p-5">
                                <h3 class="text-base font-bold text-red-800 mb-2 leading-snug">
                                    1991 - Pendirian Yayasan Maju Tapian Nauli (MATAULI)
                                </h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Yayasan Maju Tapian Nauli (MATAULI) didirikan tahun 1991 oleh
                                    Jendral TNI (Purn) Feisal Tanjung dan
                                    Dr. Ir. H. Akbar Tandjung.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>


                {{-- ITEM 2: 1994 --}}
                <div class="flex gap-4">
                    <div class="flex flex-col items-center shrink-0 w-12">
                        <div
                            class="w-12 h-12 rounded-full bg-linear-to-br from-red-800 to-red-950 flex items-center justify-center shadow-lg ring-4 ring-white z-10 shrink-0">
                            <span class="text-white font-bold text-sm">94</span>
                        </div>
                        <div class="w-0.5 flex-1 bg-linear-to-b from-yellow-500 to-yellow-400 mt-1"></div>
                    </div>

                    <div class="flex-1 pt-1">
                        <div class="bg-white rounded-2xl shadow-md border-l-4 border-red-800 overflow-hidden">

                            <div class="h-44 w-full overflow-hidden">
                                <img src="{{ asset('assets/sejarah-1994.jpg') }}" alt="1994 Pendirian SMAN"
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="p-5">
                                <h3 class="text-base font-bold text-red-800 mb-2 leading-snug">
                                    1994 - Pendirian SMAN 1 Matauli Pandan
                                </h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    SMA Negeri 1 (Plus) Matauli Pandan didirikan pada tahun 1994 di
                                    Jl. K. H. Dewantara No. 01 Pandan, Kabupaten Tapanuli Tengah,
                                    Provinsi Sumatera Utara.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>


                {{-- ITEM 3: 2008 --}}
                <div class="flex gap-4">
                    <div class="flex flex-col items-center shrink-0 w-12">
                        <div
                            class="w-12 h-12 rounded-full bg-linear-to-br from-red-800 to-red-950 flex items-center justify-center shadow-lg ring-4 ring-white z-10 shrink-0">
                            <span class="text-white font-bold text-sm">08</span>
                        </div>
                        <div class="w-0.5 flex-1 bg-linear-to-b from-yellow-400 to-yellow-500 mt-1"></div>
                    </div>

                    <div class="flex-1 pt-1">
                        <div class="bg-white rounded-2xl shadow-md border-l-4 border-red-800 overflow-hidden">

                            <div class="h-44 w-full overflow-hidden">
                                <img src="{{ asset('assets/sejarah-2008.jpg') }}" alt="2008 Sertifikasi ISO"
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="p-5">
                                <h3 class="text-base font-bold text-red-800 mb-2 leading-snug">
                                    2008 - Mendapatkan Sertifikat Sistem Manajemen Mutu
                                </h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    SMA Negeri 1 (Plus) Matauli Pandan mendapatkan sertifikat
                                    Sistem Manajemen Mutu (SMM) ISO 9001 : 2008 sebagai pedoman
                                    penyelenggaraan sistem manajemen sekolah.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>


                {{-- ITEM 4: 2012 --}}
                <div class="flex gap-4">
                    <div class="flex flex-col items-center shrink-0 w-12">
                        <div
                            class="w-12 h-12 rounded-full bg-linear-to-br from-red-800 to-red-950 flex items-center justify-center shadow-lg ring-4 ring-white z-10 shrink-0">
                            <span class="text-white font-bold text-sm">12</span>
                        </div>
                        <div class="w-0.5 flex-1 bg-linear-to-b from-yellow-500 to-yellow-400 mt-1"></div>
                    </div>

                    <div class="flex-1 pt-1">
                        <div class="bg-white rounded-2xl shadow-md border-l-4 border-red-800 overflow-hidden">

                            <div class="h-44 w-full overflow-hidden">
                                <img src="{{ asset('assets/sejarah-2012.jpg') }}" alt="2012 Layanan IT"
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="p-5">
                                <h3 class="text-base font-bold text-red-800 mb-2 leading-snug">
                                    2012 - Sekolah Penyedia Layanan Data Berbasis IT
                                </h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Sejak tahun 2012, SMA Negeri 1 (Plus) Matauli Pandan dipercaya
                                    sebagai penyedia layanan data berbasis IT bagi seluruh SMA
                                    di Kabupaten Tapanuli Tengah.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>


                {{-- ITEM 5: 2014 --}}
                <div class="flex gap-4">
                    <div class="flex flex-col items-center shrink-0 w-12">
                        <div
                            class="w-12 h-12 rounded-full bg-linear-to-br from-red-800 to-red-950 flex items-center justify-center shadow-lg ring-4 ring-white z-10 shrink-0">
                            <span class="text-white font-bold text-sm">14</span>
                        </div>
                        <div class="w-0.5 flex-1 bg-linear-to-b from-yellow-400 to-yellow-500 mt-1"></div>
                    </div>

                    <div class="flex-1 pt-1">
                        <div class="bg-white rounded-2xl shadow-md border-l-4 border-red-800 overflow-hidden">

                            <div class="h-44 w-full overflow-hidden">
                                <img src="{{ asset('assets/sejarah-2014.jpg') }}" alt="2014 Sekolah Internasional"
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="p-5">
                                <h3 class="text-base font-bold text-red-800 mb-2 leading-snug">
                                    2014 - Menjadi Sekolah Bertaraf Internasional
                                </h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Direncanakan pada tahun 2014 SMA Negeri 1 (Plus) Matauli Pandan
                                    menjadi Sekolah Bertaraf Internasional.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>


                {{-- ITEM 6: 2021 --}}
                <div class="flex gap-4">
                    <div class="flex flex-col items-center shrink-0 w-12">
                        <div
                            class="w-12 h-12 rounded-full bg-linear-to-br from-red-800 to-red-950 flex items-center justify-center shadow-lg ring-4 ring-white z-10 shrink-0">
                            <span class="text-white font-bold text-sm">21</span>
                        </div>
                        <div class="w-0.5 flex-1 bg-linear-to-b from-yellow-500 to-yellow-400 mt-1"></div>
                    </div>

                    <div class="flex-1 pt-1">
                        <div class="bg-white rounded-2xl shadow-md border-l-4 border-red-800 overflow-hidden">

                            <div class="h-44 w-full overflow-hidden">
                                <img src="{{ asset('assets/sejarah-2021.jpg') }}" alt="2021 Akreditasi A"
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="p-5">
                                <h3 class="text-base font-bold text-red-800 mb-2 leading-snug">
                                    2021 - Telah Mendapatkan Akreditasi A
                                </h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Sekolah ini telah terakreditasi A dengan Nomor SK
                                    1347/BAN-SM/SK/2021 pada tanggal 8 Desember 2021.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>


                {{-- ITEM 7: 2026 NOW (item terakhir, tanpa garis bawah) --}}
                <div class="flex gap-4">
                    <div class="flex flex-col items-center shrink-0 w-12">
                        <div
                            class="w-12 h-12 rounded-full bg-linear-to-br from-yellow-400 to-yellow-600 flex items-center justify-center shadow-lg ring-4 ring-white z-10 shrink-0 animate-pulse">
                            <span class="text-white font-bold text-sm">26</span>
                        </div>
                    </div>
                    <div class="flex-1 pt-1">
                        <div
                            class="bg-linear-to-br from-yellow-50 to-orange-50 rounded-2xl shadow-md border-l-4 border-yellow-500 overflow-hidden">
                            <div class="h-44 w-full overflow-hidden">
                                <img src="{{ asset('assets/sejarah-2026.jpg') }}" alt="2026 Transformasi Edukasi"
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="p-5">
                                <div class="flex items-center gap-2 mb-2 flex-wrap">
                                    <h3 class="text-base font-bold text-yellow-700 leading-snug">
                                        2026 - Transformasi Edukasi
                                    </h3>
                                    <span
                                        class="bg-yellow-500 text-white text-xs font-bold px-2 py-0.5 rounded-full animate-pulse">NOW</span>
                                </div>
                                <p class="text-gray-700 text-sm leading-relaxed">
                                    Penerapan Kurikulum Merdeka dan <span
                                        class="font-semibold text-yellow-700">International Baccalaureate</span> dan
                                    transformasi digital di seluruh aspek pembelajaran.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>{{-- END MOBILE --}}

            {{-- ============================================================ --}}
            {{-- DESKTOP TIMELINE (zigzag kiri-kanan)                         --}}
            {{-- ============================================================ --}}
            <div class="hidden md:block space-y-0">

                {{-- ITEM 1: 1991 - teks kiri | foto kanan --}}
                <div class="relative grid grid-cols-2 gap-0 min-h-64 mb-16">
                    <div class="flex items-center justify-end pr-16 py-8">
                        <div class="max-w-sm w-full">
                            <div
                                class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 border-r-4 border-red-800 text-right">
                                <h3 class="text-xl md:text-2xl font-bold text-red-800 mb-3">1991 - Pendirian Yayasan
                                    Maju Tapian Nauli (MATAULI)</h3>
                                <p class="text-gray-600 text-sm md:text-base leading-relaxed">Yayasan Maju Tapian Nauli
                                    (MATAULI) didirikan tahun 1991 oleh Jendral TNI (Purn) Feisal Tanjung dan Dr. Ir. H.
                                    Akbar Tandjung.</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex items-center justify-center z-10">
                        <div
                            class="w-16 h-16 rounded-full bg-linear-to-br from-red-800 to-red-950 flex items-center justify-center shadow-xl ring-4 ring-white">
                            <span class="text-white font-bold text-lg">91</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-start pl-16 py-8">
                        <div class="max-w-sm w-full h-56 rounded-2xl overflow-hidden shadow-xl bg-gray-100">
                            <img src="{{ asset('assets/sejarah-1991.jpg') }}" alt="1991"
                                class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        </div>
                    </div>
                </div>

                {{-- ITEM 2: 1994 - foto kiri | teks kanan --}}
                <div class="relative grid grid-cols-2 gap-0 min-h-64 mb-16">
                    <div class="flex items-center justify-end pr-16 py-8">
                        <div class="max-w-sm w-full h-56 rounded-2xl overflow-hidden shadow-xl bg-gray-100">
                            <img src="{{ asset('assets/sejarah-1994.jpg') }}" alt="1994"
                                class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        </div>
                    </div>
                    <div
                        class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex items-center justify-center z-10">
                        <div
                            class="w-16 h-16 rounded-full bg-linear-to-br from-red-800 to-red-950 flex items-center justify-center shadow-xl ring-4 ring-white">
                            <span class="text-white font-bold text-lg">94</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-start pl-16 py-8">
                        <div class="max-w-sm w-full">
                            <div
                                class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 border-l-4 border-red-800">
                                <h3 class="text-xl md:text-2xl font-bold text-red-800 mb-3">1994 - Pendirian SMAN 1
                                    Matauli Pandan</h3>
                                <p class="text-gray-600 text-sm md:text-base leading-relaxed">SMA Negeri 1 (Plus)
                                    Matauli Pandan didirikan pada tahun 1994 di Jl. K. H. Dewantara No. 01 Pandan,
                                    Kabupaten Tapanuli Tengah, Provinsi Sumatera Utara</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ITEM 3: 2008 - teks kiri | foto kanan --}}
                <div class="relative grid grid-cols-2 gap-0 min-h-64 mb-16">
                    <div class="flex items-center justify-end pr-16 py-8">
                        <div class="max-w-sm w-full">
                            <div
                                class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 border-r-4 border-red-800 text-right">
                                <h3 class="text-xl md:text-2xl font-bold text-red-800 mb-3">2008 - Mendapatkan
                                    Sertifikat Sistem Manajemen Mutu</h3>
                                <p class="text-gray-600 text-sm md:text-base leading-relaxed">SMA Negeri 1 (Plus)
                                    Matauli Pandan telah mendapatkan sertifikat Sistem Manajemen Mutu (SMM) ISO 9001 :
                                    2008 yang menjadi pedoman penyelenggaraan sistem manajemen sekolah.</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex items-center justify-center z-10">
                        <div
                            class="w-16 h-16 rounded-full bg-linear-to-br from-red-800 to-red-950 flex items-center justify-center shadow-xl ring-4 ring-white">
                            <span class="text-white font-bold text-lg">08</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-start pl-16 py-8">
                        <div class="max-w-sm w-full h-56 rounded-2xl overflow-hidden shadow-xl bg-gray-100">
                            <img src="{{ asset('assets/sejarah-2008.jpg') }}" alt="2008"
                                class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        </div>
                    </div>
                </div>

                {{-- ITEM 4: 2012 - foto kiri | teks kanan --}}
                <div class="relative grid grid-cols-2 gap-0 min-h-64 mb-16">
                    <div class="flex items-center justify-end pr-16 py-8">
                        <div class="max-w-sm w-full h-56 rounded-2xl overflow-hidden shadow-xl bg-gray-100">
                            <img src="{{ asset('assets/sejarah-2012.jpg') }}" alt="2012"
                                class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        </div>
                    </div>
                    <div
                        class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex items-center justify-center z-10">
                        <div
                            class="w-16 h-16 rounded-full bg-linear-to-br from-red-800 to-red-950 flex items-center justify-center shadow-xl ring-4 ring-white">
                            <span class="text-white font-bold text-lg">12</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-start pl-16 py-8">
                        <div class="max-w-sm w-full">
                            <div
                                class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 border-l-4 border-red-800">
                                <h3 class="text-xl md:text-2xl font-bold text-red-800 mb-3">2012 - Menjadi Sekolah
                                    Penyedia Layanan Data Berbasis IT</h3>
                                <p class="text-gray-600 text-sm md:text-base leading-relaxed">Sejak tahun 2012, SMA
                                    Negeri 1 (Plus) Matauli Pandan dipercaya sebagai penyedia layanan data berbasis IT
                                    bagi seluruh SMA di Kabupaten Tapanuli Tengah.</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ITEM 5: 2014 - teks kiri | foto kanan --}}
                <div class="relative grid grid-cols-2 gap-0 min-h-64 mb-16">
                    <div class="flex items-center justify-end pr-16 py-8">
                        <div class="max-w-sm w-full">
                            <div
                                class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 border-r-4 border-red-800 text-right">
                                <h3 class="text-xl md:text-2xl font-bold text-red-800 mb-3">2014 - Menjadi Sekolah
                                    Bertaraf Internasional</h3>
                                <p class="text-gray-600 text-sm md:text-base leading-relaxed">Direncanakan pada tahun
                                    2014 SMA Negeri 1 (Plus) Matauli Pandan menjadi Sekolah Bertaraf Internasional</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex items-center justify-center z-10">
                        <div
                            class="w-16 h-16 rounded-full bg-linear-to-br from-red-800 to-red-950 flex items-center justify-center shadow-xl ring-4 ring-white">
                            <span class="text-white font-bold text-lg">14</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-start pl-16 py-8">
                        <div class="max-w-sm w-full h-56 rounded-2xl overflow-hidden shadow-xl bg-gray-100">
                            <img src="{{ asset('assets/sejarah-2014.jpg') }}" alt="2014"
                                class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        </div>
                    </div>
                </div>

                {{-- ITEM 6: 2021 - foto kiri | teks kanan --}}
                <div class="relative grid grid-cols-2 gap-0 min-h-64 mb-16">
                    <div class="flex items-center justify-end pr-16 py-8">
                        <div class="max-w-sm w-full h-56 rounded-2xl overflow-hidden shadow-xl bg-gray-100">
                            <img src="{{ asset('assets/sejarah-2021.jpg') }}" alt="2021"
                                class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        </div>
                    </div>
                    <div
                        class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex items-center justify-center z-10">
                        <div
                            class="w-16 h-16 rounded-full bg-linear-to-br from-red-800 to-red-950 flex items-center justify-center shadow-xl ring-4 ring-white">
                            <span class="text-white font-bold text-lg">21</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-start pl-16 py-8">
                        <div class="max-w-sm w-full">
                            <div
                                class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 border-l-4 border-red-800">
                                <h3 class="text-xl md:text-2xl font-bold text-red-800 mb-3">2021 - Telah Mendapatkan
                                    Akreditasi A</h3>
                                <p class="text-gray-600 text-sm md:text-base leading-relaxed">Sekolah ini telah
                                    terakreditasi A dengan Nomor SK Akreditasi 1347/BAN-SM/SK/2021 pada tanggal 8
                                    Desember 2021.</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ITEM 7: 2026 NOW - teks kiri | foto kanan --}}
                <div class="relative grid grid-cols-2 gap-0 min-h-64">
                    <div class="flex items-center justify-end pr-16 py-8">
                        <div class="max-w-sm w-full">
                            <div
                                class="bg-linear-to-br from-yellow-50 to-orange-50 rounded-2xl shadow-lg p-8 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 border-r-4 border-yellow-500 text-right">
                                <div class="flex items-center justify-end gap-2 mb-3">
                                    <span
                                        class="bg-yellow-500 text-white text-xs font-bold px-3 py-1 rounded-full animate-pulse">NOW</span>
                                    <h3 class="text-xl md:text-2xl font-bold text-yellow-700">2026 - Transformasi
                                        Edukasi</h3>
                                </div>
                                <p class="text-gray-700 text-sm md:text-base leading-relaxed">Penerapan Kurikulum
                                    Merdeka dan <span class="font-semibold text-yellow-700">International
                                        Baccalaureate</span> dan transformasi digital di seluruh aspek pembelajaran.</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex items-center justify-center z-10">
                        <div
                            class="w-16 h-16 rounded-full bg-linear-to-br from-yellow-400 to-yellow-600 flex items-center justify-center shadow-xl ring-4 ring-white animate-pulse">
                            <span class="text-white font-bold text-lg">26</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-start pl-16 py-8">
                        <div class="max-w-sm w-full h-56 rounded-2xl overflow-hidden shadow-xl bg-gray-100">
                            <img src="{{ asset('assets/sejarah-2026.jpg') }}" alt="2026 Transformasi Edukasi"
                                class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        </div>
                    </div>
                </div>

            </div>{{-- END DESKTOP --}}

        </div>{{-- END TIMELINE CONTAINER --}}

        {{-- ===================== --}}
        {{-- STATISTICS --}}
        {{-- ===================== --}}
        <div class="mt-16 md:mt-24">
            <div class="bg-linear-to-br from-red-800 to-red-950 rounded-2xl md:rounded-3xl shadow-2xl p-6 md:p-12">
                <h2 class="text-xl md:text-3xl font-bold text-white text-center mb-6 md:mb-12">
                    <span class="relative inline-block text-yellow-400 px-1">
                        33 Tahun
                        <span class="absolute -bottom-1 left-0 w-full h-0.75 rounded-full"
                            style="background: linear-gradient(90deg, transparent, #facc15, #fde68a, #facc15, transparent);"></span>
                        <span
                            class="absolute -bottom-2 left-1/2 -translate-x-1/2 w-3/4 h-1.5 rounded-full blur-sm opacity-60"
                            style="background: #facc15;"></span>
                    </span>
                    <span class="text-white"> Perjalanan Mencerdaskan Bangsa</span>
                </h2>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4 md:gap-8">
                    <div class="text-center">
                        <div class="text-3xl md:text-5xl font-bold text-yellow-400 mb-1 md:mb-2">XXXIII</div>
                        <div class="text-white text-xs md:text-base">Angkatan</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl md:text-5xl font-bold text-yellow-400 mb-1 md:mb-2">8K+</div>
                        <div class="text-white text-xs md:text-base">Alumni</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl md:text-5xl font-bold text-yellow-400 mb-1 md:mb-2">A</div>
                        <div class="text-white text-xs md:text-base">Akreditasi</div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ===================== --}}
        {{-- BACK TO HOME --}}
        {{-- ===================== --}}
        <div class="text-center mt-10 md:mt-16">
            <a href="{{ url('/') }}"
                class="group inline-flex items-center gap-2 md:gap-3 bg-red-800 hover:bg-red-900 text-white font-bold px-7 py-3 md:px-8 md:py-4 rounded-full transition-all duration-300 hover:gap-4 shadow-lg shadow-red-900/30 text-sm md:text-base">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4 md:h-5 md:w-5 group-hover:-translate-x-1 transition-transform duration-300"
                    viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                        clip-rule="evenodd" />
                </svg>
                Kembali ke Beranda
            </a>
        </div>

    </div>{{-- END container mx-auto --}}
</section>
