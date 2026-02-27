<section id="card-badge" class="py-16 mx-auto px-6">

    {{-- ===================== --}}
    {{-- SECTION HEADER --}}
    {{-- Berisi eyebrow text, judul utama, dan garis gradient --}}
    {{-- ===================== --}}
    <div class="text-center mb-14">
        <h2 class="mt-3 text-3xl font-bold text-gray-900">Mengapa Memilih Sekolah Kami
            {{-- Garis dekoratif bawah judul --}}
            <div class="mt-4 mx-auto w-14 h-1 bg-yellow-400 rounded-full"></div>
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

            {{-- CARD CONTENT --}}
            <div class="p-7 flex flex-col items-center text-center">

                {{-- ICON CIRCLE --}}
                <div class="relative w-20 h-20 flex items-center justify-center mb-5">
                    <div
                        class="absolute inset-0 rounded-full bg-red-50 group-hover:bg-red-100 group-hover:scale-110 transition-all duration-500">
                    </div>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAABo0lEQVR4nO3dsU3DQBiG4SOiNEpP3CCmYB8IK8AEZIVkhgyUhs6BOhOE6ipOQj7he//E71NGis/Kl8/nXy6ckiRJkiRJc3LTaqHtanVutVZrr8dj9e+4+M8T0Xi3tV98Wy6v9h/dkg2AVTdgrl4O++9fn6X0lVJKi7un+7HHswEwA4AZAAzfA9bD8Emfw192ff841bFtAMwAYAYAMwCYAcAMAIbfhk55i3cJbADMAGD4JSiLOBG3uDzaABjegPUwvAPLPgNrFtkAGN4AQqRbXxsAwxuw6/sP+hxINgBmADADgOF7QOYkLATegAaTcJipt8QGwPAGTC3S1FtiA2B4A5yEhTIAmAHA8D0gcxIWAm8A9Ey4BJmYbQAMb0AU1MRsA2B4A5yEhTIAmAHA8D0gcxIWAm9A40k43PNhGwDDG9BSxOfDNgCGN8BJWCgDgBkADN8DMidhIfAGwM+E8cnYBsDwBpAiTMY2AIY3wElYKAOAGQDMAGAGADMAWPXrl8a+xOeh62qXCs/XWF2w6kFsczqNSn3bdb72qsAGSJIkSZIkzccPmc1GphcN1HwAAAAASUVORK5CYII="
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

        {{-- ===== CARD 3: Asrama ===== --}}
        <div
            class="group relative bg-white border border-gray-100 rounded-xl shadow-sm overflow-hidden mx-auto w-full scroll-animate transition-all duration-700 ease-in-out translate-x-10 opacity-0 hover:-translate-y-2 hover:shadow-2xl hover:shadow-red-900/10 hover:border-red-100 cursor-pointer">

            {{-- TOP BAR --}}
            <div
                class="absolute top-0 inset-x-0 h-1 bg-linear-to-r from-red-800 to-yellow-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-500 ease-out origin-left">
            </div>

            {{-- CARD CONTENT --}}
            <div class="p-7 flex flex-col items-center text-center">

                {{-- ICON CIRCLE --}}
                <div class="relative w-20 h-20 flex items-center justify-center mb-5">
                    <div
                        class="absolute inset-0 rounded-full bg-red-50 group-hover:bg-red-100 group-hover:scale-110 transition-all duration-500">
                    </div>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAACU0lEQVR4nO2aO24CMRQAX6KUSKkjqnQciCtEuUKOkCtEXIED0aVCqZHokyKyAhv257X93rNn2oWVPbMGvIsIAAAAADjk7fHxW3sMS7jXHsASgnzPEdwG6Er3GsFlgD7ZHiO4CzAm2VsEVwGmyvUUwU2AuVK9RHARIFamhwjmAyyVaD2C6QCp5FmOYDZAamlWI9xpD6BLCVHvp5OZeZsZiIi9q7REKDMfQdbkl8JEgFblixgI0LJ8EeUArcsXUQyA/F9UAiD/j+IBkH9N0QDI/0+xAMi/TZEAXuWXGHf2AF7lB3KPP2sA7/IDOeeRLUAt8gO55pMlQG3yAznmlTxArfIDqeeXNEDt8gMp55ksQCvyA6nmmyRAa/IDKea96JFbq+JvEfv4MnoFIP+aWB9RAZB/mxgvswMgf5i5fmYFQP405nia/MURTvq8WsWMqSk+z2cRmfbFPGkFcOXHMcXbaADkL2PM32AA5KdhyGNvAOSnpc/n7N3bx3pNmBFej8fJXtX/mtg6BFDmIdWJXg77r6Hju832aex14TUlsDJeVoAyBFCGAMoQQBkCKJPsV1BJXg773mO7zbbgSJbjZic8JL0PrRhzdsLmV0CM+O57La8K0xuxJfK75+lGYCMGImI4QKqrP9f5UmE2QCsQQBkCKGN2H5DjM7vUz1GeiDmCAMoQQBkCKEMAZQigDAGUqTrAbrM1fStapOIAl+ItR6g2gBeqDXB5K8PqrWgRB48kl2BZfKDaFeAFAihDAGUIoAwBlCGAMgRQhgDKEAAAAAAAAADa4gfhLMWfgDVbYQAAAABJRU5ErkJggg=="
                        alt="boarding school"
                        class="relative z-10 w-9 h-9 object-contain group-hover:scale-110 transition-transform duration-500">
                </div>

                {{-- JUDUL & DESKRIPSI --}}
                <h3
                    class="font-semibold text-gray-800 text-sm leading-snug mb-2 group-hover:text-red-800 transition-colors duration-300">
                    Asrama Sekolah</h3>
                <p class="text-xs text-gray-400 font-light leading-relaxed">Fasilitas asrama modern dengan lingkungan
                    belajar kondusif untuk mendukung kehidupan dan prestasi siswa secara menyeluruh.</p>
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

            {{-- CARD CONTENT --}}
            <div class="p-7 flex flex-col items-center text-center">

                {{-- ICON CIRCLE --}}
                <div class="relative w-20 h-20 flex items-center justify-center mb-5">
                    <div
                        class="absolute inset-0 rounded-full bg-red-50 group-hover:bg-red-100 group-hover:scale-110 transition-all duration-500">
                    </div>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAF50lEQVR4nO2ca2gcVRTHf02rRsH6fqCoRSnqB79oFa1+FUVbFRWEgvWBoiCIz/aD4rmbNG2DiPaBoGBU8JkPPqBfNKZKfVQRUfBVC74F22KLNlpJq40ccwOTm9lkZ2Z35+7u+cOBkGzOPXN+M3PnnntmwWQymUwmk8lkMplMJlMLyMGYGXU3gS0VuMCAEJV9aUCIywwIcZkBIS4zIMRlBoS4zIAQlxkQ4jIDQhsDEdjm4GkHNwgsEDha4MAn4AD9uQfOEVgqMOA/W3oCXDsCEXivAlcKzKnVj362AosFNpWdBNcuQAR+qMDlmZ1MhXOZg28bGnhG1XvchgMRGOyHQ6mT1JeD5w1IRnkYK4FZaX/vgdMdLBd4y8HXAn+q+Z/1d8v1M9P4rxiQDBJ4KO33FThXYGOG286wTvxVxugxIDnln6AeF9ifZQ7wV9p+gfXqI/Qr8EJWf64NLC+HiaQd6eDtokHolbUKjgjnFIHvyk6QaxUgelbXA0YSSnilCCwqO0GuVYDobaoBAa0Lx3HwbtlJih6In8AzzxkzmfrU1Xww1uKykxQ9kIxPU1ltKBhrjoPtZScqWiA9cGajgwrXKW68Plb8TCpRDQOiC7smnCn3J8cUuNGAVJFfbTcUiMCbwZgLDEh1x980AciW5Jh9cIwBqe54pAm3rJHkmGvgoCaMGYVlBiKwuwmB/WFAIr5lCRxbdqJiBjLUhMDeCBeiLoJkRQlEYFmjgxK4Lxjz5rITFS0QvwHV0KB6YH5wVT5bR9i/C+xpGyA+QcPNLJ0I7Cjgb7tueAlcJNA94XclHCVwlcBLDva1NBDf4lP34qKDfwXODsa6uoAvBXHITMfTA2fFUlXOBcQnan29gxFYmzLOphx+9lTgkozHo1fiMy0LxG/d1rPqOxxuUGmvV84r49ppEj/3ETi4yp9npRUyWwKISrdd6wRlONzCXQ2Had9XDl8PpEA4wW+o/Zq4ij5zcKtAV/DZbgeftySQxFbuupxzip7Na1M6HvVMfTGHv5fD9iSdk6bbTxHYEF4xAle0LJAJ+b7dLJXgoXACTyRkRY6D+SScwAWOd/BzjSAnnRACv7Q0kASY+bqfoSV0bY7zxcgRga90Ba5/C9cZRWEIbBM4Oax/CXyQwcfCII4n2wJIEfknnfMcXO+gT7taBPbOcBCjFbgwxddAxmSsCv7/ro4Hkiad3CtwjYPXdc5JObNvCf/Hwd05rrLnkj4ElhiQGdQLpzl4VMvz/gDWhJ+pwMV5Vt4CjyX96DsuBqRG9Y93NS4Nn850bhLYlTMZd4Q9zC0FxK8TNCmvTHS5FwzmL79O2Ozv/7cJzKs1HoG5/sEh19h9cFzSn79Fxg9EX1FzcK+DnU0K8mMHNyULgykxdel6Iu8YAvcE/g538Hf0QPw7g++UEajADoHVvXBSGJeD/gJ+N6QsJh8s4xgzAfHbqJleO2sQmL36ppU+Hvu4lhSoPP+oHfzJ4+yFU5rUyJEfiN6m9MXOsmG4qfZRgc2mUYHzUwqmNS8mSwPi54yxdjKB21OO8+Gy46rpaaqJE3izYAyk3AUWNWjTrb5AylogNdA+TanuzhP4LYLYZgbi1xlj7WAy/qQ2qQipFWK/NzLWKkC2tgmMf9K2dWPYts0KZHebAFmWcmx3lh1XZiBtAuO1lMXfQn30LTu2jgMisDX8CpAVcGJyfz0mix3IvoI1pdHwJVJfi9tcduJbFchOLdkIuDwvfoZFw0b1k3UUkEQiu3V3UOCLAkXDvF2QBiQEEnSEXKpNFNVW1tr9EnagaNGwwOaVAZkGSNiT+5SD7/XxXOBDvYoGYXbKu+7vl53stgdSq2KfNzoGiEBXDBVcA8L/ME6t57cVGZCMQAZhtsAZDq7zBdFoXsLpSCAdIwMSmQxIZDIgkSk2IC7SKm29zO8/vVr1u40NCGWB2ZXWFGhAKBXKoAEhKpv0rUgGhPLNgBCXGRDiMgNCXGZAiMcEfjIgxANDt6qnADGZTCaTyWQymUwmk8lE+foPAOSvUC8DMO0AAAAASUVORK5CYII="
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
