<!-- ============================================ -->
<!-- SEJARAH SECTION - START -->
<!-- ============================================ -->
<section id="sejarah" class="mx-auto">
    <div class="relative overflow-hidden bg-linear-to-br from-red-900 via-red-800 to-red-950">

        {{-- ===================== --}}
        {{-- BACKGROUND DECORATIONS --}}
        {{-- Lingkaran blur sebagai tekstur latar --}}
        {{-- ===================== --}}
        <div class="absolute inset-0 pointer-events-none overflow-hidden">
            <div class="absolute -top-20 -left-20 w-80 h-80 bg-red-600 rounded-full blur-3xl opacity-20"></div>
            <div class="absolute -bottom-20 -right-20 w-96 h-96 bg-rose-900 rounded-full blur-3xl opacity-30"></div>
            <div class="absolute top-1/2 left-1/3 w-64 h-64 bg-yellow-600 rounded-full blur-3xl opacity-5"></div>
        </div>

        {{-- ===================== --}}
        {{-- GRID LAYOUT --}}
        {{-- 1 kolom (mobile) → 2 kolom (desktop) --}}
        {{-- ===================== --}}
        <div class="relative z-10 grid md:grid-cols-2 items-stretch min-h-72">

            {{-- ===== KOLOM KIRI: Gambar ===== --}}
            <div
                class="order-2 md:order-1 relative overflow-hidden scroll-animate opacity-0 translate-y-10 transition-all duration-700 ease-in-out">

                {{-- IMAGE: Full height mengisi kolom --}}
                <img src="{{ asset('assets/feisal_dan_akbar_tanjung.png') }}"
                    alt="Pendiri SMAN 1 Matauli Pandan - Jenderal TNI Feisal Tanjung dan Dr. Ir. H. Akbar Tandjung"
                    class="w-full h-full object-cover object-top">

                {{-- IMAGE OVERLAY: Gradasi ke kanan agar menyatu dengan konten --}}
                {{-- <div
                    class="absolute inset-0 bg-linear-to-r from-transparent via-transparent to-red-800/60 hidden md:block">
                </div> --}}

                {{-- IMAGE OVERLAY BOTTOM: Gradasi ke atas untuk mobile --}}
                {{-- <div class="absolute inset-0 bg-linear-to-t from-red-900/80 to-transparent md:hidden"></div> --}}
            </div>

            {{-- ===== KOLOM KANAN: Konten ===== --}}
            <div
                class="order-1 md:order-2 flex flex-col justify-center px-8 py-12 md:px-10 lg:px-14 xl:px-16 text-white scroll-animate opacity-0 translate-x-12 transition-all duration-1000 ease-in-out">

                {{-- TITLE BLOCK --}}
                <div class="mb-6">
                    {{-- Judul italic kuning --}}
                    <h2
                        class="text-4xl md:text-5xl lg:text-6xl font-bold text-yellow-400 italic font-libre leading-none mb-2">
                        Sejarah
                    </h2>
                    {{-- Sub judul putih --}}
                    <h3 class="text-xl md:text-2xl lg:text-3xl font-semibold text-white leading-snug">
                        SMAN 1 MATAULI Pandan
                    </h3>
                    {{-- Garis dekoratif --}}
                    <div class="mt-4 w-14 h-0.5 bg-linear-to-r from-yellow-400 to-yellow-200 rounded-full"></div>
                </div>

                {{-- DESKRIPSI --}}
                <p class="text-sm md:text-base leading-relaxed text-white/80 text-justify mb-8 max-w-lg">
                    SMA Negeri 1 Plus MATAULI Pandan adalah sekolah negeri unggulan di bawah naungan
                    Yayasan Maju Tapian Nauli (MATAULI) serta Kementerian Pendidikan dan Kebudayaan
                    di Provinsi Sumatera Utara. Pada tanggal 14 Juni 1994, angkatan pertama secara resmi
                    dilantik oleh Panglima ABRI, Jenderal TNI Feisal Tanjung dan Dr. Ir. H. Akbar Tandjung
                    serta tokoh-tokoh nasional asal Tapanuli Tengah.
                </p>

                {{-- CTA BUTTON --}}
                <div>
                    <a href="{{ url('/sejarah') }}"
                        class="group inline-flex items-center gap-2 bg-yellow-400 hover:bg-yellow-300 text-red-900 font-bold px-6 py-2.5 rounded-full transition-all duration-300 ease-in-out hover:gap-4 shadow-lg shadow-black/20 text-sm">
                        <span>Baca lebih lanjut</span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 group-hover:translate-x-1 transition-transform duration-300"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- ============================================ -->
<!-- SEJARAH SECTION - END -->
<!-- ============================================ -->

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const elements = document.querySelectorAll('.scroll-animate');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('opacity-0', 'translate-x-12',
                        'translate-y-10');
                    entry.target.classList.add('opacity-100', 'translate-x-0', 'translate-y-0');
                }
            });
        }, {
            threshold: 0.2
        });
        elements.forEach(el => observer.observe(el));
    });
</script>
