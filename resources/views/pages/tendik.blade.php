@extends('layouts.app')
@section('title', 'Tenaga Pendidikan')
@section('content')
  @include('partials.sections.tendik.hero')
  @include('partials.sections.tendik.data-tendik')
  @include('partials.sections.tendik.guru-matkul')
@endsection
