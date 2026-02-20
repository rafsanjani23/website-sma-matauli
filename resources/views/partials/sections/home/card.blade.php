<section id="card-badge" class="py-16 mx-auto px-6">

    {{-- ===================== --}}
    {{-- SECTION HEADER --}}
    {{-- Berisi eyebrow text, judul utama, dan garis gradient --}}
    {{-- ===================== --}}
    <div class="text-center mb-14">
        <span class="text-xs font-semibold tracking-[0.3em] uppercase text-black">Keunggulan Kami</span>
        <h2 class="mt-3 text-3xl font-bold text-gray-900">Mengapa Memilih Sekolah Kami
            {{-- Garis dekoratif bawah judul --}}
            <div class="mt-4 mx-auto w-14 h-0.5 bg-yellow-400 rounded-full"></div>
    </div>

    {{-- ===================== --}}
    {{-- CARDS GRID --}}
    {{-- Responsive: 1 kolom (mobile) → 2 kolom (tablet) → 4 kolom (desktop) --}}
    {{-- ===================== --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mx-auto">

        {{-- ===== CARD 1: Keakraban ===== --}}
        <div
            class="group relative bg-white border border-gray-100 rounded-xl shadow-sm overflow-hidden mx-auto w-full scroll-animate transition-all duration-700 ease-in-out translate-x-10 opacity-0 hover:-translate-y-2 hover:shadow-2xl hover:shadow-red-900/10 hover:border-red-100 cursor-pointer">

            {{-- TOP BAR: Garis gradient muncul dari kiri saat hover --}}
            <div
                class="absolute top-0 inset-x-0 h-1 bg-linear-to-r from-red-800 to-yellow-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-500 ease-out origin-left">
            </div>

            {{-- NUMBER BADGE: Nomor urut pojok kanan atas --}}
            <div class="absolute top-4 right-4 w-7 h-7 rounded-full bg-red-50 flex items-center justify-center">
                <span class="text-red-800 text-xs font-bold">01</span>
            </div>

            {{-- CARD CONTENT --}}
            <div class="p-7 flex flex-col items-center text-center">

                {{-- ICON CIRCLE: Lingkaran membesar saat hover --}}
                <div class="relative w-20 h-20 flex items-center justify-center mb-5">
                    <div
                        class="absolute inset-0 rounded-full bg-red-50 group-hover:bg-red-100 group-hover:scale-110 transition-all duration-500">
                    </div>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAADF0lEQVR4nO2du27UUBCGvyoggRAgOugDDwGEZyGEhssjzOwKKUFUeRWKiIQgEQouFaELILpcarTpjYZsAQiCvT5zvMeeTzrSKpKdf749muN1jjcQBEEwDAQWFJ4KHCpUNcaBwJod13X2ohBYqyn4t2HHdZ29KKT+TP5zHHWdvSgUDmac0ftdZx9E61BY7Tp7UQgsTGXXndmxGAZBEDiyDmemffnIhr22n3Wdq4+L3/O/XK69EDjbdb5eS9aQnU+yhux8kjVk55OsITufZA3Z9WkrOWRnlByyM0oO2Rklh+yMkkM2+SQPWrZkljxI2dKR5EHJXj+51bkxg6BNgeUxLD6DczYErivcE9iaQfZGr2+xSsM/qgrsjeBmjfPeUvjc8Nz93eMhDfZjCLwWuFj33KtwSWGnwfkPKQHrcwqPFT4IHCfuo3tNJP8qW+BL4izHAu8FHmVvNwLXFD55LVijGu3ilGxLXrkEdq32tDZPn8lukgW2EmTc9pSdZWZP20XlWMhy24wCK54ZFR7ijfVkzyLGsNg24/TSz1P0O7xRmDjP6PNtM9o5nEVP8Ma5gCqR6AveOfHGu4BxgtYxhhshGv/FUOH+IES3OVbhZYKMr7xzts04D6KrEdyZNd8IbredlYMRrfBN4ErTbAKXFb6GaBr1wR27d9FEssCbJr/Do8YSRVd2g8juXfwvk7WaJjM5RPNP4dv2sdou2+w628b09Urdha+XoocwCNGEaO3RCNGE6KpPI0QzINGlvEk41JiMEE2I1hB9QtdiQzQhOmkInQO5vRLtMDZT7ib1fJOKFC2Ou0lDNHl2k4Zo5ms3ad9FL82ab9pGQrQWvpt0rkS3OVbhbq7dpB41JsO7gHHG3aQeNSbDuwDJuJvUo8ZklFKAFpKz+AK0kJzFF6CF5GxVQJvBwHIWX4AWkrP4ArSQnJ09LEQZor+nytnZ42+UIdr/8Td7JnroogUekOk7N3YHLPpjtq+wtwfPvWSTCC/JT+AqObGZbc9EW79KuUCSiIRyJwJvrV3EP2MIgiAIgiAIgiAIgiDgJz8Af19z/tqnGO4AAAAASUVORK5CYII="
                        alt="school-building"
                        class="relative z-10 w-9 h-9 object-contain group-hover:scale-110 transition-transform duration-500">
                </div>

                {{-- JUDUL & DESKRIPSI --}}
                <h3
                    class="font-semibold text-gray-800 text-sm leading-snug mb-2 group-hover:text-red-800 transition-colors duration-300">
                    Semangat Keakraban, Rasa Solidaritas Yang Kuat</h3>
                <p class="text-xs text-gray-400 font-light leading-relaxed">Membangun komunitas sekolah yang hangat dan
                    penuh kebersamaan.</p>
            </div>

            {{-- BOTTOM ACCENT: Garis gradient muncul dari kiri saat hover --}}
            {{-- <div
                class="h-0.5 w-full bg-linear-to-r from-red-800 to-yellow-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-700 ease-out origin-left">
            </div> --}}
        </div>

        {{-- ===== CARD 2: Kurikulum IB ===== --}}
        <div
            class="group relative bg-white border border-gray-100 rounded-xl shadow-sm overflow-hidden mx-auto w-full scroll-animate transition-all duration-700 ease-in-out translate-x-10 opacity-0 hover:-translate-y-2 hover:shadow-2xl hover:shadow-red-900/10 hover:border-red-100 cursor-pointer">

            {{-- TOP BAR --}}
            <div
                class="absolute top-0 inset-x-0 h-1 bg-linear-to-r from-red-800 to-yellow-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-500 ease-out origin-left">
            </div>

            {{-- NUMBER BADGE --}}
            <div class="absolute top-4 right-4 w-7 h-7 rounded-full bg-red-50 flex items-center justify-center">
                <span class="text-red-800 text-xs font-bold">02</span>
            </div>

            {{-- CARD CONTENT --}}
            <div class="p-7 flex flex-col items-center text-center">

                {{-- ICON CIRCLE --}}
                <div class="relative w-20 h-20 flex items-center justify-center mb-5">
                    <div
                        class="absolute inset-0 rounded-full bg-red-50 group-hover:bg-red-100 group-hover:scale-110 transition-all duration-500">
                    </div>
                    <img src="data:image/png;base64,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"
                        alt="kurikulum-ib"
                        class="relative z-10 w-9 h-9 object-contain group-hover:scale-110 transition-transform duration-500">
                </div>

                {{-- JUDUL & DESKRIPSI --}}
                <h3
                    class="font-semibold text-gray-800 text-sm leading-snug mb-2 group-hover:text-red-800 transition-colors duration-300">
                    Kurikulum International Baccalaureate</h3>
                <p class="text-xs text-gray-400 font-light leading-relaxed">Standar pendidikan bertaraf internasional
                    yang diakui lebih dari 150 negara.</p>
            </div>

            {{-- BOTTOM ACCENT --}}
            {{-- <div
                class="h-0.5 w-full bg-linear-to-r from-red-800 to-yellow-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-700 ease-out origin-left">
            </div> --}}
        </div>

        {{-- ===== CARD 3: Beasiswa ===== --}}
        <div
            class="group relative bg-white border border-gray-100 rounded-xl shadow-sm overflow-hidden mx-auto w-full scroll-animate transition-all duration-700 ease-in-out translate-x-10 opacity-0 hover:-translate-y-2 hover:shadow-2xl hover:shadow-red-900/10 hover:border-red-100 cursor-pointer">

            {{-- TOP BAR --}}
            <div
                class="absolute top-0 inset-x-0 h-1 bg-linear-to-r from-red-800 to-yellow-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-500 ease-out origin-left">
            </div>

            {{-- NUMBER BADGE --}}
            <div class="absolute top-4 right-4 w-7 h-7 rounded-full bg-red-50 flex items-center justify-center">
                <span class="text-red-800 text-xs font-bold">03</span>
            </div>

            {{-- CARD CONTENT --}}
            <div class="p-7 flex flex-col items-center text-center">

                {{-- ICON CIRCLE --}}
                <div class="relative w-20 h-20 flex items-center justify-center mb-5">
                    <div
                        class="absolute inset-0 rounded-full bg-red-50 group-hover:bg-red-100 group-hover:scale-110 transition-all duration-500">
                    </div>
                    <img src="data:image/png;base64,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"
                        alt="scholarship"
                        class="relative z-10 w-9 h-9 object-contain group-hover:scale-110 transition-transform duration-500">
                </div>

                {{-- JUDUL & DESKRIPSI --}}
                <h3
                    class="font-semibold text-gray-800 text-sm leading-snug mb-2 group-hover:text-red-800 transition-colors duration-300">
                    Beasiswa Sekolah</h3>
                <p class="text-xs text-gray-400 font-light leading-relaxed">Program beasiswa komprehensif untuk
                    mendukung siswa berprestasi meraih pendidikan terbaik.</p>
            </div>

            {{-- BOTTOM ACCENT --}}
            {{-- <div
                class="h-0.5 w-full bg-linear-to-r from-red-800 to-yellow-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-700 ease-out origin-left">
            </div> --}}
        </div>

        {{-- ===== CARD 4: Guru ===== --}}
        <div
            class="group relative bg-white border border-gray-100 rounded-xl shadow-sm overflow-hidden mx-auto w-full scroll-animate transition-all duration-700 ease-in-out translate-x-10 opacity-0 hover:-translate-y-2 hover:shadow-2xl hover:shadow-red-900/10 hover:border-red-100 cursor-pointer">

            {{-- TOP BAR --}}
            <div
                class="absolute top-0 inset-x-0 h-1 bg-linear-to-r from-red-800 to-yellow-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-500 ease-out origin-left">
            </div>

            {{-- NUMBER BADGE --}}
            <div class="absolute top-4 right-4 w-7 h-7 rounded-full bg-red-50 flex items-center justify-center">
                <span class="text-red-800 text-xs font-bold">04</span>
            </div>

            {{-- CARD CONTENT --}}
            <div class="p-7 flex flex-col items-center text-center">

                {{-- ICON CIRCLE --}}
                <div class="relative w-20 h-20 flex items-center justify-center mb-5">
                    <div
                        class="absolute inset-0 rounded-full bg-red-50 group-hover:bg-red-100 group-hover:scale-110 transition-all duration-500">
                    </div>
                    <img src="data:image/png;base64,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"
                        alt="teacher"
                        class="relative z-10 w-9 h-9 object-contain group-hover:scale-110 transition-transform duration-500">
                </div>

                {{-- JUDUL & DESKRIPSI --}}
                <h3
                    class="font-semibold text-gray-800 text-sm leading-snug mb-2 group-hover:text-red-800 transition-colors duration-300">
                    Tenaga Pengajar Profesional</h3>
                <p class="text-xs text-gray-400 font-light leading-relaxed">Didukung guru-guru berpengalaman dan
                    bersertifikasi internasional di bidangnya.</p>
            </div>

            {{-- BOTTOM ACCENT --}}
            {{-- <div
                class="h-0.5 w-full bg-linear-to-r from-red-800 to-yellow-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-700 ease-out origin-left">
            </div> --}}
        </div>

    </div>

</section>
