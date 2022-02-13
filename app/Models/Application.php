<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    public $fillable = [
        'job_id',
        'first_name',
        'last_name',
        'email',
        'cell_phone',
        'address',
        'city',
        'job_found_way_id',
        'job_found_way_other',
        'earliest_start',
        'gross_salary_expectation_per_month',
        'internship_duration_id',
        'resume_file',
        'additional_file'
    ];

    public function job() {
        return $this->belongsTo(Job::class);
    }
}
