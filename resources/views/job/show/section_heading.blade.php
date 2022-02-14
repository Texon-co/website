<!-- ======= Heading Section ======= -->
<section id="heading">
    <div class="row">
        <div class="section-title col-md-8">
            <h1 class="text-capitalized">{{$job->title}}</h1>
            <br/>
            <span class="text-capitalized">{{$job->location->name}}, {{$job->jobRole->name}}</span>
        </div>
        <div class="col-md-4">
            <a href="/job-opportunities/{{$job->id}}/application" class="btn btn-primary w-100 text-capitalized">
                Apply
            </a>
            <br/>
            {{-- <p class="fw-lighter text-center">
                By applying you accept the <a href="/privacy-policy" class="text-decoration-none">privacy policy</a>.
            </p> --}}
        </div>
    </div>
</section>
<!-- End Heading Section -->