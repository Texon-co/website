<?php

namespace App\Http\Controllers\Voyager;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \TCG\Voyager\Http\Controllers\VoyagerBaseController as Controller;

class ProjectController extends Controller
{
    // public function store(Request $request)
    // {
    //     $newFileName = time() . '.' . $request->file->getClientOriginalExtension();
    //     Storage::putFileAs(
    //         'public/projects'
    //             . $request->file,
    //         $newFileName
    //     );

    //     Project::create([
    //         'title' => $request->title,
    //         'file' => $request->file,
    //         'details' => $request->details,
    //         'details' => $request->link,
    //     ]);
    //     return back();
    // }
}
