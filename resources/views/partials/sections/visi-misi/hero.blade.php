<!-- HERO IMAGE FULL WIDTH -->
<section class="relative w-full h-[50vh] md:h-[60vh] lg:h-[70vh] overflow-hidden">
    <img src="{{ asset('assets/visi_misi.jpeg') }}" alt="Foto Pendiri Matauli Pandan"
        class="absolute inset-0 w-full h-full object-cover object-[center_30%]">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/45"></div>

    <!-- Logo & Text -->
    <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4">
        <!-- Logo -->
        <img src="{{ asset('assets/Logo_SMAN_Matauli.png') }}" alt="Logo SMAN 1 Matauli Pandan"
            class="h-10 sm:h-12 md:h-16 lg:h-20 mb-4 object-contain drop-shadow-xl">

        <h2 class="text-white text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-2">
            {{ __('VISI & MISI SEKOLAH') }}
        </h2>

        <p class="text-gray-200 text-sm sm:text-base md:text-lg tracking-wide">
            SMAN 1 Matauli Pandan
        </p>
    </div>
</section>
