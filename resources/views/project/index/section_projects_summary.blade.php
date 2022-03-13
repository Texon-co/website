@foreach (json_decode($projects) as $project)
    <div class="rounded shadow mb-5 bg-light bg-gradient container d-flex flex-column align-items-center position-relative" data-aos="zoom-out">
        <div class="row p-3">
            <video controls class="col" preload='none' poster={{"storage/"
                . $project->poster}}>
                <source src="{{ "storage/"
                    . json_decode($project->video)[0]->download_link }}" type="video/mp4">
            </video>
            <div class="d-flex flex-column justify-content-around col">
                <h2 class="text-capitalize fs-1 p-2">{{$project->title}}</h2>
                <h5 class="p-2 overflow-auto">{{$project->details}}</h4>
                <a href="{{$project->website}}"
                    class="btn btn-primary p-2">{{$project->button_text}}</a>
            </div>
        </div>
    </div> 
@endforeach 
