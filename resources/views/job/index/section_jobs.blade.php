<!-- ======= Job Opportunities Section ======= -->
<style>
#job-opportunities option:disabled {
    display: none;
}
#job-opportunities #jobs .accordion-header button span {
    padding-right: 2em;
    display: inline-block;
    width: 100%;
    text-align: end
}
</style>
<script>
    var jobs = {{Js::from($jobs)}}
    var departments = {{Js::from($departments)}}
    var locations = {{Js::from($locations)}}
    var jobRoles = {{Js::from($jobRoles)}}
</script>
<section id="job-opportunities">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2 class="text-capitalize">Job Opportunities</h2>
        </div>
        <div class="input-group p-5">
            <div class="col-md-4 col-12 p-2">
                <select name="departments" id="departments" class="form-select" aria-placeholder="Department">
                    <option value="" selected class="text-capitalize">Department</option>
                    @foreach ($departments as $department)
                        <option value={{$department->id}} class="text-capitalize">{{$department->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 col-12 p-2">
                <select name="locations" id="locations" class="form-select" aria-placeholder="Location">
                    <option value="" selected class="text-capitalize">Location</option>
                    @foreach ($locations as $location)
                        <option value={{$location->id}} class="text-capitalize">{{$location->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 col-12 p-2">
                <select name="job-roles" id="job-roles" class="form-select" aria-placeholder="Job Role">
                    <option value="" selected class="text-capitalize">Job Role</option>
                    @foreach ($jobRoles as $jobRole)
                        <option value={{$jobRole->id}} class="text-capitalize">{{$jobRole->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="accordion" id="jobs">
        </div>
    </div>
    <script src="/assets/js/sections/job_opportunities.js"></script>
</section>
<!-- End Job Opportunities Section -->