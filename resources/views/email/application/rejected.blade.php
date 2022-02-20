@extends('email.application.layout')

@section('heading')
    <h2 style='padding-top: 0; padding-bottom: 0; font-weight: 500; vertical-align: baseline; font-size: 20px; line-height: 24px; font-family: "Krub", sans-serif; margin: 0;' align="left">
        Dear {{$application->first_name}}
    </h2>
@endsection

@section('content')
    <p style="line-height: 24px; font-size: 16px; width: 100%; margin: 0;" align="left">
        Thank you for taking the time to meet with our team about the  <b>{{$application->job->title}}</b> role at Texon. It was a pleasure to learn more about your skills and accomplishments.
    </p>
    <p style="line-height: 24px; font-size: 16px; width: 100%; margin: 0; margin-top:24px;" align="left">
        Unfortunately, our team did not select you for further consideration.
    </p>
    <p style="line-height: 24px; font-size: 16px; width: 100%; margin: 0; margin-top:24px;" align="left">
        Now that we&#8217;ve had the chance to know more about you, we will be keeping your resume on file for future openings that better fit your profile.
    </p>
    <p style="line-height: 24px; font-size: 16px; width: 100%; margin: 0; margin-top:24px;" align="left">
        Thanks again for your interest in Texon and best of luck with your job search.
    </p>
@endsection

@section('signoff')
    <p style="line-height: 24px; font-size: 16px; width: 100%; margin: 0;" align="left">
        Digitally yours,
        <br>
        Texon.
    </p>
@endsection