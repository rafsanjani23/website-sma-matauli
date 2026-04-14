@extends('layouts.app')
@section('title', $item->judul)
@section('content')

    {{-- CONTENT --}}
    <section class="py-10 md:py-12 bg-white">
        <div class="max-w-4xl mx-auto px-6 md:px-8">

            {{-- BACK LINK --}}
            <a href="{{ route('program-kemataulian') }}"
                class="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-red-800 transition mb-8">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>
                {{ __('Kembali ke Program Kemataulian') }}
            </a>

            {{-- JUDUL --}}
            <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-gray-900 mb-3 leading-tight text-center">
                {{ $item->judul }}
            </h1>
            <div class="w-30 h-1 bg-yellow-400 rounded-full mb-8 mx-auto"></div>

            <div class="w-full h-64 md:h-96 lg:h-[34rem] max-w-4xl mx-auto rounded-xl overflow-hidden shadow-lg mb-10 md:mb-12">
                <img src="{{ Storage::url($item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-full object-cover object-top" />
            </div>

            {{-- RINGKASAN --}}
            @if ($item->ringkasan ?? $item->deskripsi)
                <p class="text-base md:text-lg text-gray-500 leading-relaxed mb-8 italic border-l-4 border-red-800 pl-4 mt-3.5">
                    {{ $item->ringkasan ?? $item->deskripsi }}
                </p>
            @endif

            {{-- ISI KONTEN --}}
            @if ($item->isi_konten)
                <div class="prose prose-gray max-w-none text-sm md:text-base leading-relaxed text-slate-700 text-justify space-y-4">
                    {!! nl2br(e($item->isi_konten)) !!}
                </div>
            @endif

            {{-- GAMBAR OPSIONAL --}}
            @if ($item->gambar_opsional)
                <div class="w-full h-64 md:h-96 lg:h-[34rem] max-w-4xl mx-auto rounded-xl overflow-hidden shadow-lg mb-10 md:mb-12 mt-10">
                    <img src="{{ Storage::url($item->gambar_opsional) }}" alt="{{ $item->judul }}" class="w-full h-full object-cover object-top" />
                </div>
            @endif

        </div>
    </section>

@endsection
