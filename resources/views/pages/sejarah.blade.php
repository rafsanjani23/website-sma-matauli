@extends('layouts.app')
@section('title', __('Sejarah'))
@section('content')
    <!-- ============================================ -->
    <!-- SEJARAH SEKOLAH SECTION - START -->
    <!-- ============================================ -->
    @include('partials.sections.sejarah.hero')
    @include('partials.sections.sejarah.alur')
    <!-- ============================================ -->
    <!-- SEJARAH SEKOLAH SECTION - END -->
    <!-- ============================================ -->
@endsection
