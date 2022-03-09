
@php
    $preloader = true;
    $title = $title ?? "Project";
@endphp
@extends('master.layout')

@section('hero')
    @parent
    @include('project.index.section_hero')
@endsection

@section('main')

    @include('project.index.section_projects_summary')

@endsection