<!-- ============================================ -->
<!-- SEJARAH SECTION - START -->
<!-- ============================================ -->
<section id="sejarah" class=" relative py-5">
    <div class="bg-linear-to-t md:bg-linear-to-r from-rose-300 via-red-700 to-red-900 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 pointer-events-none">
            <div class="absolute -top-10 -left-10 w-96 h-96 bg-black rounded-full blur-3xl"></div>
            <div class="absolute -bottom-10 -right-10 w-96 h-96 bg-rose-400 rounded-full blur-3xl"></div>
        </div>

        <div class="relative mx-auto z-10 ">

            <div class="grid md:grid-cols-2 gap-10 items-center-safe">

                <!-- Left Column: Image -->
                <div
                    class="order-2 md:order-1 h-full w-full  mx-auto flex scroll-animate opacity-0 translate-y-10 transition-all duration-700 ease-in-out object-bottom">
                    <div class="relative">
                        <img src="{{ asset('assets/feisal-dan-akbar tanjung.png') }}"
                            alt="Pendiri SMAN 1 Matauli Pandan - Jenderal TNI Feisal Tanjung dan Dr. Ir. H. Akbar Tandjung"
                            class="w-full h-full rounded-none">
                    </div>
                </div>

                <!-- Right Column: Content -->
                <div
                    class="order-1 md:order-2 text-white opacity-0 translate-x-12 transition-all duration-1000 ease-in-out scroll-animate">

                    <!-- Title -->
                    <div class="mb-6">
                        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-yellow-400 italic font-libre mb-3">
                            Sejarah
                        </h2>

                        <h3 class="text-2xl md:text-3xl lg:text-4xl font-semibold leading-tight">
                            SMAN 1 MATAULI Pandan
                        </h3>
                    </div>

                    <!-- Description -->
<<<<<<< HEAD
                    <div class="mb-8 md:mb-10">
                        <p class="text-white text-sm md:text-base lg:text-md leading-relaxed text-justify xl:px-2">
                            SMA Negeri 1 Plus MATAULI Pandan adalah sekolah negeri unggulan di bawah naungan Yayasan
                            Maju Tapian Nauli (MATAULI) serta Kementerian Pendidikan dan Kebudayaan di Provinsi
                            Sumatera Utara. Pada tanggal 14 Juni 1994, angkatan pertama secara resmi dilantik oleh
                            Panglima ABRI, Jenderal TNI Feisal Tanjung dan Dr. Ir. H. Akbar Tandjung serta
                            tokoh-tokoh
                            nasional asal Tapanuli Tengah.
                        </p>
                    </div>
=======
                    <p class="text-base md:text-lg leading-relaxed text-justify mb-4 max-w-xl">
                        SMA Negeri 1 Plus MATAULI Pandan adalah sekolah negeri unggulan di bawah naungan
                        Yayasan Maju Tapian Nauli (MATAULI) serta Kementerian Pendidikan dan Kebudayaan
                        di Provinsi Sumatera Utara. Pada tanggal 14 Juni 1994, angkatan pertama secara resmi
                        dilantik oleh Panglima ABRI, Jenderal TNI Feisal Tanjung dan Dr. Ir. H. Akbar Tandjung
                        serta tokoh-tokoh nasional asal Tapanuli Tengah.
                    </p>
>>>>>>> 0c11fe5 (Update halaman Sejarah di home)

                    <!-- CTA -->
                    <div>
                        <a href="{{ url('/sejarah') }}"
                            class="inline-flex items-center gap-2 bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-3 py-1 md:px-3 md:py-1 rounded-2xl transition-all duration-300 ease-in-out hover:scale-105 shadow-lg text-sm md:text-base">
                            Baca lebih lanjut
                        </a>
                    </div>

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
                    entry.target.classList.remove('opacity-0', 'translate-x-12');
                    entry.target.classList.add('opacity-100', 'translate-x-0');
                }
            });
        }, {
            threshold: 0.2
        });

        elements.forEach(el => observer.observe(el));
    });
</script>
