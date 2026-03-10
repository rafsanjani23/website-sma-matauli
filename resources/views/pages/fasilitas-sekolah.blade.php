@extends('layouts.app')

@section('title', 'Fasilitas Sekolah')

@section('content')
    @include('partials.sections.fasilitas-sekolah.fasilitas')

    @if($labStudi->count())
    <section class="bg-white">
        <div class="mx-auto px-4">
            <div class="text-center mb-18">
                <h1 class="mt-2 text-2xl md:text-3xl font-bold text-slate-950 mb-2">{{ __('LABORATORIUM / STUDI') }}</h1>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-2 px-10">
                @foreach ($labStudi as $item)
                <div>
                    <div class="bg-white border border-gray-200 shadow-md w-full max-w-sm rounded-4xl overflow-hidden mx-auto">
                        <div class="aspect-3/2">
                            <img src="{{ Storage::url($item->gambar) }}" class="w-full h-full object-cover" alt="{{ $item->nama }}" />
                        </div>
                    </div>
                    <div class="p-2">
                        <h5 class="text-matauli-red-dark text-center text-md font-semibold">{{ $item->nama }}</h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    @include('partials.sections.fasilitas-sekolah.fasilitas-akademik')
    @include('partials.sections.fasilitas-sekolah.fasilitas-umum')
@endsection
