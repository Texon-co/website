<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Models\Application;
use App\Models\Department;
use App\Models\InternshipDuration;
use App\Models\Job;
use App\Models\JobFoundWay;
use App\Models\JobRole;
use App\Models\Location;
use App\Mail\Application\Received;

class JobController extends Controller
{

    public function index() {
        $departments = Department::all();
        $locations = Location::all();
        $jobRoles = JobRole::all();
        $jobs = Job::with(['department', 'location', 'jobRole'])->get();
        $data = [
            'departments' => $departments,
            'locations' => $locations,
            'jobRoles' => $jobRoles,
            'jobs' => $jobs
        ];
        return view('job.index', $data);
    }

    public function show(Request $request, Job $job) {
        $job->loadMissing(['department', 'location', 'jobRole']);
        $data = [
            'job' => $job
        ];
        return view('job.show', $data);
    }

    public function getApplication(Request $request, Job $job) {
        $job->loadMissing(['department', 'location', 'jobRole']);
        $jobFoundWays = JobFoundWay::all();
        $internshipDurations = InternshipDuration::all();
        $data = [
            'job' => $job,
            'jobFoundWays' => $jobFoundWays,
            'internshipDurations' => $internshipDurations
        ];
        return view('job.application', $data);
    }

    public function submitApplication(Request $request, Job $job) {
        $data = $request->validate(
            [
                'first_name' => [
                    'required',
                    'string'
                ],
                'last_name' => [
                    'required',
                    'string'
                ],
                'email' => [
                    'required',
                    'email'
                ],
                'cell_phone' => [
                    'required',
                    'numeric'
                ],
                'address' => [
                    'required',
                    'string'
                ],
                'city' => [
                    'required',
                    'string'
                ],
                'job_found_way_id' => [
                    'required',
                    'integer',
                    'exists:job_found_ways,id'
                ],
                'job_found_way_other' => [
                    'required_if:job_found_way_id,1',
                    'exclude_unless:job_found_way_id,1',
                    'string'
                ],
                'earliest_start' => [
                    'required',
                    'date',
                    'after:now'
                ],
                'gross_salary_expectation_per_month' => [
                    'required',
                    'integer',
                    'gt:0'
                ],
                'internship_duration_id' => [
                    'integer',
                    'exists:internship_durations,id'
                ],
                'resume_file' => [
                    'required',
                    'file',
                ],
                'additional_file' => [
                    'file',
                ]
            ],
            [],
            [
            'job_found_way_id' => 'way you found this job',
            'job_found_way_other' => 'description you provided for the way you found this job',
            'earliest_start' => 'earliest start date',
            'gross_salary_expectaion_per_month' => 'salary expectation',
        ]);
        $lastId = Application::orderByDesc('id')->first()?->id ?? 0;
        $newId = ++$lastId;
        $uploadPath = "Applications/id_$newId";
        $resumeFileName = 'resume_' . $request->resume_file->getClientOriginalName();
        $request->file('resume_file')->storeAs($uploadPath, $resumeFileName, 'public');
        $data['resume_file'] = "/storage/$uploadPath/$resumeFileName";
        if ($request->hasFile('additional_file')) {
            $additionalFileName = 'additional_' . $request->additional_file->getClientOriginalName();
            $request->file('additional_file')->storeAs($uploadPath, $additionalFileName, 'public');
            $data['additional_file'] = "/storage/$uploadPath/$additionalFileName";
        }
        $data['job_id'] = $job->id;
        $application = Application::create($data);
        $data = [
            'job' => $job,
            'success' => true
        ];
        Mail::to($application->email)->queue(new Received($application));
        return view('job.application', $data);
    }
}
