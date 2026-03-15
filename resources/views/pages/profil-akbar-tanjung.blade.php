@extends('layouts.app')
@section('title', 'Profil Dr. Ir. Akbar Tandjung')
@section('content')

    {{-- Hero Section --}}
    <section class="relative overflow-hidden bg-linear-to-br from-red-950 via-red-900 to-red-800">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -top-32 -right-32 w-96 h-96 bg-yellow-400/10 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-red-600/20 rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-6xl mx-auto px-6 py-20 md:py-28 lg:py-32">
            <div class="flex flex-col md:flex-row items-center gap-10 md:gap-16">
                {{-- Foto --}}
                <div class="shrink-0">
                    <div
                        class="w-52 h-52 md:w-64 md:h-64 lg:w-72 lg:h-72 rounded-full overflow-hidden ring-4 ring-yellow-400/30 shadow-2xl">
                        <img src="{{ asset('assets/Dr. Ir. Akbar Tandjung_webp.webp') }}" alt="Dr. Ir. Akbar Tandjung"
                            class="w-full h-full object-cover object-top scale-105">
                    </div>
                </div>

                {{-- Nama & Info --}}
                <div class="text-center md:text-left">
                    <p class="text-white/80 text-sm md:text-base font-medium tracking-widest uppercase mb-2">
                        {{ __('Profil Tokoh Pendiri') }}</p>
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-yellow-400 italic font-libre leading-tight">
                        Dr. Ir. Akbar Tandjung</h1>
                    <div class="mt-4 flex items-center justify-center md:justify-start">
                        <span class="text-white/80 text-sm font-medium">{{ __('Pendiri Yayasan MATAULI') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Info Cards Strip --}}
    <section class="bg-white border-b border-gray-100">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 divide-x divide-gray-100">
                <div class="py-6 px-4 text-center">
                    <p class="text-[10px] md:text-xs text-gray-400 uppercase tracking-wider mb-1">{{ __('Tempat Lahir') }}
                    </p>
                    <p class="font-semibold text-gray-800 text-sm">Sibolga, Sumut</p>
                </div>
                <div class="py-6 px-4 text-center">
                    <p class="text-[10px] md:text-xs text-gray-400 uppercase tracking-wider mb-1">{{ __('Tanggal Lahir') }}
                    </p>
                    <p class="font-semibold text-gray-800 text-sm">14 Agustus 1945</p>
                </div>
                <div class="py-6 px-4 text-center">
                    <p class="text-[10px] md:text-xs text-gray-400 uppercase tracking-wider mb-1">{{ __('Menpora') }}</p>
                    <p class="font-semibold text-gray-800 text-sm">1993–1998</p>
                </div>
                <div class="py-6 px-4 text-center">
                    <p class="text-[10px] md:text-xs text-gray-400 uppercase tracking-wider mb-1">{{ __('Ketua DPR RI') }}
                    </p>
                    <p class="font-semibold text-gray-800 text-sm">1999–2004</p>
                </div>
                <div class="py-6 px-4 text-center">
                    <p class="text-[10px] md:text-xs text-gray-400 uppercase tracking-wider mb-1">
                        {{ __('Ketua Partai Golkar') }}</p>
                    <p class="font-semibold text-gray-800 text-sm">1999–2004</p>
                </div>
                <div class="py-6 px-4 text-center">
                    <p class="text-[10px] md:text-xs text-gray-400 uppercase tracking-wider mb-1">
                        {{ __('Yayasan MATAULI') }}</p>
                    <p class="font-semibold text-gray-800 text-sm">{{ __('Pendiri (1991)') }}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Biografi --}}
    <section class="bg-gray-50">
        <div class="max-w-4xl mx-auto px-6 py-14 md:py-20">
            <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8 text-center">{{ __('Biografi') }}</h3>

            <div class="space-y-6 text-gray-600 leading-relaxed md:text-lg text-justify">
                <p>
                    {{ __('Dr. Ir. Akbar Tandjung adalah salah satu tokoh nasional Indonesia yang memiliki peran penting dalam dunia politik, pendidikan, dan pembangunan sumber daya manusia. Ia lahir di Sibolga, Sumatera Utara, pada 14 Agustus 1945.') }}
                </p>

                <p>
                    {{ __('Dalam perjalanan kariernya, beliau menjabat sebagai Menteri Pemuda dan Olahraga Republik Indonesia (Menpora) pada masa pemerintahan Presiden Soeharto Tahun 1993–1998, kemudian menjabat sebagai Menteri Negara Perumahan Rakyat pada Maret–Mei 1998. Selanjutnya beliau menjabat sebagai Ketua Umum Partai Golkar dan Ketua DPR RI pada periode 1999–2004.') }}
                </p>

                <p>
                    {{ __('Di luar aktivitas politik, beliau dikenal memiliki perhatian besar terhadap pengembangan pendidikan dan pembinaan generasi muda. Komitmen tersebut diwujudkan melalui berbagai kegiatan sosial dan pendidikan, termasuk melalui pendirian lembaga pendidikan di bawah naungan Yayasan Matauli di Tahun 1991.') }}
                </p>
            </div>
        </div>
    </section>

@endsection
