<!-- ============================================ -->
<!-- GALERI FOTO HEADING - START -->
<!-- ============================================ -->
<section class="py-10 bg-white">
    <div class="mx-auto px-4">
        <div class="text-center mb-2">
            <h1 class="mt-2 text-3xl md:text-5xl font-bold text-slate-950 mb-2 md:mb-4">
                Galeri Foto SMA Negeri 1 <br>
                MATAULI Pandan
            </h1>
            <p class="text-gray-500 text-sm md:text-lg max-w-4xl mx-auto leading-relaxed px-4">
                Mengabadikan momen terbaik dari berbagai kegiatan dan prestasi siswa kami
            </p>

            <div class="mt-4 mx-auto w-14 h-1 bg-yellow-400 rounded-full"></div>
        </div>
    </div>
</section>
<!-- ============================================ -->
<!-- GALERI FOTO HEADING - END -->
<!-- ============================================ -->

<!-- ============================================ -->
<!-- GALERI FOTO CONTENT - START -->
<!-- ============================================ -->
<section class="bg-white mb-16">
    <div class="mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-2 px-10">

            @for ($i = 0; $i < 9; $i++)
            <div>
                <div
                    class="bg-white border border-gray-200 shadow-md w-full max-w-sm rounded-4xl overflow-hidden mx-auto cursor-pointer relative group">
                    <div class="aspect-3/2">
                        <img src="https://readymadeui.com/Imagination.webp" alt="Galeri Foto"
                            class="w-full h-full object-cover" />
                    </div>
                    <div class="p-4 absolute bottom-0 left-0 right-0 bg-matauli-red-dark rounded-2xl opacity-90">
                        <h3 class="text-lg text-center font-semibold text-white line-clamp-1">Judul Foto</h3>
                        <div class="h-0 overflow-hidden group-hover:h-[70px] group-hover:mt-3 transition-all duration-300">
                            <p class="text-gray-200 text-[13px] leading-relaxed line-clamp-3">Mengabadikan momen terbaik
                                dari berbagai kegiatan dan prestasi siswa kami di SMA Negeri 1 Matauli Pandan.</p>
                        </div>
                    </div>
                </div>
            </div>
            @endfor

        </div>
    </div>
</section>
<!-- ============================================ -->
<!-- GALERI FOTO CONTENT - END -->
<!-- ============================================ -->
