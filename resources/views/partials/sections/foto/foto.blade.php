<!-- ============================================ -->
<!-- GALERI FOTO CONTENT - START -->
<!-- ============================================ -->
<section class="bg-white mb-16">
    <div class="mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-2 px-10">

            @for ($i = 0; $i < 9; $i++)
                <div>
                    <div
                        class="bg-white border border-gray-200 shadow-md w-full max-w-sm rounded-4xl overflow-hidden mx-auto relative group">
                        <div class="aspect-3/2">
                            <img src="https://readymadeui.com/Imagination.webp" alt="Galeri Foto"
                                class="w-full h-full object-cover" />
                        </div>
                        <div class="p-4 absolute bottom-0 left-0 right-0 bg-matauli-red-dark rounded-2xl opacity-90">
                            <h3 class="text-lg text-center font-semibold text-white line-clamp-1">Judul Foto</h3>
                            <div
                                class="h-0 overflow-hidden group-hover:h-17.5 group-hover:mt-3 transition-all duration-300">
                                <p class="text-gray-200 text-[13px] leading-relaxed line-clamp-3">Mengabadikan momen
                                    terbaik
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
