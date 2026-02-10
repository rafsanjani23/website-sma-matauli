@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @include('partials.sections.home.hero')
    @include('partials.sections.home.tentang')
    @include('partials.sections.home.program')
    @include('partials.sections.home.berita-prestasi-testi')
@endsection
