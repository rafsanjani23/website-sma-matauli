{{-- ============================================ --}}
{{-- HERO & PENGENALAN PROGRAM IB --}}
{{-- ============================================ --}}

{{-- Hero Section - Warna Cerah --}}
<section class="relative overflow-hidden bg-white">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-40 -right-40 w-125 h-125 bg-red-100/50 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-32 -left-32 w-96 h-96 bg-yellow-100/50 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-6xl mx-auto px-6 py-10 md:py-16 lg:py-20 text-center">
        {{-- Badge --}}
        {{-- <div class="inline-flex items-center gap-2 bg-red-50 border border-red-100 rounded-full px-4 py-1.5 mb-6">
            <div class="w-2 h-2 bg-red-500 rounded-full animate-pulse"></div>
            <span class="text-red-800 text-xs md:text-sm font-medium tracking-wide">{{ __('Kurikulum Berstandar Internasional') }}</span>
        </div> --}}

        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-4">
            {{ __('Program') }}
            <span class="text-red-800">International Baccalaureate</span>
        </h1>

        <p class="text-gray-500 text-base md:text-lg max-w-3xl mx-auto leading-relaxed mb-8">
            {{ __('Kurikulum berstandar global untuk membentuk generasi pemimpin yang kritis, kreatif, dan berwawasan internasional.') }}
        </p>

        <div class="flex items-center justify-center gap-4">
            <div class="h-px w-12 bg-red-200"></div>
            <img src="{{ asset('assets/Logo_SMAN_Matauli.png') }}" alt="Logo" class="h-10 md:h-12 object-contain">
            <div class="h-px w-12 bg-red-200"></div>
        </div>

        {{-- Highlight Stats --}}
        <div class="flex flex-wrap justify-center gap-4 md:gap-6 mt-10">
            <div class="text-center px-6 py-4 bg-gray-50 rounded-2xl border border-gray-100">
                <p class="text-3xl md:text-4xl font-bold text-red-800">IB</p>
                <p class="text-xs text-gray-500 mt-1">Diploma Programme</p>
            </div>
            <div class="text-center px-6 py-4 bg-gray-50 rounded-2xl border border-gray-100">
                <p class="text-3xl md:text-4xl font-bold text-red-800">46</p>
                <p class="text-xs text-gray-500 mt-1">{{ __('Penerima Beasiswa') }}</p>
            </div>
            <div class="text-center px-6 py-4 bg-gray-50 rounded-2xl border border-gray-100">
                <p class="text-3xl md:text-4xl font-bold text-red-800">2045</p>
                <p class="text-xs text-gray-500 mt-1">{{ __('Visi Indonesia Emas') }}</p>
            </div>
        </div>
    </div>
</section>

{{-- Kerjasama Section --}}
<section class="bg-gray-50 border-y border-gray-100">
    <div class="max-w-5xl mx-auto px-6 py-16 md:py-20">

        {{-- Header --}}
        <div class="text-center mb-10">
            <span
                class="text-red-800 text-xs font-bold uppercase tracking-widest">{{ __('Kolaborasi Strategis') }}</span>
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-gray-900 mt-2 mb-3 leading-tight">
                {{ __('Kerjasama Dengan Yayasan Pendidikan Kader Bangsa Indonesia') }}
            </h2>
            <div class="w-16 h-1 bg-yellow-400 mx-auto mt-4 rounded-full"></div>
        </div>

        {{-- Gambar --}}
        <div class="rounded-2xl overflow-hidden shadow-lg mb-10">
            <img src="{{ asset('assets/gambar-kerja-sama.webp') }}" alt="{{ __('Kerja Sama Program IB') }}"
                class="w-full object-cover">
        </div>

        {{-- Teks --}}
        <div class="space-y-4 text-gray-600 leading-relaxed text-sm md:text-base max-w-4xl mx-auto text-justify">
            <p>
                {{ __('Dalam rangka mendukung visi Indonesia Emas 2045, Yayasan MATAULI menjalin kerja sama strategis dengan Yayasan Pendidikan Kader Bangsa Indonesia (YPKBI) untuk menyelenggarakan program International Baccalaureate (IB) Diploma Programme di SMAN 1 Plus MATAULI Pandan.') }}
            </p>
            <p>
                {{ __('Inisiatif ini merupakan bentuk alignment konkret dengan Program SMA Unggulan yang dicanangkan oleh Presiden Republik Indonesia, Bapak Prabowo Subianto, yang bertujuan mencetak generasi muda unggul, berkarakter, dan berdaya saing global.') }}
            </p>
            <p>
                {{ __('Melalui kurikulum IB Diploma Programme, para siswa/i dipersiapkan secara akademik dan mental untuk menempuh studi lanjut di universitas-universitas terbaik dunia, sekaligus membentuk profil pelajar Indonesia yang berpikir kritis, berwawasan global, dan tetap berakar pada nilai-nilai kebangsaan.') }}
            </p>
        </div>
    </div>
</section>
