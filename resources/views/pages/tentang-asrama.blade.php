@extends('layouts.app')
@section('title', 'Tentang Asrama')
@section('content')
    @include('partials.sections.tentang-asrama.hero')
    @include('partials.sections.tentang-asrama.desc')
    @include('partials.sections.tentang-asrama.pengasuh')
    @include('partials.sections.tentang-asrama.contact')
    @include('partials.sections.tentang-asrama.sosmed')
@endsection
