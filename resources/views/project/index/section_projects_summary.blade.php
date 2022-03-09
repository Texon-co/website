
<section id="benefits" class="steps">
    <div class="container-fluid">
        @foreach (json_decode($projects) as $project)
            <div class="row mb-5 bg-light bg-gradient">
                    <div class="col" style="margin-left: 13rem">
                        <div class="d-flex flex-column">
                            <h3 class="text-capitalize fs-1 p-2">{{$project->title}}</h3>
                            <p class="p-2">{{$project->details}}</p>
                            <a href="{{$project->link}}"
                                class="btn btn-primary p-2">Go to demo</a>
                        </div>
                    </div>
                    <div class="col">   
                        <video controls class="video" preload='none' poster={{"storage" . "/"
                        . $project->poster}}>
                            <source src="{{ "storage" . "/"
                                . json_decode($project->file)[0]->download_link }}" type="video/mp4">
                        </video>
                    </div>
                    </div>
                </div>
            </div>
        @endforeach 
    </div> 
</section>