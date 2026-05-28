@extends('layouts.app')

@section('title', $documentTitle)

@section('content')
    <section class="min-h-screen bg-slate-100 pt-28 pb-12 md:pt-32 md:pb-16">
        <div class="mx-auto w-full max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="mb-6 flex items-center justify-between gap-4">
                <div>
                    <p class="text-sm font-semibold uppercase text-red-800">Dokumen</p>
                    <h1 class="mt-1 text-2xl font-bold text-slate-950 md:text-3xl">{{ $documentTitle }}</h1>
                </div>

                <a href="{{ url()->previous() }}"
                    class="inline-flex items-center gap-2 rounded-lg border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-700 shadow-sm transition hover:border-red-800 hover:text-red-800">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                    </svg>
                    Kembali
                </a>
            </div>

            <div data-pdf-viewer data-pdf-url="{{ $pdfSourceUrl }}"
                class="select-none rounded-lg border border-slate-200 bg-white p-3 shadow-sm sm:p-4 md:p-6"
                oncontextmenu="return false">
                <div data-pdf-status
                    class="flex min-h-72 items-center justify-center rounded-lg border border-dashed border-slate-300 bg-slate-50 px-4 text-center text-sm font-semibold text-slate-600">
                    Memuat dokumen...
                </div>
                <div data-pdf-pages class="hidden space-y-6"></div>
            </div>

            <noscript>
                <div class="mt-4 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm font-semibold text-red-800">
                    Dokumen tidak dapat dimuat.
                </div>
            </noscript>
        </div>
    </section>

    @vite('resources/js/pdf-viewer.js')
@endsection
