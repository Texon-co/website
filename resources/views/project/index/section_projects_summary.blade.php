<style>
    video{
        width: 50% !important;
        height: auto !important;
        aspect-ratio: 1 / 1;
    }
</style>
@foreach (json_decode($projects) as $project)
    <div class="mb-5 bg-light bg-gradient container d-flex flex-column justify-content-center align-items-center position-relative" data-aos="zoom-out">
        <div class="row p-3">
            <video controls class="col" preload='none' poster={{"storage/"
                . $project->poster}}>
                <source src="{{ "storage/"
                    . json_decode($project->video)[0]->download_link }}" type="video/mp4">
            </video>
            <div class="d-flex flex-column justify-content-between col">
                <h2 class="text-capitalize fs-1 p-2">{{$project->title}}</h2>
                <h4 class="p-2 overflow-auto">{{$project->details}}</h4>
                <a href="{{$project->website}}"
                    class="btn btn-primary p-2">{{$project->web_site_title}}</a>
            </div>
        </div>
    </div> 
@endforeach 
