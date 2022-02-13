@php
    $preloader = true;
    $title = $job->title;
@endphp
@extends('master.layout')

@section('main')
    @include('job.show.section_breadcrumbs')
    <article class="container">
        @include('job.show.section_heading')
        @include('job.show.section_description')
    </article>
@endsection