<section class="relative w-full h-80 md:h-100 lg:h-120 overflow-hidden">
    <img src="{{ asset('assets/komite/komite-hero-section.webp') }}" alt="Paduan Suara SMAN 1 MATAULI Pandan"
        class="absolute inset-0 w-full h-full object-cover">

    <!-- Overlay gradient from bottom -->
    <div class="absolute inset-0 bg-linear-to-t from-black/70 via-black/20 to-transparent"></div>

    <!-- Logo & Text at bottom -->
    <div class="absolute inset-x-0 bottom-0 flex flex-col items-center pb-12 md:pb-18 lg:pb-24 text-center px-4">
        <!-- Logo -->
        <img src="{{ asset('assets/Logo_SMAN_Matauli.png') }}" alt="Logo SMAN 1 MATAULI Pandan"
            class="h-10 sm:h-12 md:h-16 lg:h-20 mb-4 object-contain drop-shadow-xl">

        <h2 class="text-white text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-2">
            {{ __('KOMITE') }}
        </h2>

        <p class="text-gray-200 text-sm sm:text-base md:text-lg tracking-wide">
            SMAN 1 MATAULI Pandan
        </p>
    </div>
</section>
