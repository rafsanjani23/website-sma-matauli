@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @include('partials.sections.fasilitas-sekolah.fasilitas')
    @include('partials.sections.fasilitas-sekolah.fasilitas-akademik')
    @include('partials.sections.fasilitas-sekolah.fasilitas-umum')
@endsection
