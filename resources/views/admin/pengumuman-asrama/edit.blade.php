@extends('admin.layouts.app')

@section('title', 'Edit Pengumuman Asrama')

@section('content')
    <div class="max-w-4xl">
        <div class="mb-6">
            <a href="{{ route('admin.pengumuman-asrama.index', request()->query()) }}"
                class="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-red-800 transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>
                Kembali
            </a>
        </div>

        <div class="bg-white rounded-xl border border-gray-200 p-6 md:p-8">
            <h2 class="text-lg font-bold text-gray-900 mb-6">Edit Pengumuman Asrama</h2>

            @include('admin.pengumuman-asrama.partials.errors')

            <form
                action="{{ route('admin.pengumuman-asrama.update', array_merge(['id' => $item->id], request()->query())) }}"
                method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf
                @method('PUT')
                @include('admin.pengumuman-asrama.partials.form', ['item' => $item])
            </form>
        </div>
    </div>

    @include('admin.partials.lang-tabs-script')
@endsection
