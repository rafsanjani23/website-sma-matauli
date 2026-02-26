@extends('layouts.app')

@section('title', 'Program Kemataulian')

@section('content')
    <section class="py-12 md:py-16 lg:py-20 bg-white">
        <div class="relative mx-auto px-4 sm:px-6 md:px-12 lg:px-24 xl:px-32">

            {{-- ===================== --}}
            {{-- SECTION HEADER --}}
            {{-- ===================== --}}
            <div class="text-center flex flex-col mb-12 md:mb-16">
                <div class="relative mx-auto">
                    <img src="{{ asset('assets/Logo_SMAN_Matauli.png') }}" alt="Program Kemataulian"
                        class="h-28 w-full">
                </div>
                <div>
                    <h2 class="mt-2 text-3xl md:text-4xl lg:text-5xl font-bold text-black">Program Kemataulian</h2>
                    <div class="mt-2 mx-auto w-18 h-0.5 bg-yellow-400 rounded-full"></div>
                </div>
            </div>

            {{-- ===================== --}}
            {{-- PROGRAM GRID --}}
            {{-- 1 kolom (mobile) → 2 kolom (tablet) → 3 kolom (desktop) --}}
            {{-- ===================== --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10 max-w-6xl mx-auto items-stretch">

                {{-- ===== CARD: Program Kemataulian ===== --}}
                <div
                    class="relative bg-white rounded-2xl shadow-md overflow-hidden border border-gray-100 hover:-translate-y-2 hover:shadow-2xl hover:shadow-red-900/10 hover:border-red-100 transition-all duration-500 h-full flex flex-col">

                    {{-- IMAGE CONTAINER --}}
                    <div class="relative h-52 md:h-60 overflow-hidden">
                        <img src="https://readymadeui.com/Imagination.webp" alt="Program Kemataulian"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                        <div class="absolute inset-0 bg-linear-to-t from-black/30 to-transparent"></div>
                    </div>

                    {{-- CARD CONTENT --}}
                    <div class="p-6 md:p-8 flex flex-col flex-1">
                        <h3
                            class="text-xl md:text-2xl font-bold text-gray-900 mb-3 group-hover:text-red-800 transition-colors duration-300 leading-snug">
                            KEMATAULIAN 1
                        </h3>
                        <div class="w-8 h-0.5 bg-yellow-400 mb-4 group-hover:w-14 transition-all duration-500"></div>
                        <p class="text-gray-500 text-sm md:text-base leading-relaxed mb-6 flex-1">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore beatae obcaecati dignissimos
                            molestias, accusamus laboriosam delectus vero aperiam qui earum voluptate cum deleniti.
                        </p>
                    </div>
                </div>
                {{-- ===== CARD: Program Kemataulian ===== --}}
                <div
                    class="relative bg-white rounded-2xl shadow-md overflow-hidden border border-gray-100 hover:-translate-y-2 hover:shadow-2xl hover:shadow-red-900/10 hover:border-red-100 transition-all duration-500 h-full flex flex-col">

                    {{-- IMAGE CONTAINER --}}
                    <div class="relative h-52 md:h-60 overflow-hidden">
                        <img src="https://readymadeui.com/Imagination.webp" alt="Program Kemataulian"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                        <div class="absolute inset-0 bg-linear-to-t from-black/30 to-transparent"></div>
                    </div>

                    {{-- CARD CONTENT --}}
                    <div class="p-6 md:p-8 flex flex-col flex-1">
                        <h3
                            class="text-xl md:text-2xl font-bold text-gray-900 mb-3 group-hover:text-red-800 transition-colors duration-300 leading-snug">
                            KEMATAULIAN 2
                        </h3>
                        <div class="w-8 h-0.5 bg-yellow-400 mb-4 group-hover:w-14 transition-all duration-500"></div>
                        <p class="text-gray-500 text-sm md:text-base leading-relaxed mb-6 flex-1">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore beatae obcaecati dignissimos
                            molestias, accusamus laboriosam delectus vero aperiam qui earum voluptate cum deleniti.
                        </p>
                    </div>
                </div>
                {{-- ===== CARD: Program Kemataulian ===== --}}
                <div
                    class="relative bg-white rounded-2xl shadow-md overflow-hidden border border-gray-100 hover:-translate-y-2 hover:shadow-2xl hover:shadow-red-900/10 hover:border-red-100 transition-all duration-500 h-full flex flex-col">

                    {{-- IMAGE CONTAINER --}}
                    <div class="relative h-52 md:h-60 overflow-hidden">
                        <img src="https://readymadeui.com/Imagination.webp" alt="Program Kemataulian"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                        <div class="absolute inset-0 bg-linear-to-t from-black/30 to-transparent"></div>
                    </div>

                    {{-- CARD CONTENT --}}
                    <div class="p-6 md:p-8 flex flex-col flex-1">
                        <h3
                            class="text-xl md:text-2xl font-bold text-gray-900 mb-3 group-hover:text-red-800 transition-colors duration-300 leading-snug">
                            KEMATAULIAN 3
                        </h3>
                        <div class="w-8 h-0.5 bg-yellow-400 mb-4 group-hover:w-14 transition-all duration-500"></div>
                        <p class="text-gray-500 text-sm md:text-base leading-relaxed mb-6 flex-1">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore beatae obcaecati dignissimos
                            molestias, accusamus laboriosam delectus vero aperiam qui earum voluptate cum deleniti.
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
