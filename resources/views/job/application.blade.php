@php
    $preloader = true;
    $title = "application - $job->title";
    $success = $success ?? false;
@endphp
@extends('master.layout')

@section('hero')
    @parent
    <section></section>
@endsection

@section('main')
    @include('job.application.section_heading')
    @if (!$success)
        <hr>
        @if ($errors->any())
            @include('job.application.errors')
        @endif
        @include('job.application.form')
    @endif
@endsection