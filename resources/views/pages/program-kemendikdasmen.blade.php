@extends('layouts.app')
@section('title', 'Program Kemendikdasmen')
@section('content')
    <section class="py-12 md:py-16 lg:py-20 bg-white">
        <div class="relative mx-auto px-4 sm:px-6 md:px-12 lg:px-24 xl:px-32">

            {{-- ===================== --}}
            {{-- SECTION HEADER --}}
            {{-- ===================== --}}
            <div class="text-center flex flex-col mb-16 md:mb-18">
                <div class="relative mx-auto">
                    <img src="{{ asset('assets/Logo_SMAN_Matauli.png') }}" alt="Program Kemendikdasmen" class="h-28 w-full">
                </div>
                <div>
                    <h2 class="mt-2 text-3xl md:text-4xl lg:text-5xl font-bold text-black">{{ __('Program Kemendikdasmen') }}</h2>
                    <div class="mt-2 mx-auto w-30 h-0.5 bg-yellow-400 rounded-full"></div>
                </div>
            </div>

            {{-- ===================== --}}
            {{-- PROGRAM GRID --}}
            {{-- ===================== --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10 max-w-6xl mx-auto items-stretch">
                @forelse ($items as $item)
                    <div
                        class="relative bg-white rounded-2xl shadow-md overflow-hidden border border-gray-100 hover:-translate-y-2 hover:shadow-2xl hover:shadow-red-900/10 hover:border-red-100 transition-all duration-500 h-full flex flex-col">
                        {{-- IMAGE CONTAINER --}}
                        <div class="relative h-52 md:h-60 overflow-hidden">
                            <img src="{{ Storage::url($item->gambar) }}" alt="{{ $item->judul }}"
                                class="w-full h-full object-cover object-center">
                            <div class="absolute inset-0 bg-linear-to-t from-black/30 to-transparent"></div>
                        </div>
                        {{-- CARD CONTENT --}}
                        <div class="p-6 md:p-8 flex flex-col flex-1">
                            <h3
                                class="text-xl md:text-2xl font-bold text-gray-900 mb-3 transition-colors duration-300 leading-snug text-center">
                                {{ $item->judul }}
                            </h3>
                            <div class="w-8 h-0.5 bg-yellow-400 mb-4 mx-auto"></div>
                            <p class="text-gray-500 text-sm md:text-base leading-relaxed mb-6 flex-1 text-justify">
                                {{ $item->deskripsi }}
                            </p>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-12">
                        <p class="text-gray-400 text-sm">{{ __('Belum ada data program kemendikdasmen.') }}</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
