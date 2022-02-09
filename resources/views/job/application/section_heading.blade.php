<!-- ======= Heading Section ======= -->
<section id="heading">
    <div class="container">
        <div class="row">
            <div class="section-title col-12">
                @if(!$success)
                    <h1 class="text-capitalized">{{$job->title}}</h1>
                    <span class="text-capitalized fw-bold">{{$job->location->name}}, {{$job->jobRole->name}}</span>
                    <p class="p-2">
                        Thank you for considering a career at Texon. Please take a minute to fill out the following form. After you have completed your application an email will be sent to you with information about how to check the status of your application.
                    </p>
                @else
                    <i class="bi bi-hand-thumbs-up fs-1"></i>
                    <h1 class="text-capitalized">Application Sent!</h1>
                    <span class="text-capitalized fw-lighter">We will review your application and will contact you if it's a good match.</span>
                @endif
            </div>
        </div>
    </div>
</section><!-- End Heading Section -->