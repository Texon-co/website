<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProjectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// Route::get('/privacy-policy', function () {
//     return view('privacy_policy');
// });

Route::group(['prefix' => 'job-opportunities'], function () {
    Route::get('/', [JobController::class, 'index']);
    Route::get('/{job}', [JobController::class, 'show']);
    Route::get('/{job}/application', [JobController::class, 'getApplication']);
    Route::post('/{job}/application', [JobController::class, 'submitApplication']);
});
Route::get('projects', [ProjectController::class, 'index'])->name('project.index');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
