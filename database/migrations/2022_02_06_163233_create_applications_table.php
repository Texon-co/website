<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('cell_phone');
            $table->string('address');
            $table->string('city');
            $table->foreignId('job_found_way_id');
            $table->string('job_found_way_other')->nullable();
            $table->date('earliest_start');
            $table->unsignedInteger('gross_salary_expectation_per_month');
            $table->foreignId('internship_duration_id')->nullable();
            $table->string('resume_file');
            $table->string('additional_file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
