{{-- Reusable index/table layout --}}
@extends('admin.layouts.app')

@section('title', $title)

@section('content')
    <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">

        {{-- Header --}}
        <div class="px-6 py-4 border-b border-gray-200 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
            <h2 class="text-lg font-bold text-gray-900">{{ $title }}</h2>
            @if ($showCreate ?? true)
                <a href="{{ $createRoute }}"
                    class="inline-flex items-center gap-2 bg-red-800 hover:bg-red-900 text-white font-semibold px-4 py-2 rounded-lg text-sm transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Tambah Data
                </a>
            @endif
        </div>

        {{-- Table --}}
        <div class="overflow-x-auto">
            @yield('table')
        </div>

        @if (isset($items) && $items->isEmpty())
            <div class="px-6 py-12 text-center">
                <p class="text-gray-400 text-sm">Belum ada data.</p>
            </div>
        @endif
    </div>
@endsection
