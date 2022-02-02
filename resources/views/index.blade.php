@php
    $preloader = true    
@endphp
@extends('master.layout')

@section('hero')
    @parent
    @include('index.section_hero')
@endsection

@section('main')
    @include('index.section_about')
    @include('index.section_features')
    @include('index.section_testimonials')
@endsection