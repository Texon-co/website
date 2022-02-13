<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReplaceColumnsOnJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->dropColumn('duties');
            $table->dropColumn('gains');
            $table->dropColumn('benefits');
            $table->after('short_description', function ($table) {
                $table->longText('description');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->dropColumn('description');
            $table->after('short_description', function ($table) {
                $table->text('duties');
                $table->text('gains');
                $table->text('benefits');
            });
        });
    }
}
