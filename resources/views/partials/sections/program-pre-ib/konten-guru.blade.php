{{-- ============================================ --}}
{{-- GURU IB SECTION --}}
{{-- ============================================ --}}
<section class="bg-white">
    <div class="max-w-6xl mx-auto px-6 py-16 md:py-20">

        {{-- Header --}}
        <div class="text-center mb-12">
            <span class="text-red-800 text-xs font-bold uppercase tracking-widest">{{ __('Tim Pengajar') }}</span>
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-gray-900 mt-2 mb-3">
                {{ __('Guru International Baccalaureate') }}
            </h2>
            <p class="text-gray-500 text-sm md:text-base max-w-2xl mx-auto">
                SMAN 1 Matauli Pandan
            </p>
            <div class="w-16 h-1 bg-yellow-400 mx-auto mt-4 rounded-full"></div>
        </div>

        {{-- Cards Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 max-w-4xl mx-auto">
            {{-- Card 1 --}}
            <div
                class="group relative bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div class="aspect-4/3 overflow-hidden bg-gray-100">
                    <img src="assets/Mustaqim Haniru, M.Appling.png"
                        class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500"
                        alt="Guru IB" />
                </div>
                <div class="p-4 text-center">
                    <h5 class="text-gray-900 font-bold text-sm md:text-base">Mustaqim Haniru, M.Appling</h5>
                    <p class="text-red-800 text-xs md:text-sm font-medium mt-1">{{ __('English Teacher') }}</p>
                </div>
                {{-- <div
                    class="absolute top-3 right-3 bg-yellow-400 text-slate-900 text-[10px] font-bold px-2 py-0.5 rounded-full">
                    IB</div> --}}
            </div>

            {{-- Card 2 --}}
            <div
                class="group relative bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div class="aspect-4/3 overflow-hidden bg-gray-100">
                    <img src="assets/Fajar Mukharom Darozat, M.Si.png"
                        class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500"
                        alt="Guru IB" />
                </div>
                <div class="p-4 text-center">
                    <h5 class="text-gray-900 font-bold text-sm md:text-base">Fajar Mukharom Darozat, M.Si</h5>
                    <p class="text-red-800 text-xs md:text-sm font-medium mt-1">{{ __('Physics Teacher') }}
                    </p>
                </div>
                {{-- <div
                    class="absolute top-3 right-3 bg-yellow-400 text-slate-900 text-[10px] font-bold px-2 py-0.5 rounded-full">
                    IB</div> --}}
            </div>

            {{-- Card 3 --}}
            <div
                class="group relative bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div class="aspect-4/3 overflow-hidden bg-gray-100">
                    <img src="assets/Rosmida Valentina, S.Si.png"
                        class="w-full h-full object-cover object-[center_40%] group-hover:scale-105 transition-transform duration-500"
                        alt="Guru IB" />
                </div>
                <div class="p-4 text-center">
                    <h5 class="text-gray-900 font-bold text-sm md:text-base">Rosmida Valentina, S.Si</h5>
                    <p class="text-red-800 text-xs md:text-sm font-medium mt-1">{{ __('Biology Teacher') }}</p>
                </div>
                {{-- <div
                    class="absolute top-3 right-3 bg-yellow-400 text-slate-900 text-[10px] font-bold px-2 py-0.5 rounded-full">
                    IB</div> --}}
            </div>
        </div>

        {{-- CTA Button --}}
        <div class="text-center mt-10">
            <a href="{{ route('tendik') }}#guru-ib"
                class="group inline-flex items-center gap-2 bg-red-800 hover:bg-red-700 text-white font-semibold px-8 py-3 rounded-full transition-all duration-300 hover:gap-3 shadow-lg shadow-red-900/20 text-sm">
                {{ __('Lihat Semua Guru') }}
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 group-hover:translate-x-1 transition-transform"
                    viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
</section>
