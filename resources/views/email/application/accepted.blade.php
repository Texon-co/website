@extends('email.application.layout')

@section('heading')
    <h2 style='padding-top: 0; padding-bottom: 0; font-weight: 500; vertical-align: baseline; font-size: 20px; line-height: 24px; font-family: "Krub", sans-serif; margin: 0;' align="left">
        Dear {{$application->first_name}}
    </h2>
@endsection

@section('content')
    <p style="line-height: 24px; font-size: 16px; width: 100%; margin: 0" align="left">
        We acknowledge receipt of your resume and application for <b>{{$application->job->title}}</b> at Texon and sincerely appreciate your interest in our company.
    </p>
    <p style="line-height: 24px; font-size: 16px; width: 100%; margin: 0; margin-top:24px;" align="left">
        Texon is glad to announce that we reviewed your CV and we liked it. We will get back to you soon with more information. Stay tuned.
    </p>
@endsection

@section('signoff')
    <p style="line-height: 24px; font-size: 16px; width: 100%; margin: 0;" align="left">
        Digitally yours,
        <br>
        Texon.
    </p>
@endsection