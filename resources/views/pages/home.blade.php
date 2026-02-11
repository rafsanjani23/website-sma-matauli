@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @include('partials.sections.home.hero')
    @include('partials.sections.home.sejarah')
    @include('partials.sections.home.tentang')
    @include('partials.sections.home.program')
    @include('partials.sections.home.berita-prestasi-testi')
    @include('partials.sections.home.map')
@endsection
