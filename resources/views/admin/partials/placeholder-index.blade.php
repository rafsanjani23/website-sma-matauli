{{-- Placeholder index page for admin sections --}}
@extends('admin.layouts.app')

@section('title', $title ?? 'Kelola Data')

@section('content')
    <div class="bg-white rounded-xl border border-gray-200 p-8 text-center">
        <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
            </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $title ?? 'Kelola Data' }}</h3>
        <p class="text-gray-500 text-sm">Halaman CRUD untuk {{ strtolower($title ?? 'data') }} akan dibuat di tahap selanjutnya.</p>
        <p class="text-gray-400 text-xs mt-2">Total data: <span class="font-semibold text-gray-600">{{ $count ?? 0 }}</span></p>
    </div>
@endsection
