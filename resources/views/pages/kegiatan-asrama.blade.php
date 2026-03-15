@extends('layouts.app')
@section('title', 'Kegiatan Asrama')
@section('content')
    @include('partials.sections.asrama.hero')
    @include('partials.sections.asrama.tentang')
    @include('partials.sections.asrama.jadwal-asrama')
    @include('partials.sections.asrama.kegiatan-asrama')
@endsection
