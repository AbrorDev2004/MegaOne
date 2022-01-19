@extends('layouts.site')
@section('content')
    @include('sections.home');
    @include('sections.rastalar');
    @include('sections.narxlar');
    @include('sections.about');
    @include('sections.parallex');
    @include('sections.elonlar');
    {{-- @include('sections.booking'); --}}
    @include('sections.contact');
@endsection
