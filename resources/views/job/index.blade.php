@php
    $preloader = true;
    $title = $title ?? "Career";
@endphp
@extends('master.layout')

@section('hero')
    @parent
    @include('job.index.section_hero')
@endsection

@section('main')
    @include('job.index.section_benefits')
    @include('job.index.section_jobs')
@endsection