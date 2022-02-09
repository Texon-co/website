<section id="form">
    <div class="container">
        <form method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <h2>Add Resume</h2>
                <div class="col-12">
                    <input required class="form-control" type="file" id="resume_file" name="resume_file">
                </div>
            </div>
            <hr>
            <div class="row">
                <h2>Personal Information</h2>
                <div class="row mb-3">
                    <label for="first_name" class="col-sm-4 col-form-label">First Name</label>
                    <div class="col-sm-8">
                        <input required class="form-control" type="text" id="first_name" name="first_name" value="{{ old('first_name') }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="last_name" class="col-sm-4 col-form-label">Last Name</label>
                    <div class="col-sm-8">
                        <input required class="form-control" type="text" id="last_name" name="last_name" value="{{ old('last_name') }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input required class="form-control" type="email" id="email" name="email" value="{{ old('email') }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cell_phone" class="col-sm-4 col-form-label">Cell Phone</label>
                    <div class="col-sm-8">
                        <input required class="form-control" type="tel" pattern="\d*" id="cell_phone" name="cell_phone" value="{{ old('cell_phone') }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="city" class="col-sm-4 col-form-label">City</label>
                    <div class="col-sm-8">
                        <input required class="form-control" type="text" id="city" name="city" value="{{ old('city') }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="address" class="col-sm-4 col-form-label">Address</label>
                    <div class="col-sm-8">
                        <input required class="form-control" type="text" id="address" name="address" value="{{ old('address') }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="job_found_way_id" class="col-sm-4 col-form-label">How did you find out about this position?</label>
                    <div class="col-sm-8">
                        <select required class="form-select" id="job_found_way_id" name="job_found_way_id">
                            <option value="">Select an option</option>
                            @foreach ($jobFoundWays as $jobFoundWay)
                                <option {{$jobFoundWay->id == old('job_found_way_id') ? 'selected' : ''}} value={{$jobFoundWay->id}} class="text-capitalize">{{$jobFoundWay->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="job_found_way_other" class="col-sm-4 col-form-label">If "Other", please specify:</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="job_found_way_other" name="job_found_way_other" value="{{ old('job_found_way_other') }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="earliest_start" class="col-sm-4 col-form-label">Earliest start date</label>
                    <div class="col-sm-8">
                        <input required class="form-control" type="date" id="earliest_start" name="earliest_start" value="{{ old('earliest_start') }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="gross_salary_expectation_per_month" class="col-sm-4 col-form-label">Salary Expectation (gross/monthly and in IRR)</label>
                    <div class="col-sm-8">
                        <input required class="form-control" type="number" id="gross_salary_expectation_per_month" name="gross_salary_expectation_per_month" value="{{ old('gross_salary_expectation_per_month') }}">
                    </div>
                </div>
                {{-- job_role_id '2' is for internship --}}
                @if ($job->job_role_id == 2)
                    <div class="row mb-3">
                    <label for="internship_duration_id" class="col-sm-4 col-form-label">How long should your internship be?</label>
                    <div class="col-sm-8">
                        <select required class="form-select" id="internship_duration_id" name="internship_duration_id">
                            <option value="">Select an option</option>
                            @foreach ($internshipDurations as $internshipDuration)
                                <option {{$internshipDuration->id == old('internship_duration_id') ? 'selected' : ''}} value={{$internshipDuration->id}} class="text-capitalize">{{$internshipDuration->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @endif
            </div>
            <hr>
            <div class="row">
                <h2>Additional File</h2>
                <div class="col-12">
                    <input class="form-control" type="file" id="additional_file" name="additional_file">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</section>
<script>
    function checkJobFoundWay() {
        const selectedOption = document.getElementById('job_found_way_id').selectedOptions[0]
        const otherInput = document.getElementById('job_found_way_other')
        //{{-- '1' is the id of "other" option. on related changes, this value should be set accordingly. --}}
        if (selectedOption.value == 1) {
            otherInput.required = true
            otherInput.disabled = false
        } else {
            otherInput.required = false
            otherInput.disabled = true
        }
    }
    checkJobFoundWay()
    document.getElementById('job_found_way_id').addEventListener('change', checkJobFoundWay)
</script>