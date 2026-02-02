@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @include('partials.sections.home.hero')
    @include('partials.sections.home.tentang')
    @include('partials.sections.home.jurusan')
    @include('partials.sections.home.prestasi')
    @include('partials.sections.home.testimonials')
    @include('partials.sections.home.berita')
@endsection
