@extends('layouts.app')
@section('title', 'Visi Misi')
@section('content')
    @include('partials.sections.visi-misi.hero')
    @include('partials.sections.visi-misi.kurikulum')
    @include('partials.sections.visi-misi.visi')
    @include('partials.sections.visi-misi.misi')
@endsection
