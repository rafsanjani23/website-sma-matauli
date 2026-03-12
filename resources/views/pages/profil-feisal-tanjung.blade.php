@extends('layouts.app')
@section('title', 'Profil Jenderal TNI (Purn.) Feisal Tanjung')
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
                        <img src="{{ asset('assets/Jenderal TNI (Purn.) Feisal Tanjung.webp') }}"
                            alt="Jenderal TNI (Purn.) Feisal Tanjung"
                            class="w-full h-full object-cover object-top scale-100">
                    </div>
                </div>

                {{-- Nama & Info --}}
                <div class="text-center md:text-left">
                    <p class="text-yellow-400/80 text-sm md:text-base font-medium tracking-widest uppercase mb-2">
                        {{ __('Profil Tokoh Pendiri') }}</p>
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white leading-tight mb-1">Jenderal TNI
                        (Purn.)</h1>
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-yellow-400 italic font-libre leading-tight">
                        Feisal Tanjung</h2>
                    <div class="mt-4 flex items-center justify-center md:justify-start">
                        <span class="text-yellow-400/80 text-sm font-medium">{{ __('Pendiri Yayasan MATAULI') }}</span>
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
                    <p class="font-semibold text-gray-800 text-sm">Tarutung, Sumut</p>
                </div>
                <div class="py-6 px-4 text-center">
                    <p class="text-[10px] md:text-xs text-gray-400 uppercase tracking-wider mb-1">{{ __('Tanggal Lahir') }}
                    </p>
                    <p class="font-semibold text-gray-800 text-sm">17 Juni 1939</p>
                </div>
                <div class="py-6 px-4 text-center">
                    <p class="text-[10px] md:text-xs text-gray-400 uppercase tracking-wider mb-1">{{ __('Wafat') }}</p>
                    <p class="font-semibold text-gray-800 text-sm">18 Feb 2013</p>
                </div>
                <div class="py-6 px-4 text-center">
                    <p class="text-[10px] md:text-xs text-gray-400 uppercase tracking-wider mb-1">{{ __('Panglima TNI') }}
                    </p>
                    <p class="font-semibold text-gray-800 text-sm">1993–1998</p>
                </div>
                <div class="py-6 px-4 text-center">
                    <p class="text-[10px] md:text-xs text-gray-400 uppercase tracking-wider mb-1">{{ __('Menko Polkam') }}
                    </p>
                    <p class="font-semibold text-gray-800 text-sm">1998–1999</p>
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
                    {{ __('Jendral TNI. Feisal Tanjung merupakan salah satu tokoh militer Indonesia yang memiliki peran penting dalam perjalanan Tentara Nasional Indonesia. Lahir di Tarutung, Sumatera Utara, pada 17 Juni 1939 dan dikenal sebagai perwira tinggi yang memiliki dedikasi besar terhadap pengabdian kepada negara.') }}
                </p>

                <p>
                    {{ __('Bapak Jendral TNI. Feisal Tanjung menjabat sebagai Panglima Tentara Nasional Indonesia pada periode 1993–1998 pada masa pemerintahan Presiden Soeharto. Selanjutnya, beliau menjabat sebagai Menteri Koordinator Bidang Politik dan Keamanan Republik Indonesia pada tahun 1998–1999 pada masa pemerintahan Presiden B. J. Habibie.') }}
                </p>

                <p>
                    {{ __('Sebagai tokoh nasional yang berasal dari Sumatera Utara, Feisal Tanjung dikenal memiliki kepedulian besar terhadap pembangunan daerah dan peningkatan kualitas sumber daya manusia. Ia juga dikenal sebagai sosok yang memiliki komitmen kuat dalam mendukung pembangunan pendidikan bagi generasi muda Indonesia, termasuk melalui pendirian lembaga pendidikan di bawah naungan Yayasan Matauli di Tahun 1991.') }}
                </p>

                <p>
                    {{ __('Wafat pada 18 Februari 2013 di Jakarta pada usia 73 tahun. Jenderal TNI (Purn.) Feisal Tanjung dimakamkan secara militer di Taman Makam Pahlawan Kalibata, Jakarta Selatan, sebagai bentuk penghormatan atas jasa dan pengabdiannya kepada bangsa dan negara.') }}
                </p>
            </div>
        </div>
    </section>

    {{-- Karier & Peran --}}
    <section class="bg-white">
        <div class="max-w-5xl mx-auto px-6 py-14 md:py-20">
            <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-10 text-center">{{ __('Perjalanan Karier') }}</h3>

            <div class="relative">
                {{-- Timeline line --}}
                <div class="absolute left-6 md:left-1/2 top-0 bottom-0 w-0.5 bg-red-100 -translate-x-1/2"></div>

                {{-- Item 1 - 1991 --}}
                <div class="relative flex flex-col md:flex-row items-start mb-10 md:mb-12">
                    <div class="md:w-1/2 md:pr-12 md:text-right pl-14 md:pl-0">
                        <span class="text-red-800 font-bold text-sm">1991</span>
                        <h4 class="text-lg font-bold text-gray-900 mt-1">{{ __('Pendiri Yayasan MATAULI') }}</h4>
                        <p class="text-gray-500 text-sm mt-1">
                            {{ __('Mendirikan Yayasan Maju Tapian Nauli untuk memajukan pendidikan di Tapanuli') }}</p>
                    </div>
                    <div
                        class="absolute left-6 md:left-1/2 w-3 h-3 bg-yellow-400 rounded-full ring-4 ring-yellow-100 -translate-x-1/2 mt-1.5">
                    </div>
                    <div class="md:w-1/2 md:pl-12 hidden md:block"></div>
                </div>

                {{-- Item 2 - 1993 --}}
                <div class="relative flex flex-col md:flex-row items-start mb-10 md:mb-12">
                    <div class="md:w-1/2 md:pr-12 hidden md:block"></div>
                    <div
                        class="absolute left-6 md:left-1/2 w-3 h-3 bg-red-800 rounded-full ring-4 ring-red-100 -translate-x-1/2 mt-1.5">
                    </div>
                    <div class="md:w-1/2 md:pl-12 pl-14">
                        <span class="text-red-800 font-bold text-sm">1993–1998</span>
                        <h4 class="text-lg font-bold text-gray-900 mt-1">{{ __('Panglima TNI') }}</h4>
                        <p class="text-gray-500 text-sm mt-1">{{ __('Masa pemerintahan Presiden Soeharto') }}</p>
                    </div>
                </div>

                {{-- Item 3 - 1994 --}}
                <div class="relative flex flex-col md:flex-row items-start mb-10 md:mb-12">
                    <div class="md:w-1/2 md:pr-12 md:text-right pl-14 md:pl-0">
                        <span class="text-red-800 font-bold text-sm">14 Juni 1994</span>
                        <h4 class="text-lg font-bold text-gray-900 mt-1">
                            {{ __('Pendirian SMA Negeri 1 (Plus) Matauli Pandan') }}</h4>
                        <p class="text-gray-500 text-sm mt-1">
                            {{ __('Mendirikan dan meresmikan SMA Negeri 1 (Plus) Matauli Pandan sebagai sekolah unggulan di Tapanuli Tengah') }}
                        </p>
                    </div>
                    <div
                        class="absolute left-6 md:left-1/2 w-3 h-3 bg-yellow-400 rounded-full ring-4 ring-yellow-100 -translate-x-1/2 mt-1.5">
                    </div>
                    <div class="md:w-1/2 md:pl-12 hidden md:block"></div>
                </div>

                {{-- Item 4 - 1998 --}}
                <div class="relative flex flex-col md:flex-row items-start">
                    <div class="md:w-1/2 md:pr-12 hidden md:block"></div>
                    <div
                        class="absolute left-6 md:left-1/2 w-3 h-3 bg-red-800 rounded-full ring-4 ring-red-100 -translate-x-1/2 mt-1.5">
                    </div>
                    <div class="md:w-1/2 md:pl-12 pl-14">
                        <span class="text-red-800 font-bold text-sm">1998–1999</span>
                        <h4 class="text-lg font-bold text-gray-900 mt-1">{{ __('Menko Polkam RI') }}</h4>
                        <p class="text-gray-500 text-sm mt-1">{{ __('Masa pemerintahan Presiden B. J. Habibie') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Back --}}
    <section class="bg-gray-50 border-t border-gray-100">
        <div class="max-w-5xl mx-auto px-6 py-8 flex items-center justify-between">
            <a href="{{ url('/') }}#sejarah"
                class="inline-flex items-center gap-2 text-red-800 hover:text-red-600 font-semibold transition-colors group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:-translate-x-1 transition-transform"
                    viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                        clip-rule="evenodd" />
                </svg>
                {{ __('Kembali ke Beranda') }}
            </a>
            <a href="{{ url('/sejarah') }}"
                class="inline-flex items-center gap-2 text-red-800 hover:text-red-600 font-semibold transition-colors group">
                {{ __('Halaman Sejarah') }}
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:translate-x-1 transition-transform"
                    viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </section>

@endsection
