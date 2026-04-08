{{-- ============================================ --}}
{{-- STRUKTUR ORGANISASI SECTION --}}
{{-- ============================================ --}}
<section class="relative overflow-hidden bg-white">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-40 -right-40 w-125 h-125 bg-red-100/50 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-32 -left-32 w-96 h-96 bg-yellow-100/50 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-6xl mx-auto px-6 py-16 md:py-24">

        {{-- Header --}}
        <div class="text-center mb-10 md:mb-14">
            <h2 class="text-xl md:text-2xl lg:text-3xl font-bold text-gray-900 max-w-2xl mx-auto">
                {{ __('Susunan Komite SMAN 1 MATAULI Pandan') }}
            </h2>
            <div class="w-50 h-1 bg-yellow-400 mx-auto mt-4 rounded-full"></div>
        </div>

        {{-- Gambar Struktur --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 md:gap-4 mx-auto">
            <div
                class=" mx-auto sm:col-span-2 lg:col-span-3 group bg-white hover:bg-red-50/50 border border-gray-300 border-l-4 border-l-red-800 rounded-2xl p-5 flex flex-col gap-3 transition-all duration-300 hover:-translate-y-1 hover:shadow-md w-xl">
                <div class="flex items-center gap-3">
                    <span
                        class="text-[16px] font-bold tracking-[0.08em] uppercase text-red-800">{{ __('Ketua Komite') }}</span>
                </div>
                <div class="w-full h-px bg-gray-100"></div>
                <p class="text-slate-600 text-[-14px] font-semibold leading-relaxed">
                    {{ __('Drs. Syamsir Hutabarat') }}
                </p>
            </div>
            <div
                class="mx-auto sm:col-span-2 lg:col-span-3 group bg-white hover:bg-red-50/50 border border-gray-300 border-l-4 border-l-red-800 rounded-2xl p-5 flex flex-col gap-3 transition-all duration-300 hover:-translate-y-1 hover:shadow-md w-xl">
                <div class="flex items-center gap-3">
                    <span
                        class="text-[16px] font-bold tracking-[0.08em] uppercase text-red-800">{{ __('Bendahara Komite') }}</span>
                </div>
                <div class="w-full h-px bg-gray-100"></div>
                <p class="text-slate-600 text-[-14px] font-semibold leading-relaxed">
                    {{ __('Kariaman Tampubolon, SE') }}
                </p>
            </div>
            <div
                class="mx-auto sm:col-span-2 lg:col-span-3 group bg-white hover:bg-red-50/50 border border-gray-300 border-l-4 border-l-red-800 rounded-2xl p-5 flex flex-col gap-3 transition-all duration-300 hover:-translate-y-1 hover:shadow-md w-xl">
                <div class="flex items-center gap-3">
                    <span
                        class="text-[16px] font-bold tracking-[0.08em] uppercase text-red-800">{{ __('Sekretaris Komite') }}</span>
                </div>
                <div class="w-full h-px bg-gray-100"></div>
                <p class="text-slate-600 text-[-14px] font-semibold leading-relaxed">
                    {{ __('Anwar Said, S.Pd., M.M') }}
                </p>
            </div>
            <div
                class=" mx-auto sm:col-span-2 lg:col-span-3 group bg-white hover:bg-red-50/50 border border-gray-300 border-l-4 border-l-red-800 rounded-2xl p-5 flex flex-col gap-3 transition-all duration-300 hover:-translate-y-1 hover:shadow-md w-xl">
                <div class="flex items-center gap-3">
                    <span
                        class="text-[16px] font-bold tracking-[0.08em] uppercase text-red-800">{{ __('Anggota Komite') }}</span>
                </div>
                <div class="w-full h-px bg-gray-100"></div>
                <ol class="text-slate-600 font-semibold leading-relaxed list-decimal pl-5">
                    <li>{{ __('Drs. H. Ngadiman KS') }}</li>
                    <li>{{ __('Drs. Klose Harahap') }}</li>
                    <li>{{ __('Osjanni Pandiangan, S.Pd., M.M') }}</li>
                </ol>
            </div>
        </div>
    </div>
</section>
