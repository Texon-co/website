@extends('email.application.layout')

@section('heading')
    <h2 style='padding-top: 0; padding-bottom: 0; font-weight: 500; vertical-align: baseline; font-size: 20px; line-height: 24px; font-family: "Krub", sans-serif; margin: 0;' align="left">
        Dear {{$application->first_name}}
    </h2>
@endsection

@section('content')
    <p style="line-height: 24px; font-size: 16px; width: 100%; margin: 0;" align="left">
        Thanks for applying for the <b>{{$application->job->title}}</b> position. We&#8217;ll review your application carefully and Your CV will be reviewed and assessed against the posted jobs. Should your profile match our needs, our recruitment representatives will contact you.
    </p>
@endsection

@section('signoff')
    <p style="line-height: 24px; font-size: 16px; width: 100%; margin: 0;" align="left">
        We wish you the best in your career!
        <br>
        Digitally yours,
        <br>
        Texon.
    </p>
@endsection