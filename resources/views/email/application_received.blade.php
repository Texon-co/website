@extends('email.master.layout')

@section('main')
    <article class="container p-2">
        <h2>
            Dear {{$application->first_name}}
        </h2>
        <p>
            Thanks for applying for the <b>{{$application->job->title}}</b> position. We’ll review your application carefully and Your CV will be reviewed and assessed against the posted jobs. Should your profile match our needs, our recruitment representatives will contact you.
        </p>
        <p>
            We wish you the best in your career!
            <br>
            Digitally yours,
            <br>
            Texon.
        </p>
    </article>
@endsection